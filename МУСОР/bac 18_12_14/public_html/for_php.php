<?php
include('fancybox/bd.php');
?>
 
<?php
$fio=$_GET['data']['fio'];
$otz=$_GET['data']['otz'];
$num=$_GET['data']['num'];
$sel="SELECT COUNT(id) FROM ngotziv";
$my_qu = mysql_query($sel);
$row = mysql_fetch_row($my_qu);
$rov = $row[0];
$id=$rov+1;
if($fio==!0){
$ins="INSERT INTO ngotziv SET id='$id', fio='$fio', otz='$otz', new='1', pub='0'";
$my_q = mysql_query($ins);
}




$name=$_GET['data']['name'];
$tel=$_GET['data']['tel'];
$koment=$_GET['data']['koment'];
$sel="SELECT COUNT(id) FROM ngzak";
$my_qu = mysql_query($sel);
$row = mysql_fetch_row($my_qu);
$rov = $row[0];
$id=$rov+1;
if($name==!0){
$ins="INSERT INTO ngzak SET id='$id', fio='$name', tel='$tel', koment='$koment'";
$my_q = mysql_query($ins);
}
?>
