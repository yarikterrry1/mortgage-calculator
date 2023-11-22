
<!DOCTYPE html>
 
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="145">
	
	 
     
 
     

    <title>Admin Dashboard Panel</title> 
	
					<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
 
</style>
</head>
<body>
  <div class="wrapper">
    <section class="form signup">
      <h1>Форма для банков</h1>
      <form action="php/signup.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Название банка</label>
            <input type="text" name="fname" placeholder="" required>
          </div>
          <div class="field input">
            <label>Кредитная ставка</label>
            <input type="text" name="lname" placeholder="" required>
          </div>
        </div>
        <div class="field input">
          <label>Сколько может выдать денег</label>
          <input type="text" name="email" placeholder="" required>
        </div>
        <div class="field input">
           
           
          <i class="fas fa-eye"></i>
		  
		  
		 <div class="field input">
          <label>Количество лет</label>
          <input type="text" name="password" placeholder="" required>
        </div>
		  

        </div>
        <div class="field image">
          <label>Фото банка</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Сохранить товар">
        </div>
      </form>
       
    </section>
	
	
	
  </div>
       
     
  </div>
  <br>
  <br>
  <br>
 
 
 
    <table class="table">
        <tr>
            <th>Название банка</th>
            <th>Процентная ставка Банка</th>
            <th>Сумма кредита</th>
			<th>Количество лет</th>
			<th>Фото Банка</th>
			<th>Удалить товар</th>
			
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */
			 define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'crud');

/*
 * Подключаемся к базе данных с помощью функции mysqli_connect()
 */

$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

/*
 * Делаем проверку соединения
 * Если есть ошибки, останавливаем код и выводим сообщение с ошибкой
 */

if (!$connect) {
    die('Error connect to database!');
}

            $products = mysqli_query($connect, "SELECT * FROM `users`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $products = mysqli_fetch_all($products);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($products as $product) {
                ?>
                    <tr>
                        <td><?= $product[2] ?></td>
						<td><?= $product[3] ?></td>
                        <td><?= $product[4] ?></td>
                        <td><?= $product[5] ?></td>        
						<td><img width="50px" height="50px" src="php/images/<?= $product[6] ?>" alt=""></td>
                        <td><a style="color: red;" href="vendor/delete.php?id=<?= $product[0] ?>">Удалить продукт</a></td>
                    </tr>
                <?php
            }
			
        ?>
    </table>
  <br>
  <br>


 
	
	
	  <section class="form signup">
      <h1>Форма для слайдов</h1>
      <form action="php/slaider.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Текст на слайде</label>
            <input type="text" name="fname" placeholder="" required>
          </div>
          <div class="field input">
            <label>Текст на кнопке слайда</label>
            <input type="text" name="lname" placeholder="" required>
          </div>
        </div>
 
        <div class="field image">
          <label>Фото слайда</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Сохранить товар">
        </div>
      </form>
       
    </section>
 
 
 
     <table class="tabled">
        <tr>
            <th>Текст на кнопке слайдера</th>
            <th>Текст на слайдере</th>
  
	 <th>Фото слайдера</th>
 
			<th>Удалить слайдер</th>
			
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */
 
/*
 * Подключаемся к базе данных с помощью функции mysqli_connect()
 */

 

/*
 * Делаем проверку соединения
 * Если есть ошибки, останавливаем код и выводим сообщение с ошибкой
 */

if (!$connect) {
    die('Error connect to database!');
}

            $products = mysqli_query($connect, "SELECT * FROM `userssss`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $products = mysqli_fetch_all($products);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($products as $product) {
                ?>
                    <tr>
                        <td><?= $product[0] ?></td>
                        <td><?= $product[4] ?> Рублей</td>
						<td><img width="50px" height="50px" src="php/images/<?= $product[6] ?>" alt=""></td>
                        <td><a style="color: red;" href="vendoor/delete.php?id=<?= $product[0] ?>">Удалить продукт</a></td>
                    </tr>
                <?php
            }
			
        ?>
    </table>
 

    <script src="script.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>