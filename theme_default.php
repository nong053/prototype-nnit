<!--<?php ob_start(); session_start();?>-->
<?php
/*##########ดึง oject มาใช้งาน End*/
$member_user_url=trim($_SESSION['member_user_url2']);
if($member_user_url==""){	
echo"<script>window.location=\"index.php\"</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<link href="template/template1/css/dispatcher.css" type="text/css" rel="stylesheet"/>-->
<!-- import jquery and jquery ui start-->
<!--
<link href="jQueryUI/css/smoothness/jquery-ui-1.8.20.custom.css" rel="stylesheet" type="text/css" />
-->
<!-- import jquery and jquery ui end-->
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style4.css" />
<link rel="stylesheet" href="css/jquery.shadow.css" />
<!--
<script language="javascript" type="text/javascript" src="jquery/jquery.1.7.js"></script>
<script type="text/javascript" src="jQueryUI/js/jquery-ui-1.8.20.custom.min.js"></script>
-->
<script language="javascript" type="text/javascript" src="jquery/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="jquery/script.js"></script>
<script src="jquery/jquery.shadow.js"></script>	
<script src="jquery/layout1/mainLayout.js"></script>	
<script src="jquery/layout1/product.js"></script>	



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?
/*##########ดึง oject มาใช้งาน Start*/
	function __autoload($filename){
		require_once "oop/".$filename.".php";
		}
$obj_manage_data = new manage_data();



//ทำการ select admin_id ออกมาจาก admin
$query_admin_id="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin_id=$obj_manage_data->select_data_proc($query_admin_id);
$rs_admin=mysql_fetch_array($result_admin_id);
$admin_id=$rs_admin["admin_id"];
//echo"<br>admin_id".$rs_admin["admin_id"]."<br>";

$name_title=$_GET['name_title'];//is name to call title
## ทำการ require เอาclass database;
			include_once("class_mysql.php");
			$db = new database();		
 		## set logo area.
$main_menu_id=$_GET['main_menu_id'];
//echo"main_menu_id".$main_menu_id."<br>";

if($_GET['page']=="home"  or $_GET['page']=="" ){
$result_seo = $db->tableSQL("seo where admin_id='".$admin_id."'");
			$rs_seo = mysql_fetch_array($result_seo);
			$object_seo_id=$rs_seo['seo_id'];
			$object_seo_tag1=$rs_seo['seo_tag1'];
			$object_seo_tag2=$rs_seo['seo_tag2'];
			$object_seo_tag3=$rs_seo['seo_tag3'];
			$object_seo_keyword=$rs_seo['seo_keyword'];
			$name_title="โปรโมชั่นพิเศษ";
?>
			
			<title><?=$object_seo_tag1?> <?=$object_seo_tag2?> <?=$object_seo_tag3?></title>
            <meta name="Description" content="<?=$object_seo_keyword?>" />
            <meta name="KeyWords" content="<?=$object_seo_tag1?>,<?=$object_seo_tag2?>,<?=$object_seo_tag3?>"/>
<?
}

if($main_menu_id){
	//echo"main_menu_id$main_menu_id";
$result_seo = $db->tableSQL("seo where seo_position = '$main_menu_id'");
			$rs_seo = mysql_fetch_array($result_seo);
			$object_seo_id=$rs_seo['seo_id'];
			$object_seo_tag1=$rs_seo['seo_tag1'];
			$object_seo_tag2=$rs_seo['seo_tag2'];
			$object_seo_tag3=$rs_seo['seo_tag3'];
			$object_seo_keyword=$rs_seo['seo_keyword'];
			$seo="yes";
			?>
            <title><?=$object_seo_tag1?> <?=$object_seo_tag2?> <?=$object_seo_tag3?></title>
            <meta name="Description" content="<?=$object_seo_keyword?>" />
            <meta name="KeyWords" content="<?=$object_seo_tag1?>,<?=$object_seo_tag2?>,<?=$object_seo_tag3?>"/>
            
            

 
            <?
}else{
	$seo="no";
	?>
    <title><?=$name_title?></title>
    <?
}

?>
<style>
a{
	color:#00F;}
</style>
<?
//echo"member_user_url2==".$_SESSION['member_user_url2'];
		//counter Background
		$result_counter_bg = $db->tableSQL("object_system where object_position='counter_bg' and admin_id='".$admin_id."'");
		$rs_counter_bg=mysql_fetch_array($result_counter_bg);
		$counter_num=mysql_num_rows($result_counter_bg);
		$counter_bg=$rs_counter_bg['object_name'];
		$counter_bg_color=$rs_counter_bg[object_color];
		$counter_bg_width=$rs_counter_bg[object_width];
		$counter_bg_height=$rs_counter_bg[object_height];




 		## set logo area.
			$result_logo = $db->tableSQL("object_system where object_position = 'header_logo' and admin_id='".$admin_id."'");
			$rs_logo = mysql_fetch_array($result_logo);
			$object_name_logo=$rs_logo['object_name'];
			$object_color_logo=$rs_logo['object_color'];
			$object_width_logo=$rs_logo['object_width'];
			$object_height_logo=$rs_logo['object_height'];
		
		## set header title  area.
			$result_header_title = $db->tableSQL("object_system where object_position = 'header_title_bg' and admin_id='".$admin_id."'");
			$rs_header_title = mysql_fetch_array($result_header_title);
			$object_name_header_title=$rs_header_title['object_name'];
			$object_color_header_title=$rs_header_title['object_color'];
			$object_width_header_title=$rs_header_title['object_width'];
			$object_height_header_title=$rs_header_title['object_height'];

		## set header area.
			$result_header = $db->tableSQL("object_system where object_position = 'header_bg' and admin_id='".$admin_id."'");
			$rs_header = mysql_fetch_array($result_header);
			$object_name_header=$rs_header['object_name'];
			$object_color_header=$rs_header['object_color'];
			$object_width_header=$rs_header['object_width'];
			$object_height_header=$rs_header['object_height'];
			
		## set banner area.
		
			$result_banner = $db->tableSQL("object_system where object_position = 'header_banner' and admin_id='".$admin_id."'");
			$rs_banner = mysql_fetch_array($result_banner);
			$object_name_banner=$rs_banner['object_name'];
			$object_color_banner=$rs_banner['object_color'];
			$object_width_banner=$rs_banner['object_width'];
			$object_height_banner=$rs_banner['object_height'];
			
		## set bg area.
		
			$result_bg = $db->tableSQL("bg_style where admin_id='".$admin_id."'");
			$rs_bg = mysql_fetch_array($result_bg);
			$bg_name=$rs_bg['bg_name'];
			$bg_repeat=$rs_bg['bg_repeat'];
			$bg_position=$rs_bg['bg_position'];
			$bg_color=$rs_bg['bg_color'];
			$bg_web_color=$rs_bg['bg_web_color'];
			
		## set main button area.
		
			$result_button = $db->tableSQL("button_style where admin_id='".$admin_id."'");
			$rs_button = mysql_fetch_array($result_button);
			
			$button_bg =$rs_button['button_bg'];
			$button_bg_color=$rs_button['button_bg_color'];
			
			$button =$rs_button['button'];
			$button_color=$rs_button['button_color'];
			
			$button_over=$rs_button['button_over'];
			$button_over_color=$rs_button['button_over_color'];
			
			$button_overed=$rs_button['button_overed'];
			$button_overed_color=$rs_button['button_overed_color'];
			
			$button_font_color=$rs_button['button_font_color'];
	
			$button_font_over_color=$rs_button['button_font_over_color'];
			$button_width=$rs_button['button_width'];
			$button_hieght=$rs_button['button_hieght'];

		## set box area.
		
			$result_box = $db->tableSQL("box_style where admin_id='".$admin_id."'");
			$rs_box = mysql_fetch_array($result_box);
			$box_header =$rs_box['box_header'];
			$box_header_color =$rs_box['box_header_color'];
			$box_border_color =$rs_box['box_border_color'];
			$box_border_style =$rs_box['box_border_style'];
			$box_color_bg =$rs_box['box_color_bg'];
			$box_color =$rs_box['box_color'];
			$box_color_over =$rs_box['box_color_over'];
			$box_color_overed =$rs_box['box_color_overed'];
			$box_font_color =$rs_box['box_font_color'];
			
			
		## set box content area.
		
			$result_content = $db->tableSQL("content_style where admin_id='".$admin_id."'");
			$rs_content = mysql_fetch_array($result_content);
			$content_header =$rs_content['content_header'];
			$content_header_color =$rs_content['content_header_color'];
			$content_border_color =$rs_content['content_border_color'];
			$content_border_style =$rs_content['content_border_style'];
			$content_width =$rs_content['content_width'];
			$content_height =$rs_content['content_height'];
			$content_font_color =$rs_content['content_font_color'];
			$content_bg_color =$rs_content['content_bg_color'];
			
		## set footer area.
		
			$result_footer = $db->tableSQL("footer_style where admin_id='".$admin_id."'");
			$rs_footer = mysql_fetch_array($result_footer);
			$content_width =$rs_content['content_width'];
			
			$footer_bg =$rs_footer['footer_bg'];
			$footer_repeat =$rs_footer['footer_repeat'];
			$footer_color  =$rs_footer['footer_color'];

		
			
			
	 ?>
<style>
@charset "utf-8";
/* CSS Document */
body{
	/*background-color:#000;*/
	padding:0px;
	margin:0px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:13px;
	text-align:center;


    background-position: center top;
    background-repeat:<?=$bg_repeat?>;
    height: 100%;
    width: 100%;
	background-color:<?=$bg_color?>;
    background-image:url(object_system/<?=$admin_id?>/<?=$bg_name?>);


}
#body{
	text-align:left;
	width:1000px;
	height:auto;
	margin:auto;
	border-radius:5px;
	border:solid #cccccc 1px;
	
}
/*header*/
#body #bg_header{
	/*background-color:#00F;*/
	height:100px;
}
#body #bg_header #logo{
	float:left;
	width:200px;
	height:100px;
}
#body #bg_header #top_banner{
	float:right;
	height:90px;
	width:750px;
	margin:5px;
	margin-right:10px;
}
#copy-right{
text-align:right;
display:block;
padding:5px;
color:white;
}
/*/header*/

