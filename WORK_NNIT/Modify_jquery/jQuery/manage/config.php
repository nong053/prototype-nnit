<?php
$host="localhost";
$user="root";
$password="010535546";
$dbname="training_db";
mysql_connect($host,$user,$password);
mysql_query("SET NAMES UTF8");
mysql_select_db($dbname);
?>