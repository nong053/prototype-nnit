<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/web_cat/admin/css.css" type="text/css" rel="stylesheet"/>
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 14px;
	top: 221px;
}
-->
</style>
<style type="text/css">
<!--
 #dev_picturetext{
	 padding:5px;
	 background-color:#09C;
	 color:#FFF;
	 font-size:14px;
	 
	 font-weight:bold;
 }
 #dev_picturelink a{
	 color:#000;
	 text-decoration:none;
 }
 #dev_submit{
	 padding:5px;
	 border:#999 1px solid;
 }
-->
</style>
</head>

<body>
<?php 
include("../config.inc.php");

?>
<div id="content"> 
	
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		 
			<tr bgcolor="#999999">
				<td width="82">
                <div id="dev_picturetext">
                <center>
				ลำดับ
                </center>
                </div>
				</td>
				<td width="187">
                <div id="dev_picturetext">
				หมวดสินค้า
                </div>
				</td>
				<td width="307"> 
                <div id="dev_picturetext">
				รายละเอียดสินค้า
                </div>
				</td>
				<td width="109">
                <div id="dev_picturetext">
				จำนวนสินค้า
				</div>
				</td>
				<td width="152">
                <div id="dev_picturetext">
                <center>
				จัดการ
                </center>
                </div>
				</td>
			</tr> 
	
			
			<?php 
//##### Check manage user login end #####
$member_user_url=trim($_SESSION['member_user_url2']);
//ทำการ select admin_id ออกมาจาก table product category
$query_home="select admin_id from productcat WHERE
productcat.admin_id=(select admin_id from admin
where admin_username='".$member_user_url."');";
$result_home=$obj_manage_data->select_data_proc($query_home);
$rs_num=mysql_num_rows($result_home);

//ทำการ select admin_id ออกมาจาก admin
$query_admin_id="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin_id=$obj_manage_data->select_data_proc($query_admin_id);
$rs_admin_id=mysql_fetch_array($result_admin_id);

//ถ้าไม่มีaddmin_id ตามที่ loginเข้ามาให้ values =0 คือไม่มีข้อมูลน้นเอง
if(!$rs_num){
$values =0;
}else{
//ถ้ามีข้อมูล admin_id ให้ valuse = $admin_id ที่อยู่ในtable category product
$values = $rs_admin_id['admin_id'];
}
//ถ้าการlogin เข้ามาเป็น admin ให้แสดงข้อมูลของ admin 
if($_SESSION['admin_status']=="3"){
$values=1;
}
//##### Check manage user login end #####

			$strSQL="select * from productcat  where admin_id='".$values."'";
			$result=mysql_query($strSQL);
			$i=1;
			while($rs=mysql_fetch_array($result)){
				$strSQL2="select * from product where productcat_id=$rs[productcat_id]";
				$result2=mysql_query($strSQL2);
				$num=mysql_num_rows($result2);
				
			
			echo"<tr>";
				echo"<td>";
				echo"<center>";
				echo $i;
				echo"</center>";
				echo"</td>";
				echo"<td>";
				echo"<div id=\"dev_picturelink\">";
				echo"<a href=\"index.php?page=ecommerce_system&select_ecommerce=product&productcat_id=$rs[productcat_id]\">";
				?>
                <img src="images/announcement.gif" border="0" />
                <? 
				if(strlen($rs[productcat_name])>30){
				$productcat_name=mb_substr($rs[productcat_name],0,30, "UTF-8")."...";
				echo "$productcat_name";
				}else{
				echo $rs[productcat_name];
				
				}
				echo"</a>";
				echo"</div>";
				echo"</td>";
				echo"<td>";
				if(strlen($rs[productcat_detail])>30){
				$productcat_detail=mb_substr($rs[productcat_detail],0,30,"UTF-8")."...";
				echo"$productcat_detail";
				}else{
				echo $rs[productcat_detail];
				}
				
				echo"</td>";
				echo"<td>";
				echo"<center>";
				echo"$num";
				echo"</center>";
				echo"</td>";
				echo"<td>";
				echo"<div id=\"dev_picturelink\">";
				echo"<center>";
				
				if($rs[productcat_id]!="10"){
					
				echo"<a onClick=\"return confirm('คุณต้องการลบหมวดสินค้านี้ ?');\" href=\"productcat_delete.php?productcat_id=$rs[productcat_id]&admin_id=".$rs_admin_id['admin_id']."\">";
				?>
                <img src="images/b_drop.png" border="0" />
                <?
					echo"ลบ";
				
				echo"</a>&nbsp;";
				}else{
					
				}
				echo"<a href=\"index.php?page=ecommerce_system&select_ecommerce=productcat&action=edit&productcat_id=$rs[productcat_id]&admin_id=".$rs_admin_id['admin_id']."\">";
				?>
                <img src="images/b_edit.png" border="0" />
                <?
				echo"แก้ไข";
				echo"</a>";
				echo"</center>";
				echo"</div>";
				echo"</td>";
			echo"</tr>";
			$i++;
			}
			?>
		</table>
		<br style="clear:both" />
		<br style="clear:both" />
		<br style="clear:both" />
				
		<?php if($_GET['action']=="edit"){
		$productcat_id=$_GET['productcat_id'];
		$strSQL="select * from productcat where productcat_id=$productcat_id";
		$result=mysql_query($strSQL);
		if(!$result){echo"nono".mysql_error();}
		$rs=mysql_fetch_array($result);
		$productcat_name=$rs[productcat_name];
		$productcat_detail=$rs[productcat_detail];
		$productcat_name_eng=$rs[productcat_name_eng];
		$productcat_detail_eng=$rs[productcat_detail_eng];
		$action="productcat_edit.php";
		$submit="แก้ไขข้อมูล";
		
		} else{
		$action="productcat_insert.php";
		$submit="เพิ่มข้อมูล";
		$productcat_name="";
		$productcat_detail="";
		$productcat_name_eng="";
		$productcat_detail_eng="";
		}
		?>
		<b><?=$submit?></b>
		<br style="clear:both" />
		<br style="clear:both" />		
		
		<form action="<?=$action?>" method="post">
		<div id="footer"> 
		  <div id="tr">
				<div id="text_footer">ชื่อหมวดสินค้า</div>
				<div id="text_feild">
				<input type="text" name="productcat_name" value="<?=$productcat_name?>" />
				</div>
			</div>
            <div id="tr">
				<div id="text_footer"> Category Productcat Name</div>
				<div id="text_feild">
				<input type="text" name="productcat_name_eng" value="<?=$productcat_name_eng?>" />
				</div>
			</div>
			<div id="tr">
				<div id="text_footer">รายละเอียดหมวดสินค้า</div>
				<div id="text_feild">
				<input type="text" name="productcat_detail" value="<?=$productcat_detail?>" />
				</div>
			</div>
            <div id="tr">
				<div id="text_footer">Detail Category Productcat</div>
				<div id="text_feild">
				<input type="text" name="productcat_detail_eng" value="<?=$productcat_detail_eng?>" />
				</div>
			</div>
			<div id="tr">
			  	
				<div id="text_submit">
				<input type="hidden" name="admin_id" id="admin_id" value="<?= $rs_admin_id['admin_id']?>">
				<input type="hidden" name="productcat_id" value="<?=$productcat_id?>" />
				<input type="submit" name="submit" value="<?=$submit?>" />
				
				</div>
			</div>
		</div>
		</form>

</div>
</body>
</html>
