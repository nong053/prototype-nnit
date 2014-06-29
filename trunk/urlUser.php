<?php session_start(); ob_start();?>
<?
/*
	$host=$_SERVER['HTTP_HOST'];
	$userAsUrl = explode(".", $host);
	if($host!="www.nn-it.com"){
		//echo"<script>window.location=\"../index.php?userUrlId=$userAsUrl[1]\"</script>";
		$userUrlId=$userAsUrl;
	}
		$userUrlId=$_GET['userUrlId'];
	
*/

	$userUrlId=$_GET['userUrlId'];
	function __autoload($filename){
		require_once "oop/".$filename.".php";
		}
	$obj_manage_data = new manage_data();
	$result_admin=$obj_manage_data->select_data("admin where admin_username='$userUrlId'");
	$rs_num=mysql_num_rows($result_admin);
	if($rs_num){
		
		$_SESSION['member_user_url']=$userUrlId;
		//echo"<script>window.location=\"../home.html\"</script>";
		
		header('Location: ../view-home.html');
		//header("Location: ../dispatcher.php?page=$userUrlId");
		//header("Location: ../dispatcher.php?page=home");
		//Usering on hosting
		//echo"<script>window.location=\"../index.php?page=home\"</script>";
	}else{
		echo"<script>alert(\"User can't found.\");</script>";
	}
	
?>

