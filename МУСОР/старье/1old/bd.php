﻿<?php
	session_start();
	
    $db = mysql_connect ("localhost","user","12345");
	if (!$db ) {
		die('Ошибка соединения: ' . mysql_error());
	}
	mysql_query('SET NAMES utf-8');
	//echo 'Успешно соединились';
    mysql_select_db('user') or die('Could not select database.');
	
	$array = Array('1'=>1,'2'=>2,'3'=>3);
	
    ?>