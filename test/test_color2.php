<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template_Mweb_admin.dwt.php" codeOutsideHTMLIsLocked="true" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<link href="../css/style-v2.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="doctitle" -->
<script type="text/javascript">
function check()
{
	if(document.frm.bg[0].checked)
	{
		document.frm.background.value=document.frm.background_co.value;
	}
	else if(document.frm.bg[1].checked)
	{
		if(document.frm.background_im.value=="")
		{
			alert('��ҹ�ѧ��������͡�Ҿ�������繾����ѧ ��سҡ�Ѻ����͡��͹');
			document.frm.background_im.focus();
			return false;
		}
		document.frm.background.value=document.frm.background_im.value;
	}
}
function show(value)
{
	document.getElementById(value).style.visibility="visible";
	document.getElementById(value).style.display="block";
}
function hide(value)
{
	document.getElementById(value).style.visibility="hidden";
	document.getElementById(value).style.display="none";
}
</script>
<title>�к�������䫵�&nbsp;>&nbsp;�Ѵ�ٻẺ����ʴ���&nbsp;>&nbsp;�����ѧ�ͧ���䫵�</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<script type="text/javascript" src="../js/backend_function.js"></script>
<script type="text/javascript" src="../../igetweb/js/AC_RunActiveContent.js"></script>
<link href="../admin_style_igetweb.css" rel="stylesheet" type="text/css" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<style type="text/css">
.bg_dark {
	font-family: Tahoma, "MS Sans Serif";
	background-color: #ccc;
	font-size: 11px;
	font-weight: bold;
	color: #000;
	__background-image: url(../images/bg_tab.gif);
}
.bg_dark2 {
	font-family: Tahoma, "MS Sans Serif";
	background-color: #ccc;
	font-size: 11px;
	font-weight: bold;
	color: #000;
}
.bg_medium {
	font-family: Tahoma, "MS Sans Serif";
	background-color: #eee;
	font-size: 11px;
	color: #000;
	font-weight: bold;
}
.bg_light {
	font-family: Tahoma, "MS Sans Serif";
	background-color: #fff;
	font-size: 11px;
	color: #000000;
}
.bg_maxlight {
	font-family: Tahoma, "MS Sans Serif";
	font-size: 11px;
	color: #000000;
	background-color: #FFFFFF;
}
.border {
	border: 0px solid #03416f;
}
.border_p_t {
	border-top-width: 1px;
	border-right-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-right-style: solid;
	border-left-style: solid;
	border-top-color: #03416f;
	border-right-color: #03416f;
	border-left-color: #03416f;
	font-family: Tahoma, "MS Sans Serif";
	font-size: 11px;
	color: #000000;
}
.border_p_m {
	border-right-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-left-style: solid;
	border-right-color: #03416f;
	border-left-color: #03416f;
	font-family: Tahoma, "MS Sans Serif";
	font-size: 11px;
	color: #000000;
}
.border_p_b {
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-right-color: #03416f;
	border-bottom-color: #03416f;
	border-left-color: #03416f;
	font-family: Tahoma, "MS Sans Serif";
	font-size: 11px;
	color: #000000;
}
#cross-domain-connection { display: none; }
</style>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript">
	google.load("jquery", "1.4.2");
	google.setOnLoadCallback(function() {
		/** Keep back-end connection **/
		setInterval(function() {
			$.get('../noexpire.php?');
		}, 180000);

		/** Keep front-end connection using iframe **/
		$('body').append('<iframe id="cross-domain-connection">');
		$('#cross-domain-connection').attr({ 'src' : 'http://nongnuy.igetweb.com/modules/misc/noexpire.php', 'style' : 'display:none' });

	});
</script>

<!-- PNG FIX -->
<!--[if IE 6]>
<script src="/modules/share/scripts/DD_belatedPNG_0.0.7a-min.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="../js/jscolor/jscolor.js"></script>
<script src="/modules/share/scripts/colorpicker/js/colorpicker.js" type="text/javascript"></script>
<script src="/modules/share/scripts/thickbox/thickbox-compressed.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://igetweb.com/modules/share/scripts/thickbox/thickbox.css" type="text/css" />
<link rel="stylesheet" href="/modules/share/scripts/colorpicker/css/colorpicker.css" type="text/css" />

