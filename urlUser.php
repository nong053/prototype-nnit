<?php session_start();?>
<?
	function __autoload($filename){
		require_once "oop/".$filename.".php";
		}
	$obj_manage_data = new manage_data();
	$result_admin=$obj_manage_data->select_data("admin where admin_username='$userUrlId'");
	$rs_num=mysql_num_rows($result_admin);
	if($rs_num){
		$userUrlId=$_GET['userUrlId'];
		$_SESSION['member_user_url']=$userUrlId;
		echo"<script>window.location=\"./index.php?page=home\"</script>";
		//Usering on hosting
		//echo"<script>window.location=\"../index.php?page=home\"</script>";
	}else{
		echo"<script>alert(\"User can't found.\");</script>";
	}
	
?>

