<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<title>Test</title>
</head>

<body>

<?php
$hostname = "mysql46.1gb.ru"; 
$username = "gb_deoweb"; 
$password = "68935fd2dwr"; 
$dbName = "gb_deoweb"; 
 
mysql_connect($hostname, $username, $password) or die ("Cant make connect");
mysql_query("SET NAMES 'cp1251'") or header('Location: Error');
mysql_query("SET NAMES 'cp1251'");
mysql_query("SET CHARACTER SET 'cp1251'");

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

<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">Churchs</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Objects <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="../default/">Default</a></li>
                <li class="divider"></li>
                <li><a href="../cerulean/">Cerulean</a></li>
                <li><a href="../cosmo/">Cosmo</a></li>
                <li><a href="../cyborg/">Cyborg</a></li>
                <li><a href="../darkly/">Darkly</a></li>
                <li><a href="../flatly/">Flatly</a></li>
                <li><a href="../journal/">Journal</a></li>
                <li><a href="../lumen/">Lumen</a></li>
                <li><a href="../paper/">Paper</a></li>
                <li><a href="../readable/">Readable</a></li>
                <li><a href="../sandstone/">Sandstone</a></li>
                <li><a href="../simplex/">Simplex</a></li>
                <li><a href="../slate/">Slate</a></li>
                <li><a href="../spacelab/">Spacelab</a></li>
                <li><a href="../superhero/">Superhero</a></li>
                <li><a href="../united/">United</a></li>
                <li><a href="../yeti/">Yeti</a></li>
              </ul>
            </li>
            <li>
              <a href="../help/">About project</a>
            </li>
            <li>
              <a href="http://news.bootswatch.com">Contact us</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Add object <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="./bootstrap.min.css">bootstrap.min.css</a></li>
                <li><a href="./bootstrap.css">bootstrap.css</a></li>
                <li class="divider"></li>
                <li><a href="./variables.less">variables.less</a></li>
                <li><a href="./bootswatch.less">bootswatch.less</a></li>
                <li class="divider"></li>
                <li><a href="./_variables.scss">_variables.scss</a></li>
                <li><a href="./_bootswatch.scss">_bootswatch.scss</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="" target="_blank">Reg</a></li>
            <li><a href="" target="_blank">Log In</a></li>
          </ul>

        </div>
      </div>
    </div>
<div class="page-header"></div>

    <div class="container">
	 <div class="alert alert-dismissable alert-success">
  <button type="button" id="close" class="close" data-dismiss="alert">x</button>
  <strong></strong><a href="#" class="alert-link"></a>
</div>   	
