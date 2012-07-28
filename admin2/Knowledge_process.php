<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../config.inc.php");

$Knowledge_detail=$_POST['Knowledge_detail'];
$Knowledge_title=$_POST['Knowledge_title'];
$action_Knowledge=$_POST['action_Knowledge'];
$action_Knowledge_del=$_GET['action_Knowledge_del'];
$Knowledge_del_id=$_GET['Knowledge_del_id'];
$Knowledge_id=$_POST['Knowledge_id'];
$Knowledge_link=$_POST['Knowledge_link'];

//echo"11$Knowledge_detail";
//echo"22$Knowledge_title";
//echo"33$action_Knowledge";

if($action_Knowledge=="edit"){
	//echo"hello edit<br>";
	//echo"Knowledge_title$Knowledge_title<br>";
	//echo"Knowledge_detail$Knowledge_detail<br>";
	//echo"Knowledge_id$Knowledge_id<br>";
$strSQL="update Knowledge set Knowledge_title='$Knowledge_title',Knowledge_link='$Knowledge_link',Knowledge_detail='$Knowledge_detail' where Knowledge_id=$Knowledge_id" ;
$result=mysql_query($strSQL);
if(!$result){
	echo"error".mysql_error();
}else{
	echo"<script>window.location=\"index.php?page=Knowledge\";</script>";
	
	}
}


if($action_Knowledge=="add"){
	echo"hello add";
	$strSQL="insert into Knowledge(Knowledge_title,Knowledge_link,Knowledge_detail)values('$Knowledge_title','$Knowledge_link','$Knowledge_detail')";
	$result=mysql_query($strSQL);
	if(!$result){echo"error".mysql_error();}else{
	echo"<script>window.location=\"index.php?page=Knowledge\";</script>";}
}


if($action_Knowledge_del=="del"){
	$strSQL="delete from Knowledge where Knowledge_id=$Knowledge_del_id";
	$result=mysql_query($strSQL);
	if(!$result){echo"error".mysql_error();}else{
		echo"<script>window.location=\"index.php?page=Knowledge\";</script>";}
}

?>