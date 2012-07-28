<meta http-equiv="content-type" content="text/html; chaset=utf-8" />
<!-- CKE-->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- CKE-->
<style>
@charset "utf-8";

/* CSS Document */
#content{
width:650px;
background-color:ffffff;
}
#content #title tr td{
width:640px;
background:#00FF00;
}
#content #title #1{
width:50px;
float:left;
}
#content #title #2{
width:200px;

}
#content #title #3{
width:400px;
}
#content #title #4{
width:100px;
}

#footer{
width:650px;
height:100px;
}
#footer #tr{
width:auto;
margin:0px;
padding:1px;
height:1px;
}
#footer #tr #text_footer{
width:150px;
float:left;
}
#footer #tr #text_feild{
width:350px;
float:left;
}
#footer #tr #text_submit{
width:400px;
padding:0px 0px 0px 150px;
}
/* หน้าสินค้า*/
.content_product{
width:auto;
padding:0px 0px 5px 0px;



}
.content_title_product{
width:auto;
padding:5px;
background-color:#09C;
color:#FFF;
font-size:14px;
font-weight:bold;
}
.content_1_product{
padding-left:15px;
width:82px;
float:left;

}
.content_2_product{
width:120px;
padding-left:10px;

float:left;
}
.content_3_product{
width:300px;
padding-left:10px;

float:left;
}
.content_4_product{
width:80px;
padding-left:10px;

float:left;
}
.content_5_product{
width:100px;
/*padding-left:10px;*/
padding-right:10px;

float:right;
}

.product_manage{
width:650px;
}
.prodcut_manage_title{
widows:640px;
margin:5px;
}
.product_manage_text{
width:100px;
float:left;
}
.product_manage_textfiled{
width:500px;
float:left;
}
.product_submit{
width:640px;
padding:0px 0px 0px 100px;
}
 #dev_picturelink a{
	 color:#000;
	 text-decoration:none;
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
</style>
<?php
 
include("../config.inc.php");
//include("fckeditor/fckeditor.php");
include("product_split.php");
$productcat_id=$_GET['productcat_id'];
$strSQL="select * from productcat where productcat_id='$productcat_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
//echo"<a href=\"index.php?page=productcat\">";
//echo"กลับไปยังหมวดสินค้า";
//echo"</a>";
//echo"-->$rs[productcat_name]";
?>

<table cellpadding="0" cellspacing="0" boder="0" width="100%">
	<tr>
    	<td width="13%">
        <div id="devtext_name">
        <center>
        ลำดับ
        </center>
        </div>
        </td>
        <td width="21%">
        <div id="devtext_name">
        รูปเมนูย่อย</div>
        </td>
        <td width="16%">
        <div id="devtext_name">
        ชื่อเมนูย่อย</div>
        </td>
        
      <td width="27%">
        <div id="devtext_name">การเชื่อมต่อ/ส่วนเสริม(Plugin)</div>
        </td>
        <td width="23%">
        <div id="devtext_name">
        <center>
        จัดการ
        </center>
        </div>
        </td>
    </tr>
    <?PHP
	$strSQL="select * from menu where productcat_id=$productcat_id";
	//$result=mysql_query($strSQL);
	$result=pu_query($dbname,$strSQL);
	
	$i=1;
	while($rs=mysql_fetch_array($result)){

	//จัดการกับรูปภาพ
	$thumbnailsPath="../menu_pic/".$productcat_id."/".$rs[product_id]."/thumbnail/";
		if(!is_dir($thumbnailsPath)){
		
		}else{ //else
		if($handle= opendir($thumbnailsPath)){
		$imagesFiles = array();
		while(false!=($file=readdir($handle))){
				if($file!="." && $file!=".."){
					$thumbnailsFile = $thumbnailsPath."/".$file;
					$fileType = pathinfo($thumbnaisFile);//แสดงpath
					$fileType = strtolower($fileType['extension']);//แสดงpathพร้อม แสดงนามสกุล
					$allowedtypes=array("png","jpeg","jpd","gif");
				
					if(is_file($thumbnailsFile)&& in_array($fileType,$allowedtypes))
					{
					$imagesFiles[]=$thumbnailsFile;
					}
			
				}
			}
			closedir($handle);
		}
		sort($imagesFiles);
		if(count($imagesFiles)>0){
		$thumbnailsFile = $imagesFiles[0];
		}
		
	}//else
	//ปิดจัดการรูปภาพ
	?>
    <tr>
    	<td>
        <center>
        <?=$i?>
        </center>
    	</td>
        <td>
        <?
		if(!$thumbnailsFile){
		echo"<img src=\"images/U_HEB003y.png\" height=\"100\" width=\"100\">";
		}else{
		echo"<img src=\"$thumbnailsFile\" height=\"100\" width=\"100\">";
		}
		?>
    	</td>
        <td>
        
        <?
		if(strlen($rs[product_name])>20){
		$product_name=mb_substr($rs[product_name],0,20,"UTF-8")."...";
		}else{
		$product_name=$rs[product_name];
		}
		echo"$product_name";
		?>
    	</td>
        
        <td>
       <?
		if($rs[main_menu_type]){
			
			echo"Internal Link $rs[main_menu_type]";
			}else if($rs[main_menu_link]){
			echo"External Link $rs[main_menu_link]";	
		}else{
			echo"'ว่าง'";
		}
		?>
    	</td>
        <td>
        <center>
        <div id="devtext_name2">
        
		<?
		echo"<a onClick=\"return confirm('คุณต้องการลบเมนูนี้ ?');\" href=\"main_menu_delete.php?action=delete&product_id=$rs[product_id]&productcat_id=$productcat_id\">";
		?>
                <img src="images/b_drop.png" border="0" />
        <?
		echo"ลบ";
		echo"</a>";
		echo"<a href=\"index.php?page=menu_system&select_page=main_menu&action=edit&product_id=$rs[product_id]&productcat_id=$rs[productcat_id]\">";
		?>
                <img src="images/b_edit.png" border="0" />
        <?
		echo"แก้ไข";
		
		echo"</a>";
		?>
        </div>
        </center>
    	</td>
    </tr>
    <?
	$i++;
	}
	?>
    <br style="clear:both" />
    <tr>
    	<td>
    	<?
		pu_pageloop("productcat_id=".$productcat_id);
		?>
     	</td>
    <tr>