/*top_menu*/
#body #bg_top_menu{
	background-image:url(object_system/<?=$admin_id?>/<?=$button_bg?>);
	height:30px;
}
#body #bg_top_menu #top_menu{
	
}
#body #bg_top_menu #top_menu ul{
	
	
	height:auto;
	background-color:<?=$button_bg_color?>;
	margin-top:2px;

}
#body #bg_top_menu #top_menu ul li{
	list-style:none;
	text-decoration:none;
	width:<?=$button_width?>px;
	height:<?=$button_hieght?>px;
	float:left;
	display:block;
}
#body #bg_top_menu #top_menu ul li .text{
	padding: 5px;
	padding-left:15px;
	/*
	padding:3px;
	margin-top:2px;
	margin-bottom:2px;
	*/
}
#body #bg_top_menu #top_menu ul li .text a{
	display:block;
	text-align:center;
	color:<?=$button_font_color?>;
	/*background-color:#999;*/
	padding: 2px 2px 2px 10px;
	background-color:<?=$button_color?>;
	background-image:url(object_system/<?=$admin_id?>/<?=$button?>);
	text-decoration:none;
	font-weight:bold;
	border-left:1px solid #cccccc;
	
}
#body #bg_top_menu #top_menu ul li .text a:hover{
	color:<?=$button_font_over_color?>;
	background-color:<?=$button_over_color?>;
	background-image:url(object_system/<?=$admin_id?>/<?=$button_over?>);

}
#body #bg_top_menu #top_menu ul li .text a:visited{
	/*color:#FFF;*/
	
	background-color:<?=$button_overed?>;
	background-image:url(object_system/<?=$admin_id?>/<?=$button_overed_color?>);
	
	

}
/*/top_menu*/
#body #title_navigator{
width:1000px;
height:25px;