<script type="text/javascript" src="http://www.igetweb.com/modules/share/js/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.igetweb.com/modules/share/css/jquery.fancybox.css" media="screen" />

<!-- Font replacement -->
<script type="text/javascript" src="/igetweb/js/cufon/cufon-yui.js"></script>
<script type="text/javascript" src="/igetweb/js/cufon/supermarket_400.font.js"></script>
<script type="text/javascript">
	Cufon.replace('.font-replace');
</script>
<script type="text/javascript">
	$(function() {

		$('.save-action').click(function() {
			$(this).parents('form:first').submit();
			return false;
		});

		// hidden video tutor
		$('img[src$=tutor.gif]').parent().hide();

	});
</script>



</head>

<body onload="OpenCloseMenu('m2');"><div style="margin:0; padding:0; line-height:0;text-align:center;" id="igetweb-alexa">
	<a href="/igetweb/main/number-1.php" title="Number 1 website platform in Thailand"><img src="/igetweb/images/number-1-bar.png" alt="Number 1 website platform in Thailand" width="1010" border="0" /></a>
</div>
<table width="1010" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1"><img src="../images/banner_left_1.gif" width="1" height="100" /></td>
    <td width="8"><img src="../images/banner_left.gif" width="17" height="100" /></td>
    <td background="../images/banner_center.gif">
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="f12bbold">
  <tr>

  <td width="25%" rowspan="5" style="padding-right:5px;"><script type='text/javascript'>AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','250','height','100','src','../images/logo','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','../images/logo','wmode','transparent');</script></td>
	<td width="46%" height="20">�к������èѴ������䫵� &nbsp;&nbsp;&nbsp;ʶҹ����䫵� : <font style="color:#999999">
	  	  <span style="color:#48CD00;">���䫵��Դ�ӡ��</span>
	  	</font></td>
    <td width="29%" rowspan="4" valign="top" style="padding-bottom:5px;">

		<table width="100%" border="0" cellspacing="0" cellpadding="0">

	    <tr>
      <td width="32%" height="18">��鹷��</td>
      <td width="46%" valign="top">       <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td width="1"><img src="../images/status_bar_encap.gif" width="1" height="12" alt="" /></td>
          <td background="../images/status_bar_bg.gif" width="187"><img src="../images/status_green_bar.gif" width="0.79%" height="12" alt="0.79%"></td>
          <td width="1"><img src="../images/status_bar_encap.gif" width="1" height="12" alt="" /></td>
        </tr>

      </table></td>
      <td width="22%">&nbsp;&nbsp;10 MB.</td>
    </tr>
		    <tr>
      <td height="18">������</td>
      <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td width="1"><img src="../images/status_bar_encap.gif" width="1" height="12" alt="" /></td>

          <td background="../images/status_bar_bg.gif" width="187"><img src="../images/status_green_bar.gif" width="6.67%" height="12" alt="6.67%"></td>
          <td width="1"><img src="../images/status_bar_encap.gif" width="1" height="12" alt="" /></td>
        </tr>
      </table></td>
      <td>&nbsp;&nbsp;30 ����ͧ</td>
    </tr>
    <tr>
      <td height="18">Gallery</td>

      <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td width="1"><img src="../images/status_bar_encap.gif" width="1" height="12" alt="" /></td>
          <td background="../images/status_bar_bg.gif" width="187"></td>
          <td width="1"><img src="../images/status_bar_encap.gif" width="1" height="12" alt="" /></td>
        </tr>
      </table></td>
      <td>&nbsp;&nbsp;30 �ٻ</td>

    </tr>
    <tr>
      <td height="18">��纺���</td>
      <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td width="1"><img src="../images/status_bar_encap.gif" width="1" height="12" alt="" /></td>
          <td background="../images/status_bar_bg.gif" width="187"></td>
          <td width="1"><img src="../images/status_bar_encap.gif" width="1" height="12" alt="" /></td>

        </tr>
      </table></td>
      <td>&nbsp;&nbsp;30 ��з��</td>
    </tr>
						<tr>
      <td height="18">�к����ͧ������</td>
      <td colspan="2">&nbsp;<span style="color:#FF0000">����ͧ�Ѻ</span></td>

        </tr>
	  </table></td>
  </tr>

  <tr>
	<td height="20">�������䫵� : <font style="color:#999999">154055</font> &nbsp;���䫵� : <font style="color:#999999">���觷�ͧ�����</font></td>
  </tr>

  <tr>
	<td height="20">�ٻẺ���䫵� : <font style="color:#999999">
   <a href="../../igetweb/service/register.php" target="_blank"><span style="color:#ff0000;">���䫵��ѧ���ŧ����¹</span></a>&nbsp; ( Free Package )</td>
  </tr>
	<tr>
	<td height="20">���䫵����ŧ����¹ �ж١�ЧѺ��������͡�Թ���� <span class="f12r">26/07/2011 </span></td>

	</tr>