</table>
<br style="clear:both" />
<br style="clear:both" />
<br style="clear:both" />


<?php
if($_GET['action']=="edit"){
	$http="";
$submit="แก้ไขข้อมูลสินค้า";
$product_id=$_GET['product_id'];
$strSQL="select * from menu where product_id=$product_id";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$product_name= $rs[product_name];
$product_title= $rs[product_title];
echo"product_name $product_name";
$product_price= $rs[product_price];
$product_promotion= $rs[product_promotion];
$main_menu_type= $rs[main_menu_type];
$main_menu_link= $rs[main_menu_link];
$product_amount= $rs[product_amount];
$product_detail= $rs[product_detail];

}else{
$submit="เพิ่มสินค้า";
$http="http://";
$product_name="";
$product_title="";
$product_price="";
$product_promotion="";
$product_amount="";
$product_detail="";
$main_menu_type= "";
$main_menu_link= "";
$action="add";
}
?>

<form action="menu_process.php" method="post" enctype="multipart/form-data">
	<div class="product_manage">
		<div class="prodcut_manage_title">
			<div class="product_manage_text">ชื่อเมนูย่อย</div>
			<div class="product_manage_textfiled">
			<input type="text" name="product_name" value="<?=$product_name?>" size="30"/>
			</div>
			<br style="clear:both" />
		</div>
		<div class="prodcut_manage_title">
			<div class="product_manage_text">อธิบายเมนู</div>
			<div class="product_manage_textfiled">
            <textarea name="product_title"><?=$product_title?></textarea>
			
			</div>
			<br style="clear:both" />
		</div>
        
			
		<!--<div class="prodcut_manage_title">
			<div class="product_manage_text">จำนวนสินค้า</div>
			<div class="product_manage_textfiled">
			<input type="text" name="product_amount" value="<?//$product_amount?>" size="5"/>
			</div>
			<br style="clear:both" />
		</div>-->
        
		<div class="prodcut_manage_title">
			<div class="product_manage_text">รูปเมนูย่อย</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>
        
        
        <? /*
		require("class_mysql.php");
		$db = new database();
		$result_menu=$db->tableSQL("menu");
		$num_menu=mysql_num_rows($result_menu);
		
		*/?>
        
        
        <div class="prodcut_manage_title">
			<div class="product_manage_text">Internal Link(ลิงค์ภายในเว็บไชต์/ส่วนเสริม(Plugin)) </div>
			<div class="product_manage_textfiled">
			  <select name="main_menu_type">
              	<option value="0">
                --- เลือก ---
                </option>
                
            	<option value="Product">
                Product
                </option>
                <option value="Article">
                Article
                </option>
                
            </select>
			</div>
			<br style="clear:both" />
		</div>
        <div class="prodcut_manage_title">
			<div class="product_manage_text">External Link(ลิงค์ไปเว็บไชต์ภายนอก)</div>
			<div class="product_manage_textfiled">
			  <input type="text" name="main_menu_link" value="<?=$http?><?=$main_menu_link?>" style="color:#999; width:200px; background-color:#FFC;"  />
			</div>
			<br style="clear:both" />
		</div>
        <!--<div class="prodcut_manage_title">
			<div class="product_manage_text">รูปสินค้า2</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>
        <div class="prodcut_manage_title">
			<div class="product_manage_text">รูปสินค้า3</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>
        <div class="prodcut_manage_title">
			<div class="product_manage_text">รูปสินค้า4</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>
        <div class="prodcut_manage_title">
			<div class="product_manage_text">ไฟล์ PDF</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>-->
		<!--<div class="prodcut_manage_title">
			<div class="product_manage_text">รายละเอียดเบื้องต้น</div>
			<div class="product_manage_textfiled">
			
            
			</div>
			<br style="clear:both" />
		</div>-->
		<div class="product_manage_title">
			<div class="product_submit">
			<input type="hidden" name="productcat_id" value="<?=$productcat_id?>" />
			<input type="hidden" name="product_id" value="<?=$rs[product_id]?>" />
			<input type="hidden" name="action" value="<?=$action?>" />
			
			
			</div>
		</div> 
	
	
    <!--CKEditor-->
   <!-- <textarea cols="80" id="product_title" name="product_title" rows="10" ><?//$product_title?></textarea>-->
    
    <!--CKEditor-->
    
    	<!--
        <div class="prodcut_manage_title">
			<div class="product_manage_text">รายละเอียด</div>
			<div class="product_manage_textfiled">
			
            
			</div>
			<br style="clear:both" />
		</div>
         CKEditor-->
    <!--<textarea cols="80" id="product_detail" name="product_detail" rows="10" ><?//$product_detail?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'product_detail',{

          
            filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

            } );
        //]]>
    </script>-->
    <!--CKEditor-->
    </div>
    
    <br>
    <input type="submit" name="submit" value="<?=$submit?>" />
    <input type="reset" name="reset" value="Clear" />
</form>


