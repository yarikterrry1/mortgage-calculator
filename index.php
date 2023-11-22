<html>
<head>
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>


 
<script type="text/javascript" src="slick/slick.min.js"></script>
<style>

 


header {
  opacity: 0;
  animation: ani 2.5s forwards;
}

@keyframes ani {
  0% {opacity: 0;}
  100% {opacity: 1;}
}


.bank{
	opacity: 0;
  animation: ani 2.5s forwards;
	width:35%;
	height:6.5%;
border: 1px solid black;
	  
	top:-800px;
	 bottom:13%;
  
	 margin-left:64%;
	  margin-top:0.1%;
 
			
		}
		
		.logo{
 
     width:4%;
	 height:4%;
     margin-top:1%;
	  margin-left:0.5%;
	  
		}
		
		.name{
			  margin-top:1%;
			 margin-left:5%;
			  width:4%;
	 height:4%;
	    
		}
		.procent{
			  margin-top:-0.5%;
			 margin-left:38%;
			  width:4%;
			height:4%;
			  
			  
		}
		.month{
		 
			   top: -93%;
			 margin-left:70%;
			  width:4%;
				height:4%;
		 
		}
		
		 .let
		 {
			top: -49%;
			margin-left:55%;
			width:4%;
			height:4%;
		}
		 
		 
		 
		 
		 
    .swiper{
      width: 350;
      height: 10%;
    }
    .swiper-slide{
      text-align: center;
       
      background-color: aliceblue;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .swiper-slide img{
      width: 58%;
      object-fit: cover;
    }
    .swiper-button-next, .swiper-rtl .swiper-button-prev{
      right: 140px !important; 
      left: auto;
    }
    .swiper-button-prev, .swiper-rtl .swiper-button-next{
      left: 140px !important; 
      right: auto;
    }





.slider {
    -webkit-appearance: none;
    width: 50%;
    height: 5px;
    background: red;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
    
}


        .container {
            max-width: 900px;
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
        list-style:none;
    }
        .carousel .carousel-indicators li {
            flex: 0 1 auto;
            width: 90px;
            height: 20px;
            margin-right: 5px;
            margin-left: 5px;
            cursor: pointer;
            background-color: blue;
            border: 2px solid red;
            border-radius: 10;
			
			
        }
        .carousel .carousel-indicators .active {
            background-color: red;
        }
    .carousel .carousel-window {
        width: 90%;
        height: 200px;
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
 


        
		
		
	
	.text{
		color:yellow;
	}
	
	
	
	 

.carousel-item .text {
    position: absolute;
    top: 80%;
    left: 30%;
    transform: translate(-50%, -50%);
    color: white;
	 
   width: 50%;
    text-align: center;
}





.carousel-item .textg {
    position: absolute;
    top: 60%;
    left: 60%;
background-color:red;
    color: white;
	  pointer-events: none;
   width: 30%;
    text-align: center;
}







 










.h4, .sub-header, h4 {
    font-weight: 500;
  font-size: 1.5vmin;
  white-space: nowrap;
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
  
</head>
<body>

 

 

 
 

<table class="table">
        <tr>
         
          <!--<th>Сумма кредита</th>
			<th>Картинка товара</th>
			<th>посмотреть товар</th>
			<th>изменить товар</th>
			<th>Удалить товар</th>-->
           
             
			
        </tr>

<?php
		$years = 1;
        $email = 2;
		$emahil = 3;
		$mortgage=15;
		$abc;
		$result=2;
  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $years = $_POST["years"];
        $email = $_POST["purchasePrice"];
		$emahil = $_POST["downPayment"];
		$mortgage=$email-$emahil;
		
	 
     //   echo "Name: $years <br>";
     //   echo "Email: $email <br>";
	//	echo "Email: $mortgage <br>";
	
	
	
	 // Convert the range value to a string and split it into an array of parts
    $parts = explode(".", $email);

    // Add spaces to the parts[0]
    $result= $partsWithSpaces = number_format($parts[0], 0, '.', ' ');

    // Merge the array parts back into a string with spaces
    

    // Display the result
    
	
	 
	 $avb = intval((($email /100))*30);
	
	$avd = intval((($email /100))*90);
	
	 
	 require_once('index2.php');
 
	
	
    }
	
 
	
	 require_once('index2.php');
 require_once('slaid.php');
    
 
 
 
 
 
 
 
 

if (isset($_POST['var1']) && isset($_POST['var2'])) {
    $var1 = $_POST['var1'];
     $var2 = $_POST['var2'];
}

    // Perform some operation here...
 
	 
	 
	 
	  $connect = mysqli_connect('localhost', 'root', '', 'crud');

	 
	  		
	  
	  $products = mysqli_query($connect, "SELECT * FROM `users` WHERE users.email >='$email' AND users.password >= '$years'");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $products = mysqli_fetch_all($products);

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */
 
 
 

            
  
 
  
    
            foreach ($products as $product) {
				
 
 $kobzon=floatval($product[3]) / 100;
  
				
				
				$koizon=floatval($kobzon/12);
				
				
		 
				
				 
				 				
                ?>
                    <div class="bank">
                       <div class="logo"><img src="php/images/<?= $product[6] ?>" alt=""></div>
                      <div class="name"><h4><?= $product[2] ?></h4><p></p></div> 
						<div class="procent"><h4><?= $product[3]."%" ?></h4><p></p></div><br>
						 <div class="let"><h4><?= $product[5]." лет" ?></h4><p></p></div><br>
					<div class="month">	<h4><?= intval(($mortgage*($koizon*(pow(1+$koizon, $years*12))/((pow(1+$koizon, $years*12)-1)))))."  ₽/мес" ?></h4></div>
                         
						
						
						</div>
					 
                <?php
            }
			
        ?>
		
  
  
 
 

</body>
</html>
 
 
 