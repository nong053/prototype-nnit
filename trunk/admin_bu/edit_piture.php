<?	
include("../config.inc.php");

$pic_type_page=$_POST['pic_type_page'];
$pic_type=$_POST['pic_type'];

$pic_detail=$_POST['pic_detail'];
$pic_link=$_POST['pic_link'];
$pic_id=$_POST['pic_id'];
$pic_name=$_POST['pic_name'];

//echo"pic_type778899$pic_type<br>";
//echo"pic_detail$pic_detail<br>";
//echo"pic_link$pic_link<br>";
//echo"ssssssssssssssssssspic_id$pic_id<br>";
//echo"pic_type_page$pic_type_page<br>";

//if(copy($_FILES["filUpload"]["tmp_name"],"../mypicture/".$_FILES["filUpload"]["name"]))
	//{
$strSQL="update banner_sum set pic_type='$pic_type',pic_detail='$pic_detail',pic_link='$pic_link' where pic_id=$pic_id" ;
$result=mysql_query($strSQL);
if(!$result){
	echo"error".mysql_error();
}else{
	echo"<script>window.location=\"index.php?page=$pic_type_page\";</script>";
	
	}
	
//}
?>