background-image:url("images_system/title_navigator.png");
}
/*content*/
#body #bg_content{
	/*background-color:#FF0;*/
	height:auto;
}

#body #bg_content #bg_box_left{
	width:195px;
	width:200px !important;
	height:auto;
	float:left;
}
#body #bg_content #bg_box_left .box_left{
	padding-left:2px;
	padding-right:2px;
	/*border-radius:5px;*/
}



#body #bg_content #bg_box_left .box_left .box_top{
	background-color:<?=$box_header_color?>;
	background-image:url(object_system/<?=$admin_id?>/<?=$box_header?>);
	height:25px;
	color:<?=$box_font_color?>;
	width:195px;
	

}
#body #bg_content #bg_box_left .box_left .box_top .b{
	padding-top:5px;
	font-weight:bold;
}
#body #bg_content #bg_box_left .box_left .box_center{
	background-color:<?=$box_color_bg?>;
	border:0px !important;
	border:1px <?=$box_border_color?> <?=$box_border_style?>;
	width:196px;
     
}
#body #bg_content #bg_box_left .box_left .box_center .box_menu{
border:1px solid white;
background:white;
}
#body #bg_content #bg_box_left .box_left .box_center .box_menu ul{
	padding:0px;
	margin:0px;
	height:auto;
	
}
#body #bg_content #bg_box_left .box_left .box_center .box_menu ul li{
	list-style:none;
	background-image:url("./images_system/layout_box_center.png");
	padding:0px;
	margin:0px;
	

}
#body #bg_content #bg_box_left .box_left .box_center .box_menu ul li a{
	/*background-color:<?=$box_color_bg?>;*/
	color:#000;
	display:block;
	text-decoration:none;
	padding:5px !important;
	padding:5px;
	height:auto !important;
	height:27px;

}
#body #bg_content #bg_box_left .box_left .box_center .box_menu ul li a:hover{
	background-color:<?=$box_color_overed?>;
	color:#000;
	background-image:url("./images_system/layout_box_center_hover.png");
	display:block;
	height:auto !important;
	height:27px;
}