</table>	</td>
    <td width="10"><img src="../images/banner_right.gif" /></td>
    <td width="1"><img src="../images/banner_right_1.jpg" width="1" height="100" /></td>
  </tr>
</table>
<table width="1010" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1" bgcolor="#FFFFFF"></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">

      <tr>
        <td width="17"><img src="../images/bar1_left.gif" width="17" height="30" /></td>
        <td background="../images/bar1_center.gif"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="f12b">
            <tr>
              <td width="453">&nbsp;��鹷�������&nbsp;10&nbsp;MB.&nbsp;&nbsp;&nbsp;&nbsp;��鹷�����
          0.079 MB.&nbsp;&nbsp;&nbsp;&nbsp;��鹷����ҧ&nbsp;9.921&nbsp;MB.</td>

		  <td width="521" align="right"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="f12b">
		  <tr>
		  		  <td>&nbsp;</td>
		  			<td width="41%" align="right"><a href="../main/member_edit.php"><img src="../images/button_mem.gif" width="93" height="30" border="0" /></a><a href="../../support/free/" target="_blank"><img src="../images/button_help.gif" width="93" height="30" border="0" /></a></td>
		    </tr></table>
			</td>
			</tr>
		  </table></td>
        <td width="17"><img src="../images/bar1_right.gif" width="17" height="30" /></td>

      </tr>
    </table>
	      <table width="100%" border="0" cellspacing="0" cellpadding="0" background="../images/bar_center.gif">
        <tr>
          <td width="60%" class="f12wbold">&nbsp;&nbsp;<a href="http://nongnuy.igetweb.com" target="_blank"><font color="#FFFFFF">http://nongnuy.igetweb.com</a></td>
          <td width="37%" align="right"><!----><iframe src="../../truehitsstat.php?pagename=/backend/main/admin_main_background.php" width="14" height="17" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" allowtransparency="true"></iframe></td>
          <td width="3%" align="right"><img src="../images/txt_admin.gif" alt="" /></td>
        </tr>

      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="60%" height="30" background="../images/bar1_center.gif" class="f12bbold">&nbsp;&nbsp;&nbsp;&nbsp;<a href="../main/index.php" style="color: #CC0000">������䫵�</a>&nbsp;>&nbsp;�Ѵ�ٻẺ����ʴ���&nbsp;>&nbsp;�����ѧ�ͧ���䫵�</td>
          <td width="40%" background="../images/bar1_center.gif" style="text-align:right;">ŧ����¹���䫵���. 02-954-4566 & Email: info@igetweb.com&nbsp;<img src="../images/s_logout.gif" width="16" height="16" align="absmiddle" alt="Logout" />&nbsp;<a href="../logout.php?clear=true">�͡�ҡ�к�</a>&nbsp;&nbsp;&nbsp;</td>

        </tr>
      </table></td>
    <td width="1" bgcolor="#FFFFFF"></td>
  </tr>
