<?php
extract($_REQUEST);
$hostname="localhost";


$password="010535546";
$username="root";
$dbname="prototype_db";
mysql_connect($hostname,$username,$password);
mysql_query("SET NAMES utf8");
mysql_select_db($dbname);
//echo"เรียกใช้งาน การ connect database<br>";



?>