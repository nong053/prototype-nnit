<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$topic_subject=$_POST['topic_subject'];
$topic_detail=$_POST['topic_detail'];
$member_user_url2=$_POST['member_user_url'];
$topic_name=$_POST['topic_name'];
$admin_id=$_POST['admin_id'];


$topic_update=date("y-m-d H:i:s");


if(!$topic_name){
echo"<script>alert(\"กรุณากรอกชื่อด้วยครับ\");</script>";
echo"<script>window.location=\"index.php?page=new_topic&member_user_url=$member_user_url2\";</script>";
exit();
}

include("config.inc.php");
$strSQL="insert into topic(topic_subject,topic_detail,topic_update,topic_name,admin_id)values('$topic_subject','$topic_detail','$topic_update','$topic_name','$admin_id')";
$result=mysql_query($strSQL);
if(!$result){echo"error".mysql_error();}else{
	/*header("Location:index.php?page=webboard");*/
	echo"<script>window.location=\"index.php?page=webboard&member_user_url=$member_user_url2\";</script>";
}
?>