</table><table width="1010" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1" bgcolor="#FFFFFF"></td>
    <td width="160"><img src="../images/box_head_1.gif" width="160" height="6" /></td>
    <td width="8"><img src="../images/body_h_left_1.gif" width="8" height="6" /></td>

    <td background="../images/body_h_center_1.gif"><img src="../../image/spacer.gif" width="100" height="1" /></td>
    <td width="8"><img src="../images/body_h_right_1.gif" width="8" height="6" /></td>
    <td width="1" bgcolor="#FFFFFF"></td>
  </tr>
</table>
<table width="1010" height="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="1" bgcolor="#FFFFFF"></td>
    <td width="160" valign="top" background="../images/bg_left.gif">
	<!-- S:Jumper -->

<link rel="stylesheet" href="../../modules/share/scripts/tooltip/jquery.tooltip.css" />
<script src="../../modules/share/scripts/tooltip/jquery.tooltip.js" type="text/javascript"></script>
<script language="JavaScript">
<!--
	$(function() {
		$('.tooltip_kw').tooltip({
			track: true,
			delay: 0,
			showURL: false,
			showBody: " - ",
			fade: 250
		});
	});
//-->
</script>
<script type="text/javascript">
	var openModal = function()
	{
		closeModal();
		var offset = $('#theJumper').offset();
		$('#jump-popup').css({ top: offset.top, left: (offset.left + 155) }).slideDown();
	}

	var closeModal = function()
	{

		$('#jump-popup').slideUp();
		$('#jump-inner').empty();
		return false;
	}

	$(document).ready(function() {

		// Read The Jumper
		var xml = $.ajax({
			url: '../jumper/xml.php',
			async: false
		}).responseXML;


		$('.op-close').bind('click', closeModal);

		$('.op-unsupported').live('click', function() {
			alert('package ���س��ҹ����ͧ�Ѻ');
			return false;
		});

		$('.op-fnc').live('click', function() {

			openModal();
			var fn = $(this).attr('rel');


				$('#jump-nav').html( fn );
				// S:Loop
				$(xml).find('module').each(function() {
					fnopen = $(this).attr('open');
					if (fnopen.match( fn ))
					{

						li = document.createElement('li');

						a = document.createElement('a');
						$(a).attr({ href: 'javascript:void(0);', rel: '{ op: \' ' + fn + ' \', mo: \' ' + $(this).attr('mo') + ' \'}' }).text( $(this).attr('name_th') );
						$(a).addClass('op-url');

						li.appendChild(a);
						$('#jump-inner').append(li);
					}

				// E:Loop

			});
			return false;
		});


		$('.op-url').live('click', function() {
			openModal();
			var params = eval( "(" + $(this).attr('rel') + ")" );


				module = $(xml).find('[module[mo="' + $.trim(params.mo) + '"]').attr('name_th');
				$('#jump-nav').html( "<a href='javascript:void(0)' class='op-fnc' rel='"+ $.trim(params.op) +"'>" + params.op + "</a> &gt; " + module );

				pattern = 'module[mo="' + $.trim(params.mo) + '"] link[operation="' + $.trim(params.op) + '"]';
				$(xml).find(pattern).each(function() {
					li = document.createElement('li');
					a = document.createElement('a');
					$(a).attr({ href: $(this).attr('url') }).text( $(this).attr('description_th') );
					li.appendChild(a);
					$('#jump-inner').append(li);
				});

			return false;
		});

	});
</script>
<style type="text/css">
#tooltip {
	width: 400px;
}
</style>
<div style="padding: 3px;" align="center">
	<span class="tooltip_kw" title="<span style='font-size:15px;line-height:20px;'>
