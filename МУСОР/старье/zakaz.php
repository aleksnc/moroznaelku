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

</style>

<div id="mi">
<div id='zak'>

	<st><b>Как вас зовут:</b><br></st>
	<textarea required id="name" cols="40" rows="1"></textarea><br>
	<st><b>Номер телефона:</b><br></st>
	<input required type='text' id="tel" cols="40" rows="1"></input><br>
	<st><b>Коментарий:</b><br></st>	
	<textarea required id="koment" cols="80" rows="10"></textarea><br>
	<font color="#ff0000">* Желательно указать: Дату, время, количество детей и их возраст.</font><br><br>
	<input type='submit' id="button" onclick="inp();return false;"></input>	
</div>
</div>	

	<img id='dm' src='fancybox/dm.png'  style="position: absolute; left: 750px; top: 220px;"  height='600px';>
