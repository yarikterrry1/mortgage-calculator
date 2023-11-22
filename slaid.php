<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0px auto;
        }
		
		
		.carousel {
    margin: 0 auto;
    position: relative;
}
    .carousel .carousel-indicators {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        z-index: 15;
        display: flex;
        justify-content: center;
        padding: 10px;
        list-style: none;
    }
        .carousel .carousel-indicators li {
            flex: 0 1 auto;
            width: 40px;
            height: 20px;
            margin-right: 5px;
            margin-left: 5px;
            cursor: pointer;
            background-color: grey;
            border: 2px solid #fff;
            border-radius: 10%;
        }
        .carousel .carousel-indicators .active {
            background-color: red;
        }
    .carousel .carousel-window {
        width: 100%;
        height: 400px;
        position: relative;
        overflow: hidden;
    }
    .carousel .carousel-slides {
        height: 100%;
        display: flex;
        transition: transform 0.5s;
    }
    .carousel .carousel-item {
        height: 100%;
    }
        .carousel .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    .carousel .carousel-prev, .carousel .carousel-next {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 15%;
        color: #fff;
        opacity: 0.7;
        text-align: center;
        font-size: 40px;
        text-decoration: none;
    }
    .carousel .carousel-prev:hover, .carousel .carousel-next:hover {
        opacity: 1;
        background-color: rgba(0, 0, 0, 0.2);
    }
    .carousel .carousel-prev {
        left: 0;
    }
    .carousel .carousel-next {
        right: 0;
    }
    </style>
    <link rel="stylesheet" href="slider.css">
    <script src="slider.js"></script>
  <script>
/*
 * <div class="carousel"> width: 100% (от контейнера .container 900px)
 *     <div class="carousel-window"> width: 100% (от родителя 900px); height: 500px
 *         <div class="carousel-slides"> display: flex, style.width = 300% (2700px)
 *             <div class="carousel-item">...</div> style.width = 33.33333% (900px)
 *             <div class="carousel-item">...</div> style.width = 33.33333% (900px)
 *             <div class="carousel-item">...</div> style.width = 33.33333% (900px)
 *         </div>
 *     </div>
 * </div>
 * Можно сказать, что carousel-window представляет собой окно просмотра 900x500px,
 * в этом окне просмотра виден одновременно только один кадр (слайд). Элемент
 * carousel-slides представляет из себя цепочку из трех кадров (как в кино). Эти
 * кадры выстроены по горизонтали благодаря display:flex. При клике на кнопки
 * next и prev — цепочка смещается влево, и в окне просмотра появляется очередной
 * кадр (слайд).
 */

class Slider {
    constructor(slider, autoplay = true) {
        // элемент div.carousel
        this.slider = slider;
        // все кадры (слайды)
        this.allFrames = slider.querySelectorAll('.carousel-item');
        // цепочка кадров
        this.frameChain = slider.querySelector('.carousel-slides');
        // кнопка «вперед»
        this.nextButton = slider.querySelector('.carousel-next');
        // кнопка «назад»
        this.prevButton = slider.querySelector('.carousel-prev');

        this.index = 0; // индекс кадра, который сейчас в окне просмотра
        this.length = this.allFrames.length; // сколько всего есть кадров
        this.autoplay = autoplay; // включить автоматическую прокрутку?
        this.paused = null; // чтобы можно было выключать автопрокрутку

        this.init(); // инициализация слайдера
    }