<strong>iJump</strong> ��� ��Ǫ��·������س������ �Ѵ��÷ء�к���ҧ� �����ҧ���´��
�¤س����ö���� ������/�ٻ�Ҿ �������к���ҧ� ���¡�á������� Add ��зӡ�� ���/ź ���¡��
�������� Edit ��ͨҡ��� iJump �зӡ�� �ʴ��к� ��� �ѧ���� �����ҹ ����� ����ӴѺ ���;Ҥس
����˹�ҷ���ͧ��� �����ҧ�дǡ��� �Ǵ���� ��л����Ѵ���Ңͧ�س㹡�����ҧ��ä����䫵�
</span>"><img src="../images/jumper_logo.jpg" width="144" height="35" alt=""></span>
	<div id="theJumper">
		<span id="jumper-add"><a href="javascript:void(0);" class="op-fnc" rel="add">ADD</a></span>

		<span id="jumper-edit"><a href="javascript:void(0);" class="op-fnc" rel="edit">EDIT</a></span>
		<span id="view-site"><a href="http://nongnuy.igetweb.com?sync=true" target="_blank">View Site</a></span>
				<!-- <span id="edit-site"><a href="http://nongnuy.igetweb.com" target="_blank">Edit Site</a></span> -->
	</div>

	<div id="jump-popup" style="display:none;text-align:left;">
		<h3><a href="#" class="op-close"><img src="../images/jumper_close.png" alt="Close" border="0" /></a></h3>
		<span id="jump-nav">Navigator</span>

		<ul id="jump-inner">

		</ul>
		<div class="clear-all"></div>
	</div>
