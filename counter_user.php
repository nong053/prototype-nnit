
<?php


$member_user_url=trim($_SESSION['member_user_url2']);
//ทำการ select admin_id ออกมาจาก admin
$query_admin_id="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin_id=$obj_manage_data->select_data_proc($query_admin_id);
$rs_admin=mysql_fetch_array($result_admin_id);
$admin_id=$rs_admin["admin_id"];



$query_counter_user="select * from counter_user where admin_id='".$admin_id."'";
$result_counter_user=$obj_manage_data->select_data_proc($query_counter_user);
$rs_num_counter_user=mysql_num_rows($result_counter_user);

//echo"rs_num_counter_user".$rs_num_counter_user;
if(!$rs_num_counter_user){
$query="INSERT INTO counter_user VALUES(1,$admin_id)";
$obj_manage_data->insert_query($query);
}else{

$query_counter_user="select counter from counter_user where admin_id='".$admin_id."'";
$result_counter_user=$obj_manage_data->select_data_proc($query_counter_user);
$rs_counter_user=mysql_fetch_array($result_counter_user);

$plusCounter=$rs_counter_user["counter"]+1;

//echo"$plusCounter";


$query="UPDATE counter_user SET counter=$plusCounter WHERE admin_id=$admin_id";
$obj_manage_data->update_query($query);	
}


## report count product website.
		
		$result_count_product = $obj_manage_data->select_data_proc(
			"select count(*) as numProduct
			FROM productcat pdc,product pd
			WHERE pdc.productcat_id=pd.productcat_id
			AND pdc.admin_id='".$admin_id."'"
		);
			$rs_count_product = mysql_fetch_array($result_count_product);
			$object_count_product=$rs_count_product['numProduct'];

		 

		## report count article website.
		$result_count_article = $obj_manage_data->select_data_proc(
			"select count(*) as totalArticle
			FROM article
			WHERE admin_id='".$admin_id."'"

		);
			$rs_count_article = mysql_fetch_array($result_count_article);
			$object_count_article=$rs_count_article['totalArticle'];

		
		## report check update product website.
		$result_check_update = $obj_manage_data->select_data_proc(
			"select max(product_date) as updateLatest
			from product pd,productcat pdc
			WHERE pd.productcat_id=pdc.productcat_id
			AND pdc.admin_id='".$admin_id."'"

		);
			$rs_check_update = mysql_fetch_array($result_check_update);
			$object_check_update=$rs_check_update['updateLatest'];
			
			



$member_user_url=trim($_SESSION['member_user_url2']);
//ทำการ select admin_id ออกมาจาก admin
$query_admin_id="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin_id=$obj_manage_data->select_data_proc($query_admin_id);
$rs_admin=mysql_fetch_array($result_admin_id);
$admin_id=$rs_admin["admin_id"];
//echo"<br>admin_id".$rs_admin["admin_id"]."<br>";

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


//Show Useronline
?>
<style>
	body{
	margin:0px;
	padding:0px;
	}
	#counterArea{
	width:200px;
	height:200px;
	background-image:url("./images_system/layout1/counterBg.png");
	}
	#counterArea #counterAreaTitle{
	padding-top:25px;
	padding-left:7px;
	color:white;
	}
	#counterArea table{
	color:white;
	padding-left:5px;
	}
	.tdWidthR{
	width:100px;
	font-size:13px;
	}
	.tdWidthL{
	width:50px;
	font-size:13px;
	}
</style>
<div id="counterArea">
	<div id="counterAreaTitle">
	<b>ข้อมูลการใช้งานเว็บไชต์</b>
	<table>
		<tr >
			<td ><div class="tdWidthR">จำนวนสินค้า</div></td>
			<td ><div class="tdWidthL"><?=$object_count_product?></div></td>
		</tr>
		<tr>
			<td><div class="tdWidthR">จำนวนบทความ</div></td>
			<td><div class="tdWidthL"><?=$object_count_article?></div></td>
		</tr>
		<tr>
			<td><div class="tdWidthR">จำนวนคำถาม</div></td>
			<td><div class="tdWidthL"><?=$user?></div></td>
		</tr>
		<tr>
			<td><div class="tdWidthR">จำนวนการเข้าชม</div></td>
			<td><div class="tdWidthL"><?=$plusCounter?></div></td>
		</tr>
		<tr>
			<td><div class="tdWidthR">ออนไลน์</div></td>
			<td><div class="tdWidthL"><?=$user?></div></td>
		</tr>
		<tr>
			<td ><div class="tdWidthR">ปรับปรุงเมื่อ</div></td>
			<td colspan="2"><div class="tdWidthL"><?=$object_check_update?></div></td>
		</tr>

	</table>
	</div>
</div>