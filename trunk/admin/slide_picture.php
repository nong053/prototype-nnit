<? ob_start();
require("class_mysql.php");
$db=new database();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language=JavaScript src="javascript/picker.js"></script>
<style>
#devtext_title{	
	padding:5px;
	font-weight:bold;
	font-size:13px;
	border-top:#dedede solid 1px;
	border-bottom:#dedede solid 1px;
	background:#efefef;
}
#devtext a{
	color:#000;
	text-decoration:none;

	 
}
</style>

<div id="devtext_title">
ภาพสไลด์
</div>
<br style="clear:both">
<div id="box_style">
<div id="box_style_l" style="float:left">
<?php 
//require("class_mysql.php");

$result_slide_1 = $db->selectSQL("slide_picture  where slide_position='1'");
$rs_slide_1=mysql_fetch_array($result_slide_1);
$slide_num_1=mysql_num_rows($result_slide_1);
$slide_picture_object_1 =$rs_slide_1[slide_picture_object];
$slide_picture_link_1 =$rs_slide_1[slide_picture_link];




$result_slide_2 = $db->selectSQL("slide_picture where slide_position='2'");
$rs_slide_2=mysql_fetch_array($result_slide_2);
$slide_num_2=mysql_num_rows($result_slide_2);
$slide_picture_object_2 =$rs_slide_2[slide_picture_object];
$slide_picture_link_2 =$rs_slide_2[slide_picture_link];


$result_slide_3 = $db->selectSQL("slide_picture  where slide_position='3'");
$rs_slide_3=mysql_fetch_array($result_slide_3);
$slide_num_3=mysql_num_rows($result_slide_3);
$slide_picture_object_3 =$rs_slide_3[slide_picture_object];
$slide_picture_link_3 =$rs_slide_3[slide_picture_link];

?>
<form method="post" action="slide_picture_process.php" name="tcp_test" enctype="multipart/form-data">
<table>
	<tr>
    	<td>
        ภาพสไลด์ลำดับที่1
        </td>
        <td>
        <input type="file"  name="file_slide1" />
        <a href="preveiw_slide.php?want=preview&slide_position=1&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
         
        </td>
        <td>
        Link to
        </td>
        <td>
        <input type="text" name="slide_picture_link_1" value="<?=$slide_picture_link_1?>"> 
        </td>
        
    </tr>
    <tr>
    	<td>
        ภาพสไลด์ลำดับที่2
        </td>
        <td>
        <input type="file"  name="file_slide2"/>
         <a href="preveiw_slide.php?want=preview&slide_position=2&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
        <td>
        Link to
        </td>
        <td>
        <input type="text" name="slide_picture_link_2" value="<?=$slide_picture_link_2?>"> 
        </td>
         
    </tr>
    <tr>
    	<td>
        ภาพสไลด์ลำดับที่3
        </td>
        <td>
        <input type="file"  name="file_slide3"/>
         <a href="preveiw_slide.php?want=preview&slide_position=3&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
        <td>
        Link to
        </td>
        <td>
        <input type="text" name="slide_picture_link_3" value="<?=$slide_picture_link_3?>"> 
        </td>
        
    </tr>
    
    
    
</table>
<input type="submit"  value="Submit Now"/>
</form>


</div>
<div id="box_style_r" style="float:left;">
	<div id="detail_style" style="width:510px; padding:5px; border:#CCC 1px solid; background-color:#FFC">
    Detail:
    </div>
</div>
<br style="clear:both" />
</div>