</div>
<!-- E:Jumper -->
<div id="backendleftmenu-top"></div>
		<div class="ShowMenu" id="mmain">
						<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../../igetweb/service/register.php" target="_blank" class="menuleft">��鹵͹ŧ����¹���䫵�</a></div>

            			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../../support/index.php" target="_blank" class="menuleft">�йӡ�����ҧ���䫵�</a></div>
            			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../main/index.php" class="menuleft">˹���á�к�������</a></div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../main/member_edit.php" class="menuleft">��䢢�������Ҫԡ</a></div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../main/admin_main_header.php" class="menuleft">��������ѡ���䫵�</a></div>
						<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../main/admin_close_web.php" class="menuleft">�Դ/�Դ���䫵�</a></div>

                    </div>
        		<div id="firstpage-header" class="backendleftmenu-header"><img src="../images/s_home.gif" align="absmiddle" alt="" />&nbsp;<a href="javascript:OpenCloseMenu('mhome');" class="mainmenu"><strong>������˹���á���䫵�</strong></a></div>
		<div class="ShowMenu" id="mhome">
						<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../main/pageintro_list.php" class="menuleft">Page Intro</a></div>
							<!--<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../layout/admin_select_layout.php" class="menuleft">���͡ Layout ˹���á</a></div>-->
				<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../layout/admin_index_layout.php" class="menuleft">�ӴѺ����ʴ���˹���á</a></div>

				<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../layout/admin_select_frame.php" class="menuleft">���͡�ٻẺ Title</a></div>
				<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../layout/apperance.php" class="menuleft">����ʴ����ٻ�Ҿ</a></div>
						</div>
				<div id="display-header" class="backendleftmenu-header"><img src="../images/s_interface.gif" align="absmiddle" alt="" />&nbsp;<a href="javascript:OpenCloseMenu('m2');" class="mainmenu"><strong>�Ѵ�ٻẺ����ʴ���</strong></a></div>
		<div class="ShowMenu" id="m2">
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../main/select_tem_modern.php" class="menuleft">���͡ Template</a></div>

						<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../main/admin_logo.php" class="menuleft">Logo �ͧ���䫵�</a></div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../main/celebrate_banner.php" class="menuleft">ẹ�����ȡ��</a></div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../main/admin_main_background.php" class="menuleft">�����ѧ�ͧ���䫵�</a></div>
								</div>
				<div id="menu-header" class="backendleftmenu-header"><img src="../images/s_menu.gif" align="absmiddle" alt="" />&nbsp;<a href="javascript:OpenCloseMenu('m20');" class="mainmenu"><strong>���������٢ͧ���䫵�</strong></a></div>

		<div class="ShowMenu" id="m20">
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../main/admin_main_menu.php" class="menuleft">������������ѡ��ҹ��</a></div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../main/admin_bottom_menu.php" class="menuleft">���������ٴ�ҹ��ҧ</a></div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../main/admin_leftmenu.php" class="menuleft">���������ٴ�ҹ��ҧ</a></div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../main/manage_box.php" class="menuleft">�������ç���ҧ ����/���</a></div>

		</div>
				<div id="filemanager-header" class="backendleftmenu-header"><img src="../images/memregister.gif" align="absmiddle" alt="" />&nbsp;<a href="javascript:OpenCloseMenu('mfilemanager');" class="mainmenu"><strong>����������Ѿ��Ŵ</strong></a></div>
		<div class="ShowMenu" id="mfilemanager">
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="#" onclick="window.open('../../WEBFMG/index.php?upload=1309098805','filemanager','location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=0,width=950,height=570');" class="menuleft">����������Ѿ��Ŵ</a></div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../report/filemanager_log.php" class="menuleft">��������������١ź</a></div>
		</div>

				<div id="websitemanage-header" class="backendleftmenu-header"><img src="../images/memregister.gif" align="absmiddle" alt="" />&nbsp;<a href="javascript:OpenCloseMenu('m1');" class="mainmenu"><strong>�к��Ѵ������䫵�</strong></a></div>
		<div class="ShowMenu" id="m1">
		
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../main/admin_contact.php" class="menuleft">������˹�ҵԴ������</a></div>
		</div>
				<div id="seo-header" class="backendleftmenu-header"><img src="../images/icon_seo.gif" align="absmiddle" alt="" />&nbsp;<a href="javascript:OpenCloseMenu('mseo');" class="mainmenu"><strong>�к� SEO</strong></a></div>
		<div class="ShowMenu" id="mseo">
						<div>&nbsp;<span style="color:#FF0000;"> package �ͧ�س�ѧ����ͧ�Ѻ</span></div>

					</div>
				<div id="article-header" class="backendleftmenu-header"><img src="../images/article.gif" align="absmiddle" alt="" />&nbsp;<a href="javascript:OpenCloseMenu('m6');" class="mainmenu"><strong>�к�������/������</strong></a></div>
		<div class="ShowMenu" id="m6">
			<div class="f12bbold">��������Ǵ���躷����</div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../article/from_catarticle.php" class="menuleft">������Ǵ���躷����</a></div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../article/catarticle_main.php" class="menuleft">���/ź��Ǵ���躷����</a></div>

			<div class="f12bbold">�����ú�����</div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../article/article_add.php" class="menuleft">����������/������</a></div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../article/article_main.php" class="menuleft">���/ź ������/������</a></div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../article/admin_select_form.php" class="menuleft">�ٻẺ����ʴ�������</a></div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../article/article_change_cat.php" class="menuleft">������Ǵ���躷����/������</a></div>

			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../article/comment.php" class="menuleft">�����ä����Դ���</a></div>
		</div>
				<div id="gallery-header" class="backendleftmenu-header"><img src="../images/gphoto.gif" align="absmiddle" alt="" />&nbsp;<a href="javascript:OpenCloseMenu('m5');" class="mainmenu"><strong>�к� Gallery</strong></a></div>
		<div class="ShowMenu" id="m5">
								<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../gallery/admin_gallery_editcat.php" class="menuleft">�����������´ Gallery</a></div>
								<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../gallery/admin_add_image.php?img" class="menuleft">�����ٻ�Ҿ����</a></div>

			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../gallery/admin_main_image.php" class="menuleft">����ٻ�Ҿ</a></div>
						<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../gallery/layout.php?igetweb" class="menuleft">�ٻẺ����ʴ� Gallery</a></div>
					</div>
				<div id="news-header" class="backendleftmenu-header"><img src="../images/news.gif" align="absmiddle" alt="" />&nbsp;<a href="javascript:OpenCloseMenu('mnews');" class="mainmenu"><strong>�к�����������䫵�</strong></a></div>
		<div class="ShowMenu" id="mnews">
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../news/add_news_form.php?post=insert" class="menuleft">�����������</a></div>			
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../news/index.php" class="menuleft">���/ź �������</a></div>

			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../news/admin_select_form.php" class="menuleft">�ٻẺ����ʴ��������</a></div>
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../news/comment.php" class="menuleft">�����ä����Դ���</a></div>
		</div>
				<div id="webboard-header" class="backendleftmenu-header"><img src="../images/webboard.gif" align="absmiddle" alt="" />&nbsp;<a href="javascript:OpenCloseMenu('m7');" class="mainmenu"><strong>�к���纺���</strong></a></div>
		<div class="ShowMenu" id="m7">
			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../webboard/webboard.php" class="menuleft">���/ź��з��</a></div>

			<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../webboard/webboard_answer.php" class="menuleft">���/ź�����Դ���</a></div>
						<div><img src="../images/icon.gif" align="absmiddle" alt="" /> <a href="../webboard/webboard_system.php" class="menuleft">��駤�ҡ����ҹ</a></div>
		</div>
				<div id="special-header" class="backendleftmenu-header"><img src="../images/icon_special.gif" align="absmiddle" alt="" />&nbsp;<a href="javascript:OpenCloseMenu('mspecial');" class="mainmenu"><strong>�١��蹾����</strong></a></div>
		<div class="ShowMenu" id="mspecial">
									<div>&nbsp;<span style="color:#FF0000;"> package �ͧ�س�ѧ����ͧ�Ѻ</span></div>

					</div>
				<div id="logout-header" class="backendleftmenu-header"><img src="../images/s_logout.gif" align="absmiddle" alt="" />&nbsp;<a href="../logout.php" class="mainmenu"><strong>�͡�ҡ�к�</strong></a></div>
		<div id="backendleftmenu-bottom"></div>
