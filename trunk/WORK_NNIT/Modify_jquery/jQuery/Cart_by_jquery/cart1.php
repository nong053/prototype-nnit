<?php session_start(); ob_start();
$_GET[product_id];
if($_GET[product_id]){
	$_SESSION['sesNum']++;
	$_SESSION['sesProduct_id'][$_SESSION['sesNum']] = $_GET['product_id'];

}
print('['.count($_SESSION['sesProduct']).']');
	
?>