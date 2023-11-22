<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta http-equiv="Cache-Control" content="public, max-age=3600" />
    
	  
    <title>Калькулятор ипотеки</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        input[type="number"] {

			 
			  height: 3px;
        }
		
		input[type="range"] 
		{

			 background-color:red;
			  height: 3px;
			  width:190px;
        }
 
		
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            opacity: 0.8;
        }
        #results {
            background-color: #f2f2f2;
            padding: 20px;
            margin-top: 20px;
        }
		
		
		input[type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
  height: 1px;
  width: 1px;
  border-radius: 1%;
  cursor: pointer;
  background: red;
  border-radius: 1%;
  border: solid red 0.511111px;
  cursor: pointer;
  
  
}
	 
		
		
		.minus-button {
    font-size: 31px;
    background-color:  white;
    border: none;
    border-radius: 50%;
    color: #333;
    cursor: pointer;
    display: inline-block;
    height: 15px;
    line-height: 50px;
    margin: 0;
    outline: none;
    padding: 0;
    text-align: center;
    transition: background-color 0.3s;
    width: 50px;
}

 		
		
		
		
		
		
		
.plus-button {
    font-size: 24px;
    background-color: white;
    border: none;
    border-radius: 50%;
    color: #333;
    cursor: pointer;
    display: inline-block;
    height: 15px;
    line-height: 50px;
    margin-left:63px;
    outline: none;
    padding: 0;
    text-align: center;
    transition: background-color 0.3s;
    width: 50px;
}

.outf{
	margin-left:120;  
	margin-top:-27px;
	top:14px;
	font-size: 1rem;
	 
}

.ouuf{
	   
	top:-20px;
	font-size: 0.71rem;
	
}
 	
	 
    </style>
</head>
<body>

		 
	 
   
 
  <form action="index.php" method="post">
   
	 <br>
	  <br>
	    
		 
	 
      <div  style="font-size: calc(1rem + 1vw);top: 10px; position: absolute; color: #212121; font-family: Century Gothic; text-transform: uppercase; line-height: 60px; word-wrap: break-word">рассчитайте ипотеку</div>
	  <br>
	  <br>
	  
	   
      <div style="font-weight: bold;top: 70px; position: absolute; color: #212121;  font-family: Montserrat; font-size:calc(0.7rem + 0.1vw); text-transform: uppercase; line-height: 24px; word-wrap: break-word">Стоимость недвижимости</div>
	  <br>
	  
	  <output style="margin-left:110;"> <?= $result." ₽" ?> </output>
	  <br>
    <input  type="range"  style="accent-color: red;" id="purchasePrice" name="purchasePrice" min="1000000" max="15000000" onblur="ajax()" placeholder="Enter purchase price" onchange="this.form.submit();" autocomplete="on" value="<?= $email ?>"oninput="this.nextElementSibling.value = this.value">
 
<br>
	  <br>
	  <br>
  <br>
  <br>
   <br>
	   <div style="font-weight: bold; top: 200; position: absolute; color: #212121; font-family: Montserrat; font-size: calc(0.7rem + 0.1vw);text-transform: uppercase; line-height: 24px; word-wrap: break-word">Первоначальный взнос</div>
    
	<div class="ouuf"><output><?= "Процент от стоимости недвижимости: ".$avv=intval((($emahil/$email))*100)." %" ?></output></div>
 
	<input type="range" style="accent-color: red;font-size: calc(0.01rem + 1vw);" id="downPayment"  name="downPayment" min="<?=$avb ?>" max="<?=$avd ?>" onblur="ajax()" placeholder="Enter purchase price" onchange="this.form.submit();" autocomplete="on" value="<?= $emahil ?>"oninput="this.nextElementSibling.value = this.value">
	
 

<br>
<br>
	  <br>

        
 <button class="minus-button">-</button>
 <output style="margin-left:50px;"><?= $years ?></output>
<button class="plus-button">+</button>
	  <div style="font-weight: bold; top: 320px; position: absolute; color: #212121; font-family: Montserrat; font-size: calc(0.7rem + 0.1vw); text-transform: uppercase; line-height: 24px; word-wrap: break-word">Срок ипотеки</div>
	  <br>
	   
	  <br>
    <input type="range" style="accent-color: red;" id="years" name="years" min="1" max="40"   onblur="ajax()" placeholder="Enter purchase price" onchange="this.form.submit();" autocomplete="on" value="<?= $years ?>"oninput="this.nextElementSibling.value = this.value">
 
 
 
 <br>
 <br>
 
  <div style="font-weight: bold; top: 423px; position: absolute; color: #212121; font-family: Montserrat; font-size: calc(0.7rem + 0.1vw); text-transform: uppercase; line-height: 24px; word-wrap: break-word">Сумма кредита</div>
   
 
  
	 <div class="outf">  <output><?= $mortgage." ₽" ?> </output></div>
<div id="slider">
	 
</div>
 

 <br>
 <br>

  
 

 
	
	 
	<br>
	  
   
	 
	
  </form>
 
<script>
 $('#years').on('change', function () {
	var value = $(this).val();
	$('#img').width(value);
	$('#img').height(value);
   $('#inputRange').text(value);
});
 $('.plus-button').click(function() {
	 //if value < max
	 $('#years').val(parseInt($('#years').val())+1);  
	 $('#years').trigger('change');
 });
 $('.minus-button').click(function() {
	 //if value < max
	 $('#years').val(parseInt($('#years').val())-1);  
	 $('#years').trigger('change');
 });
      
 
 </script>
  
   

 
</body>
</html>



<!--<div id="resultt"></div>-->