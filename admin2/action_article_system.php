<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../config.inc.php");

$article_detail=$_POST['article_detail'];
$article_title=$_POST['article_title'];
$action_article=$_POST['action_article'];
$action_article_del=$_GET['action_article_del'];
$article_del_id=$_GET['article_del_id'];
$article_id=$_POST['article_id'];
$main_menu_id=$_POST['main_menu_id'];

//echo"11$article_detail";
//echo"22$article_title";

if($action_article=="edit"){
	//echo"hello edit<br>";
	//echo"article_title$article_title<br>";
	//echo"article_detail$article_detail<br>";
	//echo"article_id$article_id<br>";
$strSQL="update article set article_title='$article_title',article_detail='$article_detail',main_menu_id='$main_menu_id' where article_id=$article_id" ;
$result=mysql_query($strSQL);
if(!$result){
	echo"error".mysql_error();
}else{
	echo"<script>window.location=\"index.php?page=article_system\";</script>";
	
	}
}


if($action_article=="add"){
	$strSQL="insert into article(article_title,article_detail,main_menu_id)values('$article_title','$article_detail','$main_menu_id')";
	$result=mysql_query($strSQL);
	if(!$result){echo"error".mysql_error();}else{
	echo"<script>window.location=\"index.php?page=article_system\";</script>";}
}


if($action_article_del=="del"){
	$strSQL="delete from article where article_id=$article_del_id";
	$result=mysql_query($strSQL);
	if(!$result){echo"error".mysql_error();}else{
		echo"<script>window.location=\"index.php?page=article_system\";</script>";}
}

?>