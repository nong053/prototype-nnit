<?php ob_start(); session_start();?>
<?php

/*##########ดึง oject มาใช้งาน Start*/
function __autoload($filename){
	require_once "oop/".$filename.".php";
	}
$obj_manage_data = new manage_data();

/*##########ดึง oject มาใช้งาน End*/

$member_user_url=trim($_SESSION['member_user_url2']);
//ทำการ select admin_id ออกมาจาก admin
$query_admin_id="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin_id=$obj_manage_data->select_data_proc($query_admin_id);
$rs_admin=mysql_fetch_array($result_admin_id);
$admin_id=$rs_admin["admin_id"];
//echo"<br>admin_id".$rs_admin["admin_id"]."<br>";
echo"$admin_id";
$timeoutseconds = 300; //ตั้งเวลาสำหรับเช็คคนออนไลน์ เป็นวินาที 300= 5 นาที
$timestamp=time();
$timeout=$timestamp-$timeoutseconds;
// เมื่อมีการโหลดเวบเพจขึ้นมา จะกำหนดให้เก็บค่า IP ของคนเยี่ยมชม และเวลาที่โหลดหน้าเวบเพจ ลงในฐานข้อมูลทันที
$query="INSERT INTO useronline VALUES ('$timestamp','$REMOTE_ADDR','$PHP_SELF')";
$obj_manage_data->insert_query($query);

//หลังจากนั้นเช็คว่า คนเยี่ยมชมหมายเลข IP ใด เกินกำหนดเวลาที่ตั้งไว้แล้ว ให้ลบออกฐานข้อมูล
$table="useronline";
$condition="$timestamp<$timeout";
$obj_manage_data->delete_data($table,$condition);


//ให้นับจำนวนเรคคอร์ดในตารางทั้งหมด ที่มี IP ต่างกัน ว่ามีเท่าไหร่ โดย IP เดียวกันให้นับเป็นคนเดียว

$query_select_user="SELECT DISTINCT ip as ip FROM useronline WHERE file='$PHP_SELF'";
$result_select_user=$obj_manage_data->select_data_proc($query_select_user);
//$rs_select_user=mysql_fetch_array($result_select_user);
$user =mysql_num_rows($result_select_user);
echo"user online=".$user;

//Show Useronline

?>