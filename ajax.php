
<?php
 
/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());
$query = "SELECT * FROM church";
$result = mysql_query($query);
$rows = mysql_num_rows($result);

for ($j=0; $j < $rows; ++$j) { 
	echo mysql_result($result,$j, name).'<br>';	
	echo mysql_result($result,$j, dname).'<br>';	
	echo mysql_result($result,$j, est).'<br>';
	echo mysql_result($result,$j, dname).'<br>';
	echo mysql_result($result,$j, rating).'<br>';
}
// echo "Получены параметры с сервера: param1 = ".$_GET['param1']." и param2 = ".$_GET['param2'];
?>