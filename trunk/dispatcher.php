<?php ob_start(); session_start();

if($_GET['member_user_url']){
$_SESSION['member_user_url2']=$_GET['member_user_url'];
}else{
$_SESSION['member_user_url2']=$_SESSION['member_user_url'];
}
if($_SESSION['member_user_url2']==""){
	//defalult ถ้าไม่มีการlogin ให้ค่าเริ่มต้นเป็น workphp
	$_SESSION['member_user_url2']="workphp";
}
?>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<!--
<script src="kendoui/js/kendo.all.min.js"></script>
-->
<script src="jQueryUI/js/jquery-ui-1.8.23.custom.min.js"></script>
<link href="jQueryUI/css/custom-theme/jquery-ui-1.8.23.custom.css" rel="stylesheet" />
<?php


//$host="www.rchaneltv.com";
if($host=="www.rchaneltv.com"){
include("web_design/rchaneltv/index.php");
}else{
include("theme_default.php");
}
//include("web_design/rchaneltv/carousel_data.php");
?>
