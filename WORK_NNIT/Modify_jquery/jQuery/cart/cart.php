<?php session_start(); ob_start();
$product_id=$_PORT['product_id'];
//add data cart is session
if($_GET['product_id']!=""){
$_SESSION['strNum']++;
$_SESSION['strProduct_id'][$_SESSION['strNum']] =$_GET['product_id'];

}
for($i=1; $i<=count($_SESSION['strProduct_id']); $i++){
echo"". $_SESSION['strProduct_id'][$i]."=$i";
echo"<br>";

}
//delete session


//edit session

/*
echo "array1=".$_SESSION['strProduct_id'][1]."<br>";
echo "array2=".$_SESSION['strProduct_id'][2]."<br>";
echo "array3=".$_SESSION['strProduct_id'][3]."<br>";
echo "array4=".$_SESSION['strProduct_id'][4]."<br>";
*/

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
?>
<br>
<a href="cart.php?manage=clear">
delete session
</a>
<br>
<a href="product.php">
back 
</a>
<br>
<a href="cart.php?manage=delete&SesProduct_id=1">
delete session product01
</a>
<br>
<a href="cart.php?manage=update&SesProduct_id=1&update=1000000000">
delete session product01
</a>