<style>
.pic_small a{
	color:#333;
	text-decoration:none;
	padding-left:10px;
	width:250px;
	text-align:left;
}
.pic_small a b{
	text-align:left;
}
.pic_txt a{
	color:#333;
	text-decoration:none;
}

</style>
 

  <div id="dev_table">
	 <?php 
	 include("config.inc.php");
	 $productcat_id=$_GET['productcat_id'];
	 if($productcat_id){
	 $strSQL="select * from product where productcat_id='$productcat_id' order by product_name";
	 }else{
	 $strSQL="select * from product order by product_name";
	 }
	 $result=mysql_query($strSQL);
	 while($rs=mysql_fetch_array($result)){
	 $product_name=$rs[product_name];
	 $product_title=$rs[product_title];
	 
	 $product_id=$rs[product_id];
	 $product_price=$rs[product_price];
	 $productcat_id=$rs[productcat_id];
	 $rows=mysql_num_rows($result);

	$thumbnailsPath="product/".$productcat_id."/".$product_id."/thumbnail/";
	$big_picture="product/".$productcat_id."/".$product_id."/";
		if(!is_dir($thumbnailsPath)){
		
		}else{ //else
		if($handle= opendir($thumbnailsPath)){
		$imagesFiles = array();
		while(false!=($file=readdir($handle))){
				if($file!="." && $file!=".."){
					$thumbnailsFile = $thumbnailsPath."/".$file;
					$picture_big =  $big_picture."/".$file;
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
		
				
     <div class="pic_all " style="float:left; background-color:#FFF; margin-right:5px; margin-top:5px;  width:252; height:300px; border:#ccc solid 1px;  text-align:center;">
     
        <div class="scopePic" style="background-image:url(<?=$thumbnailsFile?>) ;background-repeat:no-repeat; height:188px; width:200px; padding:5px; margin:auto;">
       <!-- <img src="<?=$thumbnailsFile?>" border="0"  height="188" />-->
		</div>
        <div class="pic_txt" style="padding:5px; border-top:1px solid #cccccc; border-bottom:1px solid #cccccc; text-align:left;">
        <a href="dispatcher.php?page=product_detail&product_id=<?=$product_id?>&productcat_id=<?=$productcat_id?>&name_title=<?=$product_name?>&member_user_url=<?=$_SESSION['member_user_url2']?>">
       
       <div class="txt" style="padding:1px;"> <img src="admin/images/knowledgebase.gif" border="0" />คลิ๊กดูรายละเอียด</div>
        </a>
        </div>
        
        <div class="pic_small">
        	<a href="dispatcher.php?page=product_detail&product_id=<?=$product_id?>&productcat_id=<?=$productcat_id?>&name_title=<?=$product_name?>&member_user_url=<?=$_SESSION['member_user_url2']?>" >
       
        	
			
            <div class="title_product" style="padding-left:10px !important; padding-left:0px;">
			<b><?=$product_name?></b> 
        	<?
            if(strlen($product_title)>51){
			$product_title =mb_substr($product_title,0,50,"UTF-8")."...";
			echo"$product_title";
			}else{
			echo $product_title;
			}
			
			?>
            </div>
        	</a>
       
        </div>
        
       
     </div>    

<?php }?>	
<br style="clear:both" />

</div>
  