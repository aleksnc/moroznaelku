<?php
include('bd.php');
	$name=$_POST['name'];
	$tel=$_POST['tel'];
	$koment=$_POST['koment'];
	
$sel="SELECT COUNT(id) FROM ngzak";
$my_qu = mysql_query($sel);
$row = mysql_fetch_row($my_qu);
$rov = $row[0];
$id=$rov+1;
if($name==!0){
$ins="INSERT INTO ngzak SET id='$id', fio='$name', tel='$tel', koment='$koment'";
$my_q = mysql_query($ins);
echo '<b style="color:red;">ОТПРАВЛЕНО</b>';
}
//$ins="insert into ngzak set fio='$name',tel='$tel', koment='$koment'";
//mysql_query($ins);
?>

