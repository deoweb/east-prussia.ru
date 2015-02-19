<?php
header("Content-type: text/html; charset=windows-1251");
header('Location: http://east-prussia.ru/admin.php'); 

$hostname = "mysql46.1gb.ru"; 
$username = "gb_deoweb"; 
$password = "68935fd2dwr"; 
$dbName = "gb_deoweb"; 
 
mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
mysql_query("SET NAMES 'cp1251'") or header('Location: Error');
mysql_query("SET CHARACTER SET 'cp1251'");
mysql_select_db($dbName) or die (mysql_error());

$strSQL = "INSERT INTO pictures(object_id,link,year,author_id,out_link) values('" . $_POST["object_id"]  .  "','" . $_POST["link"] . "','" . $_POST["year"] . "','" . $_POST["author_id"] ."','". $_POST["out_link"] ."')";
mysql_query($strSQL) or die(mysql_error());

?>