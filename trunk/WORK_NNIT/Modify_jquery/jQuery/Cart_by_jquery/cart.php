<?php session_start(); ob_start();
$product_id=$_PORT['product_id'];
//add data cart is session
if($_GET['product_id']!=""){
$_SESSION['strNum']++;
$_SESSION['strProduct_id'][$_SESSION['strNum']] =$_GET['product_id'];
echo'{"result":"success"}';
}
if($_GET['action']=="showData"){
	echo(" <b>my cart</b> <br>");
for($i=1; $i<=count($_SESSION['strProduct_id']); $i++){
echo"". $_SESSION['strProduct_id'][$i]."=$i";
echo"<br>";
}
}
/*
if($_GET['manage']=="clear"){
//echo"clear session";
session_unset();
}
if($_GET['manage']=="delete"){
echo "session".$_GET['SesProduct_id'];
//echo"clear session";
$_SESSION['strProduct_id'][1]="";

}
if($_GET['manage']=="update"){
$i=$_GET['SesProduct_id'];
$update=$_GET['update'];
//echo"clear session";
$_SESSION['strProduct_id'][$i]=$update;

}
*/
?>
