<? ob_start();
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

<div id="box_style">
<div id="box_style_l" style="float:left">
<?php 
//require("class_mysql.php");

$result_header_bg = $db->selectSQL("object_system where object_position='header_bg'");
$rs_header_bg=mysql_fetch_array($result_header_bg);
$header_num=mysql_num_rows($result_header_bg);
$header_bg_color=$rs_header_bg[object_color];
$header_bg_width=$rs_header_bg[object_width];
$header_bg_height=$rs_header_bg[object_height];

$result_header_logo = $db->selectSQL("object_system where object_position='header_logo'");
$rs_header_logo=mysql_fetch_array($result_header_logo);
$header_logo_color=$rs_header_logo[object_color];
$header_logo_width=$rs_header_logo[object_width];
$header_logo_height=$rs_header_logo[object_height];

$result_header_banner = $db->selectSQL("object_system where object_position='header_banner'");
$rs_header_banner=mysql_fetch_array($result_header_banner);
$header_banner_color=$rs_header_banner[object_color];
$header_banner_width=$rs_header_banner[object_width];
$header_banner_height=$rs_header_banner[object_height];

?>
<form method="post" action="style_header_process.php" name="tcp_test" enctype="multipart/form-data">
<table>
	<tr>
    	<td>
        พื้นหลัง	Header
        </td>
        <td>
        <input type="file"  name="file_header_bg" />
        <a href="preview_style_object.php?want=preview&object_position=header_bg&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
         
        </td>
        <td>
        width:<input type="text" name="header_bg_width" style="width:30px;" value="<?=$header_bg_width?>"/>
        height:<input type="text" name="header_bg_height" style="width:30px;" value="<?=$header_bg_height?>"/>
        <input type="hidden" name="header_num" value="<?=$header_num?>" />
        </td>
        <td>
       color:<input type="Text" name="header_bg_color" value="<?=$header_bg_color?>">
       <a href="javascript:TCP.popup(document.forms['tcp_test'].elements['header_bg_color'])"><img width="15" height="13" src="../images_system/App_Store.png"></a>
        </td>
    </tr>
    <tr>
    	<td>
        LOGO
        </td>
        <td>
        <input type="file"  name="file_header_logo"/>
         <a href="preview_style_object.php?want=preview&object_position=header_logo&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
         <td>
        width:<input type="text" name="header_logo_width" style="width:30px;" value="<?=$header_logo_width?>"/>
        height:<input type="text" name="header_logo_height" style="width:30px;" value="<?=$header_logo_height?>"/>
        </td>
         <td>
       color:<input type="Text" name="header_logo_color" value="<?=$header_logo_color?>">
       <a href="javascript:TCP.popup(document.forms['tcp_test'].elements['header_logo_color'])"><img width="15" height="13" src="../images_system/App_Store.png"></a>
        </td>
    </tr>
    <tr>
    	<td>
        Banner
        </td>
        <td>
        <input type="file"  name="file_header_banner"/>
         <a href="preview_style_object.php?want=preview&object_position=header_banner&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
         <td>
        width:<input type="text" name="header_banner_width" style="width:30px;" value="<?=$header_banner_width?>"/>
        height:<input type="text" name="header_banner_height" style="width:30px;" value="<?=$header_banner_height?>"/>
        </td>
         <td>
       color:<input type="Text" name="header_banner_color" value="<?=$header_banner_color?>">
       <a href="javascript:TCP.popup(document.forms['tcp_test'].elements['header_banner_color'])"><img width="15" height="13" src="../images_system/App_Store.png"></a>
        </td>
    </tr>
    
    
    
</table>
<input type="submit"  value="OK SICKAREC"/>
</form>


</div>
<div id="box_style_r" style="float:left;">
	<div id="detail_style" style="width:510px; padding:5px; border:#CCC 1px solid; background-color:#FFC">
Detail ...
    </div>
</div>
<br style="clear:both" />
</div>


