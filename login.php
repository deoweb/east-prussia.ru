<?php
$hostname = "mysql46.1gb.ru";
$username = "gb_deoweb"; 
$password = "68935fd2dwr"; 
$dbName = "gb_deoweb"; 
 
mysql_connect($hostname, $username, $password) or die ("Cant make connect");
mysql_query("SET NAMES 'cp1251'") or header('Location: Error');
mysql_query("SET NAMES 'cp1251'");
mysql_query("SET CHARACTER SET 'cp1251'");
?>