#body #bg_content #bg_box_right{
	float:right;
	width:793px;

	/*background-color:#F0F;*/
}

#body #bg_content #bg_box_right #bg_content{
	padding-left:0px;
	padding-right:0px;
}
#body #bg_content #bg_box_right #bg_content #content{
	
}
#body #bg_content #bg_box_right #bg_content #content #content_top{
	background-color:<?=$content_header_color?>;
	background-image:url(object_system/<?=$admin_id?>/<?=$content_header?>);
	height:<?=$content_height ?>px;
	width:<?=$content_width?>px;

}
#body #bg_content #bg_box_right #bg_content #content #content_top #b{
	font-weight:bold;
	padding-top:0px;
	color:<?=$content_font_color?>;

}
#body #bg_content #bg_box_right #bg_content #content #content_center{
	background-color:<?=$content_bg_color?>;
	border: 1px <?=$content_border_color ?> <?=$content_border_style?>;
	margin-left: 2px;
	width: 788px !important;
	width: 790px;
}

/*/content*/

/*footer*/
#body #bg_footer{
	background-color:<?=$footer_color?>;
	/*height:100px;*/
	height:auto;
	background-image:url(object_system/<?=$admin_id?>/<?=$footer_bg?>);
	background-repeat:<?=$footer_repeat?>;
	width:998px;
	margin:1px;
	text-align:center;
}
#body #bg_footer #menu_footer{
	width:800px;
	margin:auto;
	text-align:left;
	 padding-top: 5px;
	
}

#body #bg_footer #menu_footer ul{

	margin-top:5px;
	padding:0px;
	margin:0px;
	height:auto;
	background-color:<?=$button_bg_color?>;
	background-image:url(object_system/<?=$admin_id?>/<?=$button_bg?>);
}
#body #bg_footer #menu_footer ul li{
	list-style:none;
	text-decoration:none;
	width:<?=$button_width?>px;
	height:<?=$button_hieght?>px;
	padding:5px;
	float:left;
	display:block;
	
}
#body #bg_footer #menu_footer ul li a{
	display:block;
	text-align:center;
	color:<?=$button_font_color?>;
	background-color:<?=$button_color?>;
	background-image:url(object_system/<?=$admin_id?>/<?=$button?>);
	padding-left:10px;
	padding:5px;
	font-weight:bold;
	text-decoration:none;
	
}
#body #bg_footer #menu_footer ul li a:hover{
	color:<?=$button_font_over_color?>;
	background-color:<?=$button_over_color?>;
	background-image:url(object_system/<?=$admin_id?>/<?=$button_over?>);
	
}
#autocomplete{
	float:right;
    left: 750px;
    /*position: absolute;*/
    top: 0;

}
#txtSearch{
	height:22px;
	width:150px;
}
#txtSearch{
color:#cccccc;
}


#headerArea{
height:35px;
width:auto;
z-index:5;
background:<?=$object_color_header_title?>;
background-image:url(object_system/<?=$admin_id?>/<?=$object_name_header_title?>);
/*background-image:url("./images_system/layout1/bg_tab.png");*/
}
#headerArea #hederContent{
	width:1000px;
	text-align:left;
	margin:auto;
	
}
#headerArea #hederContent #headerLeft{
	width:600px;
	height:30px;
	float:left;
}
#headerArea #hederContent #headerLeft #icon_tw{
float:left;
width:84px;
background-image:url("./images_system/layout1/icon-fb.jpg");

}
#headerArea #hederContent #headerLeft #icon_tw .title_icon{
padding:7px;
}
#headerArea #hederContent #headerLeft #icon_tw .title_icon a{
color:white;
text-decoration:none;
padding-left:20px;
}

#headerArea #hederContent #headerLeft #icon_fw{
float:left;
width:84px;
background-image:url("./images_system/layout1/icon-tw.jpg");
}
#headerArea #hederContent #headerLeft #icon_fw .title_icon{
padding:7px;
}
#headerArea #hederContent #headerLeft #icon_fw .title_icon a{
color:white;
text-decoration:none;
padding-left:20px;
}

#headerArea #hederContent #headerLeft .iconTop{
float:left;
width:50px;
}
#headerArea #hederContent #headerLeft .iconTop .title_icon{
padding:7px;
}
#headerArea #hederContent #headerLeft .iconTop .title_icon a{
color:white;
text-decoration:none;
padding-left:20px;
}

