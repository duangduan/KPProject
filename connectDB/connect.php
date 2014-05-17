<?php


$hostname = "http://128.199.230.16/phpmyadmin/";
$database = "kpteam";
$username = "kpteam";
$password = "kpteam";

$objConnect = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
$objDB = mysql_select_db("kpteam");
$charset= "SET NAMES 'utf8'";
mysql_query($charset) or die('Invalid query: ' . mysql_error());


?>