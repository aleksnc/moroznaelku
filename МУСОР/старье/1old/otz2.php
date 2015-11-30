<?php
include('bd.php');
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

$num="UPDATE ngfoto SET fotki='$num'";
$myq = mysql_query($num);


?>
