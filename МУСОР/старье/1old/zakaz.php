
	<form method='post' action=''>
	<br><b>Как вас зовут:</b><br>
		<textarea required name="fio" cols="20" rows="1"></textarea><br>
	<br><b>Номер телефона:</b><br>
		<input required type='text' name="tel" cols="20" rows="1"></input><br>
	<b>Коментарий:</b><br>	
		<textarea required name="koment" cols="40" rows="2"></textarea><br>
		* Желательно указать: Дату, время, количество детей и их возраст.<br>
	<input type='submit' name='submit'value='Отправить'></input>
	</form>


<?php
$fio=$_POST['fio'];
$tel=$_POST['tel'];
$koment=$_POST['koment'];
$sel="SELECT COUNT(id) FROM ngzak";
$my_qu = mysql_query($sel);
$row = mysql_fetch_row($my_qu);
$rov = $row[0];
$id=$rov+1;
if($fio==!0){
$ins="INSERT INTO ngzak SET id='$id', fio='$fio', tel='$tel', koment='$koment'";
$my_q = mysql_query($ins);
}
?>
