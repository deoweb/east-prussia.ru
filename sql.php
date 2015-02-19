<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=cp1251" />
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<title>Test sql</title>	
</head>
<body>

<?
$hostname = "mysql46.1gb.ru"; // название/путь сервера, с MySQL
$username = "gb_deoweb"; // имя пользователя (в Denwer`е по умолчанию "root")
$password = "68935fd2dwr"; // пароль пользователя (в Denwer`е по умолчанию пароль отсутствует, этот параметр можно оставить пустым)
$dbName = "gb_deoweb"; // название базы данных
 
/* Создаем соединение */
mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
mysql_query("SET NAMES 'cp1251'") or header('Location: Error');
mysql_query("SET NAMES 'cp1251'");
mysql_query("SET CHARACTER SET 'cp1251'");
 
/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());
$query = "SELECT * FROM church";
$result = mysql_query($query);
$rows = mysql_num_rows($result);

$churchs = "var churchs = [";

	echo "<script>"; 
for ($j=0; $j < $rows; ++$j) {
	echo "var church".$j."={";
	echo "id:'".mysql_result($result,$j, id)."',";
	echo "name:'".mysql_result($result,$j, name)."',";
	echo "dname:'".mysql_result($result,$j, dname)."',";
	echo "adress:'".mysql_result($result,$j, adress)."',";
	echo "est:'".mysql_result($result,$j, est)."',";
	echo "status:'".mysql_result($result,$j, status)."',";
	echo "photo:'".mysql_result($result,$j, photo1)."',";
	echo "x:'".mysql_result($result,$j, x)."',";
	echo "y:'".mysql_result($result,$j, y)."',";
	echo "visible:'".mysql_result($result,$j, visible)."'";
	echo "};";
	$churchs .= "church".$j.",";
}
	$churchs .= "];";
	echo $churchs;

	mysql_select_db($dbName) or die (mysql_error());
	$query = "SELECT * FROM pictures";
	$result = mysql_query($query);
	$rows = mysql_num_rows($result);

	$pictures = "var pictures = [";

for ($j=0; $j < $rows; ++$j) {
	echo "var pic".$j."={";
	echo "id:'".mysql_result($result,$j, id)."',";
	echo "object_id:'".mysql_result($result,$j, object_id)."',";
	echo "link:'".mysql_result($result,$j, link)."',";
	echo "year:'".mysql_result($result,$j, year)."',";
	echo "author_id:'".mysql_result($result,$j, author_id)."',";
	echo "out_link:'".mysql_result($result,$j, out_link)."',";
	echo "visible:'".mysql_result($result,$j, visible)."',";
	echo "description:'".mysql_result($result,$j, description)."'";
	echo "};";
	$pictures .= "pic".$j.",";
}
	$pictures .= "];";
	echo $pictures;

	echo "</script>";
	
?>



</body>
</html>