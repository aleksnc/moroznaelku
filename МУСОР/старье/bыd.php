<?php
	session_start();
    $db = mysql_connect ("localhost","dedmoro5ru","12345");
	if (!$db ) {
		die('Ошибка соединения: ' . mysql_error());
	}
	mysql_query('SET NAMES utf-8');
	//echo 'Успешно соединились';
    mysql_select_db('notant_project') or die('Could not select database.');
	
	$array = Array('1'=>1,'2'=>2,'3'=>3);
	
?>