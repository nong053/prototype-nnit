<style type="text/css">
body{

font:Tahoma;
}
.box_menu{
	background-color:#3CA5DD;
	width:138px !important;
	width:135px ;
	height:116px;
	float:left;
	border-radius:10px 0px 10px 0px;
	margin:2px;
	overflow:hidden;
	cursor:pointer;
}
.box_menu .titleTopYoutubeBg{
font-size:12px;
padding-left:5px;
padding-top:5px;
z-index:10000000;
background:#000000;
padding:5px;
opacity:0.6;
position:relative;

}

.box_menu .titleTopYoutubeBg .titleTopYoutube{
color:white;
z-index:100000;
}

</style>
<?php
$id_cat_youtube=(explode("-",$_GET[id_cat_youtube]));
$id_cat_youtube[0];
$id_cat_youtube[1];
//echo $id_cat_youtube[1];


?>
<!-- require new latest vdo -->
						<?php
						function __autoload($filename){
						require_once("oop/".$filename.".php");
						}
						$bj_manage = new manage_data();
						$result_youtube = $bj_manage->select_data("youtupe  where id_cat_youtupe = ".$id_cat_youtube[1]." order by id_youtupe DESC LIMIT 9");
						///$rum_vdo = mysql_num_rows($result_youtube);
						while($rs_youtube = mysql_fetch_array($result_youtube)){
$embed=$rs_youtube[embed_youtupe];
$title_youtupe=$rs_youtube[title_youtupe];
$id_youtupe=$rs_youtube[id_youtupe];
$id_cat_youtupe=$rs_youtube[id_cat_youtupe];


	$thumbnailsPath="youtupe/".$id_cat_youtupe."/".$rs_youtube[id_youtupe]."/thumbnail";
		
		
		if(!is_dir($thumbnailsPath)){
		echo"11".$file;
		}else{ //else
		if($handle= opendir($thumbnailsPath)){
			
		$imagesFiles = array();
		while(false!=($file=readdir($handle))){
				if($file!="." && $file!=".."){
					
					$thumbnailsFile = $thumbnailsPath."/".$file;
					$fileType = pathinfo($thumbnaisFile);//�ʴ�path
					$fileType = strtolower($fileType['extension']);//�ʴ�path����� �ʴ����ʡ��
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
	//�Դ�Ѵ����ٻ�
							
							?>
							
							<div class="box_menu" style="background-image:url(<?=$thumbnailsFile?>);
							
	background-position:center;">

								<div class="titleTopYoutubeBg">
									<div class="titleTopYoutube">
									<?=$title_youtupe?>
									</div>
									<div class="id_youtupe" style="display:none;">
									/<?=$id_youtupe?>
									</div>
								</div>
							
								<!--
								<div class="contentYoutube">
								<?=$embed?>
								</div>
								-->
							</div>
							<?
						}
						
						?>