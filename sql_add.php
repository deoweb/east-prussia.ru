<?php
header("Content-type: text/html; charset=windows-1251");
header('Location: http://deoweb.com/churchs/sql_add.html'); 

$hostname = "mysql46.1gb.ru"; 
$username = "gb_deoweb"; 
$password = "68935fd2dwr"; 
$dbName = "gb_deoweb"; 
 
mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
mysql_query("SET NAMES 'cp1251'") or header('Location: Error');
mysql_query("SET CHARACTER SET 'cp1251'");
mysql_select_db($dbName) or die (mysql_error());

$strSQL = "INSERT INTO church(id,name,dname,est,adress,description,status,x,y,photo1) values('" . $_POST["id"]  .  "','" . $_POST["name"] . "','" . $_POST["dname"] . "','" . $_POST["est"]  . "','" . $_POST["adress"] . "','" . $_POST["description"]  . "','" . $_POST["status"] . "','" . $_POST["x"]  . "','" . $_POST["y"]  . "','" . $_POST["photo"]  ."')";
mysql_query($strSQL) or die(mysql_error());

?>