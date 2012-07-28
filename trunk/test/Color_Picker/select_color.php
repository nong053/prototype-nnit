<html>
<head>
<title>JavaScript Tips - Color Picker</title>
<meta name="TITLE" content="theOpenSourcery.com">
<meta name="Description" content="Software development site for design, discussion, links, reviews, tutorials ">
<meta name="author" content="JBSurveyer">
<meta name="keywords" content="software, tutorial,JavaScript, dates, date functions, examples">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 <link rel='stylesheet' type='text/css' href='osstyle.css'>
<!-- Link script file to the HTML document in the header -->
<script language=JavaScript src="javascript/picker.js"></script>

</head>

<body bgcolor="#CCCCCC" text="#000000" >
<table cellpadding="0" cellspacing="0">
  <tr> 
    <td width="55"><img src="images/jslogo.gif" width="55" height="45"></td>
    <td width="1658"><strong><font size="6" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;JavaScript
      Components: Color Picker</font></strong></td>
  </tr>
  <tr> 
    <td valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td>&nbsp;</td>
        </tr>

  
    </table></td>
    <td valign="top"> <p><font face="Arial, Helvetica, sans-serif" size="2"> <font size="3"><b>Picking
              up Colors </b><font face="Arial, Helvetica, sans-serif" size="4"><b><br>
        Credit: </b></font><b> <a href="http://softcomplex.com/" target="_blank">SoftComplex</a><br>
        </b></font><br>
        <b><font size="3">Description</font></b><font size="3"><br>

        .In some applications having to pick colors either requires inspired
        guessing, great memory or running all over the place. That is why it
        is very handy to have this components to store user selected color choice
        data. <br>
        <br>
        <b>Key features and JavaScript elements</b><br>
        Uses CSS and pop-up windows to build up color picker - the technology
        is much like a calendar component.. The color picker  component automatically
        fills in the associated form field. There are 3 major parts to the color
        picker component:</font></font></p>
      <p><font size="3" face="Arial, Helvetica, sans-serif">picker.js - the driver
          javascript code that goes in the root our jvascript directory (we use
          the latter here);     
		  <br>picker.html - contains the popup window code that displays the different color palettes<br>
		  sel.gif - the color picker icon which( we have renamed it cpiksel.gif
		  and put itin our images directory).

</font></p>
      <p><font size="3" face="Arial, Helvetica, sans-serif">To use the color
          picker is a three step process. <br>
          1) add, the following code to the
      &lt;head&gt; of your web page:<br>
        <em>&nbsp;&nbsp;&lt;script language=JavaScript src="javascript/picker.js" &gt;&lt;/script&gt;</em><br>
2)When you create your<em> form </em> be sure to give it a unique name: <em> &lt;form
name=&quot;someUniqueName&quot;&gt;</em><br>

3)For the input field, also give it a unique field name because that is what
will be passed to the color picker. <br>
4)Finally place the color picker icon image
 right next to the input text field with the correct call. Here is
the coding:<br>
&nbsp;&nbsp;<em>&lt;form name='tcp_test'&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type='text' name=&quot;input0' value=&quot;#FFFFFF&quot;&gt; <br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href='javascript:TCP.popup(document.tcp_test.input0,1)'
&gt;&lt;img src='images/cpiksel.gif'&gt;&lt;/a&gt;</em></font></p>
      <p><font size="3" face="Arial, Helvetica, sans-serif">By putting the
            icon image inside a link reference,<em> &lt;a&gt; , </em>one guarantees
            that the mouse cursor will change to a pointer hand when the mouse
            hovers over the icon. Otherwise using an onClick event inside the
            &lt;img&gt; tag would work just as well as we show in our second example.
            The only thing missing in this color picker is a suggestion of what
            color has been chosen. Otherwise the code is freely available from
            <a href="http://softcomplex.com" target="_blank">Tigra/SoftComplex</a> . </font></p></td>

  </tr></table>
 <table  cellspacing="1" width="95%" border="0">
		<tr><th colspan="2" >Try out the script with this demo form</td></tr>
		<!-- Make sure you have valid named HTML form -->
		<form name="tcp_test">
		<tr>
			<td valign="top" nowrap>Select color from Web safe palette:</td>
			<td   valign="top">

			<!-- Add input box to the form -->
			<input type="Text" name="input0">
			<!--
				Put icon by the input control.
				Make it the link calling picker popup.
				Specify input object reference as first parameter to the function and palete selection as second.
			-->
			<a href="javascript:TCP.popup(document.forms['tcp_test'].elements['input0'])"><img width="15" height="13" border="0" alt="Click Here to Pick up the color" src="images/cpiksel.gif"></a>
		</td>
		</tr>
		<tr>
			<td   valign="top" nowrap>Select color from Windows system palette; converted
			  to onClick so cursor does<br> 
			  NOT change when hovering over color picker
			  icon.</td>

			<td   valign="top">
			<input type="Text" name="input1">
			<img width="15" height="13" border="0" alt="Click Here to Pick up the color" src="images/cpiksel.gif" onClick="javascript:TCP.popup(document.forms['tcp_test'].elements['input1'], 1)">
			</td>
		</tr>
		<tr>
			<td   valign="top" nowrap>Select color from grayscale palette:	</td>
			<td   valign="top">

			<input type="Text" name="input2">
			<a href="javascript:TCP.popup(document.forms['tcp_test'].elements['input2'], 2)"><img width="15" height="13" border="0" alt="Click Here to Pick up the color" src="images/cpiksel.gif"></a>
			</td>
		</tr>
		<tr>
			<td   valign="top" nowrap>Picker reads initial value from the input; simplified
			  reference to input field </td>
			<td   valign="top">
			<input type="Text" name="input3" value="#DBEAF5">

			<a href="javascript:TCP.popup(document.tcp_test.input3,1)"><img width="15" height="13" border="0" alt="Click Here to Pick up the color" src="images/cpiksel.gif"></a>
			</td>
		</tr>
		</form>
</table>
 
  <table>
  <tr>
    <td width="6" valign="top">&nbsp;</td>
    <td valign="top"><hr><a href="#">Top of Page</a>&nbsp;&nbsp;<a href="ostutor.htm#js">Tutorials 
      Home</a>&nbsp;&nbsp;<a href="linksjs.htm" target="_top">Javascript References</a>&nbsp;&nbsp;<a href="osbkjs.htm" target="_top">JavaScript
      Books</a></td>

  </tr>
</table>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-4281076-1");
pageTracker._initData();
pageTracker._trackPageview();
</script></body>
</html>
