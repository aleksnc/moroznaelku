<title>Заказать Деда Мороза - форма заказа</title>
<meta name="description" content="Заказать Деда Мороза на праздник  очень просто. Оставьте нам сообщение на сайте или в контакте напишите на почту или позвоните">

<?php
include('menu.php');
?>

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/ajax.js"></script>
<script>
function send(){
	var name = $('#name').val()
	var tel = $('#tel').val()
	var koment = $('#koment').val()
	$.ajax({
	type: "POST", //Метод отправки
	url: "send.php", //путь до php фаила отправителя
	data: "name="+name+"&tel="+tel+"&koment="+koment,
	 success: function(html) {
		 if(html=='1'){
			  $('#inp').empty();
			  $('#inp').append("<p class='otvet'>Ваше сообщение отпрвлено!</p>");
		 } else{
			 $('.otvet').empty();
			 $('#inp').prepend("<p class='otvet'>Некоторые формы небыли заплонены</p>");
		 }
		}
	});
}   
</script>
<style>
#post{
position: relative;
height: 200px;
 width: 550px;
}
#inp{
	width:70%;	
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
width:100%;
}

#name, #tel{
width: 300;
}
#foot {
top: 1200px;
}

#ded{
position:absolute;
top:300;
left:600;
width:370;
}
#preview{
position:absolute;
top: 530;
left: 150;
}
.otvet{
	font-family: segoepr;
	font-size:30px;
	position:relative;
	text-align:center;
	color: #E62E29;
}
</style>

<div id="body">

	<font ><p >
		Неважно где вы будете встречать Новый год. Возможно, у вашего  начальника хорошее настроение
		 и он решил собрать вас и ваших коллег вместе на корпоратив в честь этого праздника. А, может 
		 быть, у вас есть дети и вы решили с другими родителями собрать всех в классе, группе или 
		 просто во дворе и зажечь огни на новогодней ёлке. Или вы его встречаете дома в кругу семьи;
		 Настоящий новый год никогда не обходится без: Нарядной лесной красавицы – елочки, Короля 
		 стола - салата оливье, душистых сладких мандаринов и боя курантов!
	</p></font>
		<p class='font'>
		Но кто соберет всех в хоровод? Без кого не загорятся огни на елке? И самое главное!!! 
		Кто подарит нам подарки и исполнит наши желания?!
		Конечно же это нами всеми любимый Дедушка Мороз и его внучка Снегурочка!!! Они закружат вас 
		в хороводах, озадачат загадками, развеселят своими конкурсами и подарят замечательное
		 настроение и воспоминания!
	</p></font>
		<font ><p>
	Чтобы позвать Деда Мороза в гости вы можете позвонить по телефону <strong> +7(812)909-69-09</strong>, отправить ему письмо по электронной почте <b>moroznaelku@mail.ru</b>
	или с нашего сайта!!!!
	</p></font>

	<div id='zak'>
	<div id='inp'>
		<p>Описание:<br></p>
			<strong>Как вас зовут:</strong><br>
			<textarea required id="name" name="name" cols="40" rows="1"></textarea><br>
			<strong>Номер телефона:</strong><br>
			<input required type='text' id="tel" name="tel" cols="40" rows="1"></input><br>
			<strong>Коментарий:</strong><br>	
			<textarea required id="koment" name="koment" cols="80" rows="10"></textarea><br>
			<br>
			<font color="#ff0000">* </font><font color="#033B61"> Желательно указать: Дату, время, сколько будет детей на празднике и их возраст.</font><br><br>					
		<input id="knop" type="submit" onclick='send()' value="Отправить" />
		<br>
	</div>
	
<img id='ded' src='images/dm.png'/>
	</div>

</div>	
<?php
include('niz.php');
?>