<div id="backendleftmenu-manual"><a href="../upgrade/index.php" class="mainmenu" target="_blank"><img src="../images/icon_upgrade.jpg" border="0" alt="" /></a>
<br /><br /><a href="../main/manual.php" class="mainmenu" target="_blank"><img src="../images/download_manual_2.gif" border="0" alt="" /></a><br /><a href="../main/manual.php?type=pdf" class="mainmenu" target="_blank" title="Download pdf file">PDF</a> | <a href="../main/manual.php?type=rar" class="mainmenu" target="_blank" title="Download rar file">RAR</a></div>
    </td>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">

      <tr>
        <td width="8"><img src="../images/body_h_left.gif" width="8" height="27" /></td>
        <td background="../images/body_h_center.gif">&nbsp;</td>
        <td width="8"><img src="../images/body_h_right.gif" width="8" height="27" /></td>
      </tr>
      <tr>
        <td width="8" background="../images/body_left.gif"><img src="../images/body_left.gif" /></td>
        <td style="height:auto;"><style type="text/css">#feedback {	position: absolute;	width: 830px;	text-align: right;	padding: 3px 2px 0px 0px;}</style><div id="feedback">	<script type="text/javascript"> 		var domain = "igetweb.com";		var user_id = "154055";		var url = "http://nongnuy.igetweb.com";	</script>	<script src="http://www.golfoneclick.com/feedbacks/widgets.js"></script>	<span class="google-plus-one" style="display:block;margin:1px 0 0 3px;float:right;">		<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>		<g:plusone size="medium" href="http://www.igetweb.com" count="false"></g:plusone>	</span></div><!-- InstanceBeginEditable name="EditRegion1" -->

<script type="text/javascript">
$(function() {

	// Color Picker
	$('#colorSelector').ColorPicker({
		color: '#0000ff',
		onShow: function (colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			$('#colorSelector div').css('backgroundColor', '#' + hex);
			$('#background_co').val('#' + hex);
		}
	});

});
</script>
<br />
<table width="95%" border="0" align="center">
  <tr>
    <td width="80%" valign="top">
        <div class="tips" style="width:580px;">
            <p><strong>���й�</strong></p>
            <ul class="tips-ul">
                <li>�����ѧ�ͧ���䫵� ��� �������ٻ�Ҿ ����ʴ������ҹ��ѧ�ͧ˹�����䫵� �¨��ʴ�㹷ء�˹�Ңͧ���䫵�</li>

            </ul>
            <p><strong>�����˵�</strong></p>
            <ul class="note-ul">
                <li>����ͷ�ҹ�ӡ������¹�����ѧ���䫵����º�������� ��سҡ� Ctrl+F5 ��� keyboard ���ʹپ����ѧ���䫵�����ش</li>
                <li>��ҹ��ͧ���͡�����繾����ѧ (�վ���������Ǵ���) �������ٻ�繾����ѧ�����ҧ˹�����ҧ���ҹ��</li>
            </ul>
        </div>

    </td>
    <td width="20%" align="center"><a href="../ex.php" target="_blank"><img src="../images/ex_background.gif" border="0" alt="������ҧ�����ѧ�ͧ���䫵�"></a><br><a href="../../support/free/data/HowToEditBgWebsite.htm" target="_blank"><img src="../images/vdo_tutor.gif" border="0" alt="Video Tutor"></a></td>
  </tr>
