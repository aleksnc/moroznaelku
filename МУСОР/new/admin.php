<?php
include('scripts/bd.php');
?>
<style>
</style>

<div id='zak'>
<?php
	$q ='SELECT * FROM ngzak';
	$rez = mysql_query($q);
	while($array = mysql_fetch_array($rez)) {
	echo $fio=$array['fio']." ";
	echo$tel=$array['tel']." ";
	echo$koment=$array['koment']." <br> <br>";
	}
?>
</div>