<?php


$strSQL = "INSERT INTO church(name) values('" . $_POST["name"] . "')";
mysql_query($strSQL) or die(mysql_error());
?>