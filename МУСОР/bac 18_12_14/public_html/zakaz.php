<title>Заказать Деда Мороза - форма заказа</title>
<meta name="description" content="Заказать Деда Мороза на праздник  очень просто. Оставьте нам сообщение на сайте или в контакте напишите на почту или позвоните">

<?php
include('menu.php');
?>

<script>
function inp(){
var name=document.getElementById('name').value;
var tel=document.getElementById('tel').value;
var koment=document.getElementById('koment').value;
	var obj={"name":name,"tel":tel,"koment":koment}; 
	$.get('for_php.php', {data:obj,}, function(data){$('#otv').empty().append(data);});
}
</script>

<style>
#post{
position: relative;
height: 330px;
 width: 550px;
}
</style>

<div id="body">
	<?php
	include('kalendar.php');
	?>
<div id="mi">
	<div id='post'>
	<font style=' font-size: 15px; color:#003153;' face="Arial"><p style="text-indent: 25px;"align="justify">
		Неважно где вы будете встречать Новый год. Возможно, у вашего  начальника хорошее настроение
		 и он решил собрать вас и ваших коллег вместе на корпоратив в честь этого праздника. А, может 
		 быть, у вас есть дети и вы решили с другими родителями собрать всех в классе, группе или 
		 просто во дворе и зажечь огни на новогодней ёлке. Или вы его встречаете дома в кругу семьи;
		 Настоящий новый год никогда не обходится без: Нарядной лесной красавицы – елочки, Короля 
		 стола - салата оливье, душистых сладких мандаринов и боя курантов!
	</p></font>
		<font style=' font-size: 15px; color:#003153;' face="Arial"><p style="text-indent: 25px;"align="justify">
		Но кто соберет всех в хоровод? Без кого не загорятся огни на елке? И самое главное!!! 
		Кто подарит нам подарки и исполнит наши желания?!
		Конечно же это нами всеми любимый Дедушка Мороз и его внучка Снегурочка!!! Они закружат вас 
		в хороводах, озадачат загадками, развеселят своими конкурсами и подарят замечательное
		 настроение и воспоминания!
	</p></font>
		<font style=' font-size: 15px; color:#003153;' face="Arial"><p style="text-indent: 25px;"align="justify">
	Чтобы позвать Деда Мороза в гости вы можете отправить ему письмо по электронной почте <b>moroznaelku@mail.ru</b>
	или с нашего сайта!!!!
	</p></font>
	</div>
	<div id='zak'>
		<st><b>Как вас зовут:</b><br></st>
		<textarea required id="name" cols="40" rows="1"></textarea><br>
		<st><b>Номер телефона:</b><br></st>
		<input required type='text' id="tel" cols="40" rows="1"></input><br>
		<st><b>Коментарий:</b><br></st>	
		<textarea required id="koment" cols="80" rows="10"></textarea><br>
		<font color="#ff0000">* Желательно указать: Дату, время, адрес, имена детей и их возраст.</font><br><br>
		<input type='submit' id="button" onclick="inp();return false;"></input>	
	</div>
</div>	
<img id='dm' src='fancybox/dm.png'  style="position: absolute; right: 0px; top: 30px;"  height='600px';>
</div>	
<?php
include('niz.php');
?>