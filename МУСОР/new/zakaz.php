<title>Заказать Деда Мороза - форма заказа</title>
<meta name="description" content="Заказать Деда Мороза на праздник  очень просто. Оставьте нам сообщение на сайте или в контакте напишите на почту или позвоните">

<?php
include('menu.php');
?>

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/ajax.js"></script>

<style>
#post{
position: relative;
height: 200px;
 width: 550px;
}

#name, #tel, #koment {
border: 2px dashed;
border-color: #E62E29;
background-clip: border-box;
padding: 4;
background: rgba(255,255,255,0.35);
font-size: 16;
font-family: segoe ui;
color:#033B61;
}

#name, #tel{
width: 300;
}
#foot {
top: 850px;
}

#ded{
position:absolute;
left:600;
width:370;
}
</style>

<div id="body">

<font><p>
Чтобы позвать Деда Мороза в гости вы можете отправить ему письмо по электронной почте <strong>moroznaelku@mail.ru</strong> или с нашего сайта!!!!
</p></font>

	<div id='zak'>
			<form action="" id="myform">
		<p>Описание:<br></p>
			<strong>Как вас зовут:</strong><br>
			<textarea required id="name" name="name" cols="40" rows="1"></textarea><br>
			<strong>Номер телефона:</strong><br>
			<input required type='text' id="tel" name="tel" cols="40" rows="1"></input><br>
			<strong>Коментарий:</strong><br>	
			<textarea required id="koment" name="koment" cols="80" rows="10"></textarea><br>
			<br>
			<font color="#ff0000">* </font><font color="#033B61"> Желательно указать: Дату, время, количество детей и их возраст.</font><br><br>			
		<input id="knop" type="button" onclick="send();" value="Отправить" />
		<br>
		<div id="preview">
		</div>
		</form>
<img id='ded' src='images/dm.png'/>
	</div>

</div>	
<?php
include('niz.php');
?>