</table>
<div class="generic-white-box">
    <div id="wrapper-header">
        <div id="info-image">
            <span>&nbsp;</span>
        </div>
        <div id="info-title">

            <span>�����ѧ�ͧ���䫵�</span>
        </div>
        <div id="info-navi">
            <span>�Ѵ�ٻẺ����ʴ���&nbsp;>&nbsp;�����ѧ�ͧ���䫵�</span>
        </div>
    </div>
	  <form action="admin_main_background.php" method="post" enctype="multipart/form-data" name="frm" id="frm" onSubmit="return check()">

		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
			<td width="40%" valign="middle" class="f12bbold" ><div style="padding-left: 270px;"><input name="bg" type="radio"  onclick="show('bg_co');hide('bg_im');" value="co" checked="checked" onChange="show('bg_co');hide('bg_im');"/>
			�����繾����ѧ</div></td></tr>
			  <tr>
			<td width="50%" align="center" valign="middle" class="f12bbold">
				<div id="bg_co" style="visibility:hidden">
			<div id="colorSelector"><div style="background-color: ;" class="png-fix"></div>

<input type="hidden" name="background_co" id="background_co" value="" class="clear-style-input" /></div>			</div>					</td>
		  </tr>
		  <tr>
			<td valign="middle" class="f12bbold" ><div style="padding-left: 270px;">
			  <input name="bg" type="radio" value="im" onclick="show('bg_im');hide('bg_co');" onChange="show('bg_im');hide('bg_co');" checked="checked" />
			���ٻ�繾����ѧ</div></td>
		  </tr>
			  <tr>

			<td align="center" valign="middle" class="f12bbold"><div  id="bg_im"style="visibility:hidden"><br />
			<img src="../../www/nongnuy/">			<br><br>
			<input name="background_im" type="file" id="background_im" size="50" />
			<br>
�ٻ�Ҿ����������ٻ�Ҿ����չ��ʡ��  .JPG, .GIF ����բ�Ҵ�������Թ  80 KB.<br /><br /></div></td>
		  </tr>
			<script>show('bg_im')</script>			</table>

            	<div style="width:100%; text-align:center;">
                <br /><br />
				<input name="save" type="hidden" value="save">
				<input name="background" type="hidden" id="background" value="">
				<input type="image" name="submit" src="../images/btn_save.gif" alt="�ѹ�֡" align="absmiddle">
				                <br /><br />
                </div>
		 </form>
        </div>

		<br /><br />
<!-- InstanceEndEditable -->
</td>
        <td width="8" background="../images/body_right.gif"><img src="../images/body_right.gif" /></td>
      </tr>
      <tr>
        <td width="8"><img src="../images/body_b_left.gif" width="8" height="18" /></td>
        <td background="../images/body_b_center.gif"></td>
        <td width="8"><img src="../images/body_b_right.gif" width="8" height="18" /></td>
      </tr>

    </table>
    </td>
    <td width="1" bgcolor="#FFFFFF"></td>
  </tr>
</table>
<table width="1010" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1" bgcolor="#FFFFFF"></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>

            <td height="18" background="../images/bar_center.gif" style="color:#ffffff;text-align:center;">Copyright 2005-2011 iGetWeb.com</td>
          </tr>
        </table>
    </td>
    <td width="1" bgcolor="#FFFFFF"></td>
  </tr>
</table></body>
<!-- InstanceEnd --></html>