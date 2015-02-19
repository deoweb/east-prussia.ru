<?php
header("Content-type: text/html; charset=windows-1251");
  // файл http://hostname/ajaxtest.php
$hostname = "mysql46.1gb.ru"; // название/путь сервера, с MySQL
$username = "gb_deoweb"; // имя пользователя (в Denwer`е по умолчанию "root")
$password = "68935fd2dwr"; // пароль пользователя (в Denwer`е по умолчанию пароль отсутствует, этот параметр можно оставить пустым)
$dbName = "gb_deoweb"; // название базы данных
 
/* Создаем соединение */
mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
mysql_query("SET NAMES 'cp1251'") or header('Location: Error');
//mysql_query("SET CHARACTER SET 'cp1251'");
?>