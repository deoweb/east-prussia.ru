<?php
//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$church = str_replace("/page.php?", "", $_SERVER[REQUEST_URI]);
?>


<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/landing-page.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script> 
	<title><?php echo $church?></title>
</head>

<body>
<?php   
if ($church == "kaliningrad") {
	echo "eeeeee das ist kaliningrad";
} elseif ($church == "moskwa") {
	echo "ouuuu moskwa";
} else { echo "fuck you";}

?>




</body>
</html>