    init() {
        this.dotButtons = this.dots(); // создать индикатор текущего кадра

        // все кадры должны быть одной ширины, равной ширине окна просмотра;
        // если кадров три, то ширина каждого кадра будет 100/3 = 33.33333%
        // от ширины контейнера .carousel-slides, то есть 900 пикселей
        this.allFrames.forEach(frame => frame.style.width = 100/this.length + '%');
        // ширина цепочки кадров должна равна ширине всех кадров, то есть
        // 900*3 = 2700 пикселей; но удобнее задать в процентах от родителя,
        // если кадров три, то ширина контейнера кадров будет 100*3 = 300%
        this.frameChain.style.width = 100 * this.length + '%';

        this.nextButton.addEventListener('click', event => { // клик по кнопке «вперед»
            event.preventDefault();
            this.next();
        });

        this.prevButton.addEventListener('click', event => { // клик по кнопке «назад»
            event.preventDefault();
            this.prev();
        });

        // клики по кнопкам индикатора текущего кадра
        this.dotButtons.forEach(dot => {
            dot.addEventListener('click', event => {
                event.preventDefault();
                const index = this.dotButtons.indexOf(event.target);
                if (index === this.index) return;
                this.goto(index);
            });
        });

        if (this.autoplay) { // включить автоматическую прокрутку?
            this.play();
            // когда мышь над слайдером — останавливаем автоматическую прокрутку
            this.slider.addEventListener('mouseenter', () => clearInterval(this.paused));
            // когда мышь покидает пределы слайдера — опять запускаем прокрутку
            this.slider.addEventListener('mouseleave', () => this.play());
        }
    }

    // перейти к кадру с индексом index
    goto(index) {
        // изменить текущий индекс...
        if (index > this.length - 1) {
            this.index = 0;
        } else if (index < 0) {
            this.index = this.length - 1;
        } else {
            this.index = index;
        }
        // ...и выполнить смещение
        this.move();
    }

    // перейти к следующему кадру
    next() {
        this.goto(this.index + 1);
    }

    // перейти к предыдущему кадру
    prev() {
        this.goto(this.index - 1);
    }

    // рассчитать и выполнить смещение
    move() {
        // на сколько нужно сместить, чтобы нужный кадр попал в окно
        const offset = 100/this.length * this.index;
        this.frameChain.style.transform = `translateX(-${offset}%)`;
        this.dotButtons.forEach(dot => dot.classList.remove('active'));
        this.dotButtons[this.index].classList.add('active');
    }

    // запустить автоматическую прокрутку
    play() {
        this.paused = setInterval(() => this.next(), 3000);
    }

    // создать индикатор текущего слайда
    dots() {
        const ol = document.createElement('ol');
        ol.classList.add('carousel-indicators');
        const children = [];
        for (let i = 0; i < this.length; i++) {
            let li = document.createElement('li');
            if (i === 0) li.classList.add('active');
            ol.append(li);
            children.push(li);
        }
        this.slider.prepend(ol);
        return children;
    }
}
    </script>
	
	<link rel="stylesheet" href="slider.css">
<script src="slider.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Slider(document.querySelector('.carousel'));
    });
</script>
</head>
<body>
    <div class="container">
        <div class="carousel">
            <div class="carousel-window">
			
		 
               
              
                     <?php
 // Connect to the MySQL database
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "crud";
 
 
 

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }

 // Fetch the slider images and their information from the MySQL database
 $sql = "SELECT user_id, fname, lname, img FROM userssss";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // Display the slider images and their information
    echo "<div class='carousel-slides'>";
    while($row = $result->fetch_assoc()) {
      echo "<div class='carousel-item'>";
	    
      echo "<img src='php/images/" . $row['img'] . "' alt='" . $row['user_id'] . "'>";
 
 	 echo "<div class='text'>" . $row['fname'] . "</div>";
	  
	  
	  $str = "{$row['lname']}";
echo " <button class='textg' type='button'>$str</button>";
	 
	  
	  	        
	    
		
	 
		
		
      echo "</div>";
    }
    echo "</div>";
 } else {
    echo "0 results";
 }

 $conn->close();
?>
               
            </div>
		 
            <a href="#" class="carousel-prev">
                <span class="carousel-prev-icon">&lt;</span>
            </a>
            <a href="#" class="carousel-next">
                <span class="carousel-next-icon">&gt;</span>
            </a>
        </div>
    </div>
	
	
	
	
</body>
</html>