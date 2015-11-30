
<script>
function inp(){
var fio=document.getElementById('fio').value;
var otz=document.getElementById('otz').value;
	var obj={"fio":fio,"otz":otz}; 
	$.get('otz2.php', {data:obj,}, function(data){$('#otv').empty().append(data);});
}


</script>
<?php
	$sel="SELECT COUNT(id) FROM ngotziv";
		$my_qu = mysql_query($sel);
		$row = mysql_fetch_row($my_qu);
		$rov = $row[0]; 
	$q ="SELECT * FROM ngotziv";
		$rez = mysql_query($q);
			for ($i=0;$i<$row[0];$i++){
				$array = mysql_fetch_array($rez);
				$fi=$array['fio'];
				$otziv=$array['otz'];
				echo "<br><b>".$fi."</b><br>".$otziv."<br>";
}				
?>

<b>______________________________________________</b><br>

	<br><b>Как вас зовут:</b><br>
		<textarea id="fio" cols="20" rows="1"></textarea><br>
	<b>Ваш отзыв:</b><br>	
		<textarea id="otz" cols="40" rows="3"></textarea><br>
		<a href="#" onclick="inp();return false;">Отправить</a>


