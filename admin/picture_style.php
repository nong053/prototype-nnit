<style>
#devtext_title{	
	padding:5px;
	font-weight:bold;
	font-size:13px;
	border-top:#dedede solid 1px;
	border-bottom:#dedede solid 1px;
	background:#efefef;
}
#devtext tr td a{
	color:#000;
	text-decoration:none;

	 
}
</style>

<div id="devtext_title">
จัดการใส่รูปภาพลงบน Laout
<?
require("class_mysql.php");
	$db=new database();
	$result_select_style=$db->selectSQL('select_style');
	$rs_select_style=mysql_fetch_array($result_select_style);
	//echo"select_laout_number:$rs_select_labout[select_laout_number]<br>";
	$select_style_number=$rs_select_labout[select_style_number];
	echo"$select_style_number<br>";
?>
</div>
<br style="clear:both" />
<div id="devtext">
<table>
	<tr>
    	<td>
        <a href="index.php?page=style_system&select_page=picture_style&page_style=bg">
        <img src="../images_system/App_Store.png"  border="0"/><br>
        จัดการภาพพื้นหลัง
        </a>
        </td>
        <td>
        <a href="index.php?page=style_system&select_page=picture_style&page_style=footer">
        <img src="../images_system/App_Store.png"  border="0"/><br>
        จัดการFooter
        </a>
        </td>
        <td>
        <a href="index.php?page=style_system&select_page=picture_style&page_style=intro">
        <img src="../images_system/App_Store.png"  border="0"/><br>
        จัดการหน้าIntro
        </a>
        </td>
        <td>
        <a href="index.php?page=style_system&select_page=picture_style&page_style=header">
        <img src="../images_system/App_Store.png"  border="0"/><br>
        จัดการHeader
        </a>
        </td>
        <td>
        
         <a href="index.php?page=style_system&select_page=picture_style&page_style=main_menu">
        <img src="../images_system/App_Store.png"  border="0"/><br>
        จัดการMain menu
        </a>
        </td>
        <td>
        <a href="index.php?page=style_system&select_page=picture_style&page_style=box">
        <img src="../images_system/App_Store.png"  border="0"/><br>
        จัดการBox menu
        </a>
        </td>
        <td>
        <a href="index.php?page=style_system&select_page=picture_style&page_style=content">
        <img src="../images_system/App_Store.png"  border="0"/><br>
        จัดการContent
        </a>
        </td>
    </tr>
    <tr>
    	
        <td>
        <a href="index.php?page=style_system&select_page=picture_style&page_style=plugin">
        <img src="../images_system/App_Store.png"  border="0"/><br>
        จัดการ
        Plugin</a></td>
       <!-- <td>
        <a href="#">
        <img src="../images_system/App_Store.png"  border="0"/><br>
        จัดการContent
        </a>
        </td>
        <td>
        <a href="#">
        <img src="../images_system/App_Store.png"  border="0"/><br>
        จัดการMenu
        </a>
        </td>
        <td>
        <a href="#">
        <img src="../images_system/App_Store.png"  border="0"/><br>
        จัดการMenu
        </a>
        </td>
        <td>
        <a href="#">
        <img src="../images_system/App_Store.png"  border="0"/><br>
        จัดการปุ๋มด้านบน
        </a>
        </td>
        <td>
        <a href="#">
        <img src="../images_system/App_Store.png"  border="0"/><br>
        จัดการContent
        </a>
        </td>
        <td>
        <a href="#">
        <img src="../images_system/App_Store.png"  border="0"/><br>
        จัดการMain menu
        </a>
        </td>-->
    </tr>
    <tr>
    	
    </tr>
</table>
</div>
<br style="clear:both" />
<?
$page_style=trim($_GET['page_style']);


?>

	
    <?
	switch($page_style){
	case"bg":$title="Intro";$style="style_bg.php"; break; 	
	case"intro":$title="Intro";$style="style_intro.php"; break;
	case"header":$title="Header";$style="style_header.php"; break;
	case"footer":$title="Footer";$style="style_footer.php"; break; 
	case"content":$title="Content";$style="style_content.php"; break;
	case"top_menu":$title="Top menu";$style="style_top_menu.php"; break;
	case"main_menu":$title="Main menu";$style="style_main_menu.php"; break;
	case"plugin":$title="plugin";$style="style_plugin.php"; break;
	
	
	case"box":$title="Box";$style="style_box.php"; break;
	
	
}
if($style){
?>
<div id="devtext_title">
<?=$title?>
</div>
<br style="clear:both" />
<?
require("$style");
}
?>
<br style="clear:both" />