#headerArea #hederContent #headerRight{
	width:300px;
	height:30px;
	float:right;

}
/*/footer*/


</style>


</head>

<body>
	
   
    
    
    <div id="headerArea">
		<div id="hederContent">
			<div id="headerLeft">

				<div id="icon_tw">
						<div class="title_icon">
							<a href="http://www.facebook.com"> Sign in </a>
						</div>
				</div>
				<div id="icon_fw">
						<div class="title_icon">
						<a href="http://www.twitter.com"> Sign in </a>
						</div>
				</div>
				<div class="iconTop">
						<div class="title_icon">
						<a href="login.php"> Login </a>
						</div>
					</div>
				<div class="iconTop">
						<div class="title_icon">
						<a href="dispatcher.php?page=register&name_title=สมัครสมาชิก"> Register </a>
						</div>
				</div>
			</div>

			<div id="headerRight">
				  <div id="autocomplete">
								<form action="" >
									<table>
										<tr>
											<td>
											<input type="text" id="txtSearch"  name="txtSearch"  value="Search here"/>
											</td>
											<td>
											<input type="button" id="btnSubmit" name="btnSubmit" value="ค้นหาข้อมูล" />
											</td>
										</tr>
									</table>
								</form>
					</div>
			</div>
		</div>
	</div>
	<div id="body" style="background-color:<?=$bg_web_color?>;">
	
	<?
	if($_SESSION['cus_name']){
	?>
	  <div id="status_user_online" style="font-size:16px; padding:5px; float:left;">คุณ<?=$_SESSION['cus_name']?>กำลังอยู่ในระบบ  </div>
       <div id="status_user_online" style="font-size:16px; padding:5px; float:right;"><input type="button" onclick="window.location='dispatcher.php?logout=logout&member_user_url=<?=$_SESSION['member_user_url2']?>'"  value="ออกจากระบบ"/> </div>
      <br style="clear:both" />
	  <?
	  }
	  if($_GET['logout']){
		  //session_destroy();
		  unset($_SESSION["cus_name"]); 
		 $member_user_url= $_GET['member_user_url'];
		  echo"<script>window.location='dispatcher.php?member_user_url=".$member_user_url."'</script>";
	  }
	  ?>
     <div id="bg_header" style="background-color:<?=$object_color_header?>; background-image:url(object_system/<?=$admin_id?>/<?=$object_name_header?>); height:<?=$object_height_header?>px;">
        
   	   <div id="logo">
           
            <img src="object_system/<?=$admin_id?>/<?=$object_name_logo?>" width="<?=$object_width_logo?>" height="<?=$object_height_logo?>" />
			</div>
            <div id="top_banner" style="background-color:<?=$object_color_banner?>;">
            <img src="object_system/<?=$admin_id?>/<?=$object_name_banner?>" width="<?=$object_width_banner?>" height="<?=$object_height_banner?>" />
            
            </div>
            
            <br style="clear:both" />
            
        </div>
        <div id="bg_top_menu">
        	<div id="top_menu">
            	<ul>
              <?
                $result_main_menu = $db->tableSQL("main_menu where admin_id='".$admin_id."' order by menu_priority asc");
				while($rs_main_menu = mysql_fetch_array($result_main_menu)){
              if($rs_main_menu[plugin]=="article"){
				  $link_main__menu="dispatcher.php?page=article&main_menu_id=$rs_main_menu[main_menu_id]&member_user_url=".$_SESSION['member_user_url2']."";
                  }else if($rs_main_menu[plugin]=="article_ge"){
				  	 $link_main__menu="dispatcher.php?page=article&main_menu_id=$rs_main_menu[main_menu_id]&article_ge=article_ge&member_user_url=".$_SESSION['member_user_url2']."";
				  }else if($rs_main_menu[plugin]=="link"){
					 $link_main__menu="$rs_main_menu[main_menu_link]&member_user_url=".$_SESSION['member_user_url2'].""; 
				  }else{
					 $link_main__menu="$rs_main_menu[plugin]&member_user_url=".$_SESSION['member_user_url2']."";
				  }
				?>
                	<li>
                    <div class="text">
                    	<a href="<?=$link_main__menu?>&name_title=<?=$rs_main_menu[main_menu_name]?>"><?=$rs_main_menu[main_menu_name]?>
						</a>
					</div>
                    </li>
                    <?
				}
					?>
					
                    <li style="float:right;">
					<!--
						<div class="text">
						<a href="dispatcher.php?page=cart&member_user_url=<?=$_SESSION['member_user_url2']?>">
						ตระกร้าสินค้า
						</a>
						</div>
						-->
                    </li>
					
                    <br style="clear:both" />
                </ul>
               
            </div> 
        </div>
		<!-- beside-->
		<!-- title navigator start-->
		<div id="title_navigator">
		</div>
		<!-- title navigator end-->
        <div id="bg_content">


	  



        	<div id="bg_box_left" >
			<!-- cate product-->
			<div class="box_left shadow">
				<div class="box_top">
				<div class="b" style="padding-left:5px;">หมวดสินค้า</div>
				</div>
				<div class="box_center">
					<div class="box_menu">
						<ul>
						<?
						$result_productcat = $db->tableSQL("productcat where admin_id='".$admin_id."'");
						while($rs_productcat=mysql_fetch_array($result_productcat)){
						?>
							<li>
							<a href="dispatcher.php?page=product&productcat_id=<?=$rs_productcat[productcat_id]?>&name_title=<?=$rs_productcat[productcat_name]?>&member_user_url=<?=$_SESSION['member_user_url2']?>"><font style="padding-left:5px;"><?=$rs_productcat[productcat_name]?></font></a>
							</li>
						<?
						}
						?>
						   
						</ul>
					</div>
				</div>
			 </div>
			 <br style="clear:both" />
			 <!-- end cate product-->
			<!-- start banner -->
			
                    <div style="padding:5px;">
                		<? 
							$result_banner_sum = $db->tableSQL("banner_sum where admin_id='".$admin_id."'");
							while($rs_banner_sum=mysql_fetch_array($result_banner_sum)){
							if($rs_banner_sum[pic_link]){
							$link_banner=$rs_banner_sum[pic_link];
							}else{
								$pic_id=$rs_banner_sum[pic_id];
								
								
									$link_banner="dispatcher.php?page=banner_detail&pic_id=$pic_id&name_title=รายละเอียด&member_user_url=".$_SESSION['member_user_url2']."";
								
							
							}
							?>
                            
                            <a href="<?=$link_banner?>">
                            <img src="mypicture/<?=$admin_id?>/<?=$rs_banner_sum[pic_name];?>" width="180" border="0"/>
							</a>
							<?
							}
                            
						?>
            		</div>	
            			
                	
              <br style="clear:both" />
			<!--
			<div class="box_left shadow">
            		<div class="box_top">
                	<div class="b" style="padding-left:5px;">Link ผู้สนันสนุน</div>
                	</div>
                	<div class="box_center">
                    <div style="padding:5px;">
                		<? 
							$result_banner_sum = $db->tableSQL("banner_sum where admin_id='".$admin_id."'");
							while($rs_banner_sum=mysql_fetch_array($result_banner_sum)){
							if($rs_banner_sum[pic_link]){
							$link_banner=$rs_banner_sum[pic_link];
							}else{
								$pic_id=$rs_banner_sum[pic_id];
								
								
									$link_banner="dispatcher.php?page=banner_detail&pic_id=$pic_id&name_title=รายละเอียด&member_user_url=".$_SESSION['member_user_url2']."";
								
							
							}
							?>
                            
                            <a href="<?=$link_banner?>">
                            <img src="mypicture/<?=$admin_id?>/<?=$rs_banner_sum[pic_name];?>" width="180" border="0"/>
							</a>
							<?
							}
                            
						?>
            		</div>	
            			
                	</div>
                 </div>
              <br style="clear:both" />
			  -->
			 <!--end banner-->
				<!--
				<div id="counter_user">
					
					<?php
					include_once("counter_user.php");
					?>
				</div>
				-->
				<!--
				<div id="status_server">
					<img src="images_system/layout1/status_server.jpg">
				</div>
				<div id="list_package">
					<img src="images_system/layout1/banner3_10.png">
				</div>
				<div class="us_service">
					<img src="images_system/layout1/banner3_06.png">
				</div>
				<div class="us_service">
					<img src="images_system/layout1/banner3_03.png">
				</div>
				
				<div class="us_service">
					<img src="images_system/layout1/banner_promote.jpg">
				</div>
				-->
			

                 <div class="box_left shadow">
            		<div class="box_top">
                	<div class="b" style="padding-left:5px;">บทความ</div>
                	</div>
                	<div class="box_center">
                    <div class="box_menu">
              
                		<ul>
                            <?
							$result_main_menu = $db->tableSQL("main_menu where plugin='article_ge' and admin_id='".$admin_id."'");
							$rs_main_menu2=mysql_fetch_array($result_main_menu);
							$main_menu_id=$rs_main_menu2[main_menu_id];
							$result_article = $db->tableSQL("article where main_menu_id= '$main_menu_id' and admin_id='".$admin_id."'");
							while($rs_article=mysql_fetch_array($result_article)){
                            ?>
                            	<li>
                                <a href="dispatcher.php?page=article&article_id=<?=$rs_article[article_id];?>&name_title=<?=$rs_article[article_name]?>&member_user_url=<?=$_SESSION['member_user_url2']?>"><span style="padding-left:5px;"><?=$rs_article[article_name];?></span></a>
                                </li>
                            <?
							}
							?>
                            
                           </ul>
                          
            	
                   </div>
                	</div>
                 </div>
                 <br style="clear:both" />
                
                 <div class="box_left shadow">
            		<div class="box_top">
                	<div class="b" style="padding-left:5px;">ลงชื่อเข้าใช้งาน</div>
                	</div>
                	<div class="box_center">
                    <div style="padding:5px;">
				
                   		<!--form_Login-->
						
		 <form action="login_process.php" method="post">
		 		<div class="menu_content_login">
		 			<div id="menu_content_login_c" style="padding-left:5px;">
					<table border="0" cellpadding="1" cellspacing="0">
					<tr>
						<td>ชื่อผู้ใช้
						</td>
						<td>
						<input type="text" name="user" size="15" /> 
						</td>
					</tr>
					<tr>
						<td>
						รหัสผ่าน&nbsp;
						</td>
						<td>
						<input type="password" name="pass" size="15" />
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
						<input type="submit" name="submit" value="ตกลง"  />
						<input type="hidden" name="member_user_url" id="member_user_url" value="<?=$_SESSION['member_user_url2']?>">
						<br><a href="dispatcher.php?page=register&member_user_url=<?=$_SESSION['member_user_url2']?>">สมัครสมาชิก</a><br>
                        <a href="dispatcher.php?page=forgot_pass&member_user_url=<?=$_SESSION['member_user_url2']?>">ลืมรหัสผ่าน</a><br>
                        <?
						if($_SESSION['cus_id']){
							?>
                            <a href="dispatcher.php?page=customer_area&select_member=member_add&member_user_url=<?=$_SESSION['member_user_url2']?>">ข้อมูลสมาชิก</a><br>
                            <a href="dispatcher.php?page=customer_area&select_member=payment&member_user_url=<?=$_SESSION['member_user_url2']?>">แจ้งการชำระเงิน</a><br>
                            <a href="dispatcher.php?page=customer_area&select_member=status_order&member_user_url=<?=$_SESSION['member_user_url2']?>">สถานะการสั่งซื้อ</a><br>
                            <?
						}
						?>
						</td>
					</tr>
					</table> 
		 			</div>
					
		   </div>
		 </form>
		
		 <!-- form Login-->
		
            		</div>	
            			
                	</div>
                 </div>
                <br style="clear:both" />
          
			
              
                
             
                    <div style="padding:5px;">
					
						<?
                		$result_plugin_on_web = $db->tableSQL("plugin_on_web where admin_id='$admin_id'");
						while($rs_plugin_on_web=mysql_fetch_array($result_plugin_on_web)){
							
							//echo "<div style=\"font-weight:bold;\">".$rs_plugin_on_web[plugin_name]."</div><br>";
                            echo $rs_plugin_on_web[plugin_code];
							"<hr>";
						}
						?>
            	
                 </div>
                <br style="clear:both" />
                
            </div>
            
            <div id="bg_box_right">
            	<div id="bg_content">
                	<div id="content">
     <?
	 if($_GET['page']=="" or $_GET['page']=="home"){
		 $result_slide_picture = $db->tableSQL("slide_picture where admin_id='".$admin_id."'");
		 $slideRows=mysql_num_rows($result_slide_picture);
		 
		
	 ?>



<!------------------------------------- THE CONTENT ------------------------------------------------->
<div id="jslidernews1" class="lof-slidecontent" style="width:790px; height:380px;">
	<div class="preload"><div></div></div>
    		 <div  class="button-previous">Previous</div>
              <div  class="button-next">Next</div>
    		 <!-- MAIN CONTENT --> 
              <div class="main-slider-content" style="width:790px; height:380px;">
                <ul class="sliders-wrap-inner">
				<?
				 while($rs_slide_picture=mysql_fetch_array($result_slide_picture)){
				?>
				 <li>
                            <img src="slide_picture/<?=$admin_id?>/<?=$rs_slide_picture["slide_picture_object"]?>" title="Newsflash 2"  width="790">           
                         <!--
						  <div class="slider-description">
                            <div class="slider-meta"><a target="_parent" title="Newsflash 1" href="#Category-1">/ Newsflash 1 /</a> <i> — Monday, February 15, 2010 12:42</i></div>
                            <h4>Content of Newsflash 1</h4>
                            <p>The one thing about a Web site, it always changes! Joomla! makes it easy to add Articles, content,...
                            <a class="readmore" href="<?=$rs_slide_picture["slide_picture_link"]?>">Read more </a>
                            </p>
                         </div>
						 -->
                    </li> 
				<?
				}
				?>
                   
                  </ul>  	
            </div>
 		   <!-- END MAIN CONTENT --> 
           <!-- NAVIGATOR -->
           	<div class="navigator-content">
                  <div class="button-control"><span></span></div>	
                  <div class="navigator-wrapper">
                        <ul class="navigator-wrap-inner">
						<?
						for($i=1;$i<=$slideRows;$i++){
						?>
						<li><span><?=$i?></span></li>
						<?
						}
						?>
                        </ul>
                  </div>
                
             </div> 
          <!----------------- END OF NAVIGATOR --------------------->
 </div> 

<!------------------------------------- END OF THE CONTENT ------------------------------------------------->

    <?
	 }
	?>  
                    <?
						
						switch($_GET['page']){
							case"product":$require="product.php"; $title_top="สินค้าทั้งหมด";break;
							case"product_detail":$require="product_detail.php";$title_top="รายละเอียดของสินค้า";break;
							case"gallery":$require="gallery.php";$title_top="อัลบั้ลรูปภาพ";break;
							case"article":$require="article.php";$title_top="บทความ";break;
							case"banner_detail":$require="banner_detail.php";$title_top="บทความ";break;
							case"home":$require="home.php";break;
							case"webboard":$require="webboard.php";break;
							case"answer":$require="answer.php";break;
							case"new_topic":$require="new_topic.php";break;
							case"contact":$require="contact.php";break;
							case"cart":$require="cart.php";break;
							case"confrim_order":$require="confrim_order.php";break;
							case"register":$require="register.php";break;
							case"forgot_pass":$require="forgot_pass.php";break;
							case"confrim":$require="confrim.php";break;
							case"pay":$require="pay.php";break;
							case"rule":$require="rule.php";break;
							case"payment":$require="payment.php";break;
							case"customer_area":$require="customer_area.php";break;		
							default:$require="home.php";break;
							
						}
					?>
                		<div id="content_top">
                    	<div id="b" style="padding-left:10px; padding-top:5px;"><?=$name_title?></div>
                    	</div>
                    	<div id="content_center">
                    		<div style="padding:5px;"><? include_once("$require");?></div>	
                    	</div>
                    </div>
                    <br style="clear:both" />
                    
                    <!--
                    <div id="content">
                		<div id="content_top">
                    	<div id="b" style="padding-left:5px; padding-top:9px;">top</div>
                    	</div>
                    	<div id="content_center">
                    	<font style="padding:5px;">
                		<br>
            			<br>
            			<br>
            			<br>
            			<br>
            			<br>
            			<br>
            			<br><br>
            			<br>
            			<br>
            			<br>
            			<br>
            		</font>	
                    	</div>
                    </div>
                    -->
                 
                    
                </div>
            		
            </div>
            <br style="clear:both" />
        
            
        </div>
        <div id="bg_footer">
        	<div id="menu_footer">
            	<ul>
                	
                  <?
                $result_main_menu = $db->tableSQL("main_menu where admin_id='".$admin_id."'");
				while($rs_main_menu = mysql_fetch_array($result_main_menu)){
              if($rs_main_menu[plugin]=="article"){
				  $link_main__menu="dispatcher.php?page=article&main_menu_id=$rs_main_menu[main_menu_id]";
                  }else if($rs_main_menu[plugin]=="article_ge"){
				  	 $link_main__menu="dispatcher.php?page=article&main_menu_id=$rs_main_menu[main_menu_id]&article_ge=article_ge";
				  }else if($rs_main_menu[plugin]=="link"){
					 $link_main__menu="$rs_main_menu[main_menu_link]"; 
				  }else{
					 $link_main__menu="$rs_main_menu[plugin]";
				  }
					 
				?>
                	<li>
                    
                    	<a href="<?=$link_main__menu?>&name_title=<?=$rs_main_menu[main_menu_name]?>&member_user_url=<?=$_SESSION['member_user_url2']?>"><?=$rs_main_menu[main_menu_name]?></a>
                    </li>
                    <?
				}
					?>
                </ul>
                <br style="clear:both" />
         <span id="copy-right">  Copyright © 2005-2014 สนใจเว็บไชต์สวยราคาถูกบริการดีได้ที่ <a href="http://www.nn-it.com">nn-it.com</a> โทร. 080-992-6565(ห้างหุ้นส่วนจํากัด เอ็น เอ็น ไอที)</span>
            </div>
        </div>
    </div>
    <?
$total_items=$_SESSION['total_items'];
"$total_items";
?>
</body>
</html>
