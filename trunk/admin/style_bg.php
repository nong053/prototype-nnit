<? ob_start();
$db=new database();
?>
<?php 
//require("class_mysql.php");

$result_bg = $db->selectSQL("bg_style");
$rs_bg=mysql_fetch_array($result_bg);
$bg_num=@mysql_num_rows($rs_bg);
$bg_name=$rs_bg[bg_name];
$bg_repeat=$rs_bg[bg_repeat];
$bg_position=$rs_bg[bg_position];
$bg_color=$rs_bg[bg_color];
$bg_web_color=$rs_bg[bg_web_color];
?>
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
<!-- CKE-->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- CKE-->
<!-- สี-->
<script language=JavaScript src="javascript/picker.js"></script>
<!-- สี-->
<div id="box_style">
<div id="box_style_l" style="float:left">
<form method="post" action="style_bg_process.php" name="bg" enctype="multipart/form-data">
<table>
	<tr>
    	<td>
        รูปพื้นหลัง
        </td>
    <tr>
    </tr>
        <td>
        <input type="file"  name="bg_picture"/>
        <a href="preview_style_process.php?want=preview&bg_id=1&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
    </tr>
    <tr>
    	<td>
        รูปแบบพื้นหลัง
        </td>
     <tr>
    </tr>
        <td>
		<?
		 
		 switch($bg_repeat){
			 case'inherit':$selected_repeat1="selected";break;
			 case'no-repeat':$selected_repeat2="selected";break;
			 case'repeat':$selected_repeat3="selected";break;
			 case'repeat-x':$selected_repeat4="selected";break;
			 case'repeat-y':$selected_repeat5="selected";break;
			 case'':$selected_repeat0="selected";break;
			 
			
		 }
		 
		 ?>
         <select name="bg_repeat">
         
         	<option value="" <?=$selected_repeat0?>>
            ไม่เลื่อก
            </option>
         	<option value="inherit" <?=$selected_repeat1?>>
            inherit
            </option>
            <option value="no-repeat" <?=$selected_repeat2?>>
            no-repeat
            </option>
            <option value="repeat" <?=$selected_repeat3?>>
            repeat
            </option>
            <option value="repeat-x" <?=$selected_repeat4?>>
            repeat-x
            </option>
            <option value="repeat-y" <?=$selected_repeat5?>>
            repeat-y
            </option>
         </select>
        </td>
    </tr>
    <tr>
    	<td>
        ตำแหน่งพื้นหลัง
      
        </td>
     <tr>
    </tr>
        <td>
        <?
		 
		 switch($bg_position){
			 case'':$selected_position0="selected";break;
			 case'bottom':$selected_position1="selected";break;
			 case'center':$selected_position2="selected";break;
			 case'inherit':$selected_position3="selected";break;
			 case'left':$selected_position4="selected";break;
			 case'right':$selected_position5="selected";break;
			 
			
		 }
		 
		 ?>
         <select name="bg_position">
         	<option value="" <?=$selected_position0?> >
            ไม่เลื่อก
            </option>
         	<option value="bottom" <?=$selected_position1?> >
            bottom
            </option>
            <option value="center" <?=$selected_position2?>>
            center
            </option>
            <option value="inherit" <?=$selected_position3?>>
            inherit
            </option>
            <option value="left" <?=$selected_position4?>>
            left
            </option>
            <option value="right" <?=$selected_position5?>>
            right
            </option>
         </select>
        </td>
    </tr>
    <tr>
    	<td>
        สีพื้นหลัง
        </td>
     <tr>
    </tr>
        <td>
         <input type="Text" name="bg_color" value="<?=$bg_color?>">
       <a href="javascript:TCP.popup(document.forms['bg'].elements['bg_color'])"><img width="15" height="13" src="../images_system/App_Store.png"></a>
        </td>
    </tr>
     <tr>
    	<td>
        สีพื้นหลัง(ตัวเว็บ)
        </td>
     <tr>
    </tr>
        <td>
         <input type="Text" name="bg_web_color" value="<?=$bg_web_color?>">
       <a href="javascript:TCP.popup(document.forms['bg'].elements['bg_web_color'])"><img width="15" height="13" src="../images_system/App_Store.png"></a>
        </td>
    </tr>
   
    <tr>
    	<td>
        
        </td>
     <tr>
    </tr>
        <td>
        <input type="submit"  value="Submit"/>
        </td>
    </tr>
</table>
</form>
<div id="box_style_r" style="float:left;">
	<div id="detail_style" style="width:auto; padding:5px; border:#CCC 1px solid; background-color:#FFC">
    Detail ...
    </div>
</div>
<br style="clear:both" />
</div>
</div>
