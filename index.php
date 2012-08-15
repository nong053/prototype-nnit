<?php ob_start(); session_start();
?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="kendoui/js/kendo.all.min.js"></script>

<link href="kendoui/styles/kendo.common.min.css" rel="stylesheet" />
<link href="kendoui/styles/kendo.default.min.css" rel="stylesheet" />




<?php
//$host=$_SERVER['HTTP_HOST'];
$host="www.rchaneltv.com";
if($host=="www.rchaneltv.com"){
include("web_design/rchaneltv/index.php");
}else{
include("theme_default.php");
}
//include("web_design/rchaneltv/carousel_data.php");
?>
