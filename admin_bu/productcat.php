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
  #devtext_name{
	padding:5px;
	font-weight:bold;
	font-size:13px;
	border-top:#dedede solid 1px;
	border-bottom:#dedede solid 1px;
	background:#efefef;
}
 #devtext_name2 a{
	 text-decoration:none;
	 list-style:none;
	 color:#000;
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
                <div id="devtext_name">
                <center>
				ลำดับ
                </center>
                </div>
				</td>
				<td width="187">
                <div id="devtext_name">
				หมวดสินค้า
                </div>
				</td>
				<td width="307"> 
                <div id="devtext_name">
				รายละเอียดสินค้า
                </div>
				</td>
				<td width="109">
                <div id="devtext_name">
				จำนวนสินค้า
				</div>
				</td>
				<td width="152">
                <div id="devtext_name">
                <center>
				จัดการ
                </center>
                </div>
				</td>
			</tr> 
	
			
			<?php 
			$strSQL="select * from productcat";
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
				echo"<div id=\"devtext_name2\">";
				echo"<center>";
				echo"<a onClick=\"return confirm('คุณต้องการลบหมวดสินค้านี้ ?');\" href=\"productcat_delete.php?productcat_id=$rs[productcat_id]\">";
				?>
                <img src="images/b_drop.png" border="0" />
                <?
				echo"ลบ";
				echo"</a>&nbsp;";
				echo"<a href=\"index.php?page=ecommerce_system&select_ecommerce=productcat&action=edit&productcat_id=$rs[productcat_id]\">";
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
		$action="productcat_edit.php";
		$submit="แก้ไขข้อมูล";
		
		} else{
		$action="productcat_insert.php";
		$submit="เพิ่มข้อมูล";
		$productcat_name="";
		$productcat_detail="";
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
				<div id="text_footer">รายละเอีิยดหมวดสินค้า</div>
				<div id="text_feild">
				<input type="text" name="productcat_detail" value="<?=$productcat_detail?>" />
				</div>
			</div>
			<div id="tr">
			  	
				<div id="text_submit">
				<input type="hidden" name="productcat_id" value="<?=$productcat_id?>" />
				<input type="submit" name="submit" value="<?=$submit?>" />
				
				</div>
			</div>
		</div>
		</form>

</div>
</body>
</html>
