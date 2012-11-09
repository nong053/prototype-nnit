<?php
$admin_name =$_POST["admin_name"];
$admin_surname = $_POST["admin_surname"];
$admin_username =$_POST["admin_username"];
$admin_password =$_POST["admin_password"];
$admin_status =$_POST["admin_status"];
$admin_email =$_POST["admin_email"];
$admin_address =$_POST["admin_address"];
$dmin_tel =$_POST["admin_tel"];


if($_POST['action']=="add"){
	function __autoload($file_name){
		require_once("../oop/".$file_name.".php");
	}


/*echo"admin_name".$admin_name."<br>";
echo"admin_surname".$admin_surname."<br>";*/
//echo"admin_username".$admin_username."<br>";
/*echo"admin_password".$admin_password."<br>";
echo"admin_status".$admin_status."<br>";
echo"admin_email".$admin_email."<br>";
echo"admin_address".$admin_address."<br>";
echo"dmin_tel".$dmin_tel."<br>";
*/

$obj_manage_data=new manage_data();
$field_select="admin_username";
$table_condition="admin where admin_username='$admin_username'";
$result_select_web=$obj_manage_data->select_data($table_condition,$field_select);
$num=mysql_num_rows($result_select_web);
if($num){
echo"{\"result\":\"user_duplicate\"}";

}else{

$table="admin";
$field="admin_name ,admin_surname,admin_username ,admin_password,admin_status ,admin_email ,admin_address ,admin_tel";
$values="'$admin_name' ,'$admin_surname','$admin_username' ,'$admin_password','$admin_status' ,'$admin_email' ,'$admin_address' ,'$admin_tel'";
$result=$obj_manage_data->insert_data($table,$field,$values);
if($result){
	$result_admin=$obj_manage_data->select_data("admin where admin_name='$admin_name'");
	$rs_admin=mysql_fetch_array($result_admin);
	echo "{\"admin_id\":\"".$rs_admin[admin_id]."\"}";
}//if($result)
}//if($num)
	
}
if($_POST['action']=="edit"){
 echo"here edit";
}

?>