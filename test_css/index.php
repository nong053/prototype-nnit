<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<title>jQuery slideViewer 1.2</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content=" "/>
<meta name="keywords" content=" " />

<style type="text/css">
* {margin: 0; padding: 0;}
p a {color: #ff0000;}
a:focus {outline:none;}
h3, h2 {padding: 1em 0 0.8em 0; border-bottom: 1px solid silver; margin: 0 0 1em 0;}
h4 {font: normal 1.3em Arial; padding: 1.2em 0 0 0; border-top: 1px solid #ff0000; margin: 2em 0 1em 0;}
h5 {font: bold 1 Verdana; padding: 1.2em 0 0 0; margin-top: 2em; color: #ff0000;}
body {
font-family: Verdana, sans-serif;
text-align: center;
margin: 0 0 6em 0;
padding: 0;
background: #fff url(../images/page-bg.jpg) center 20px no-repeat;
color: black;
font-size: 62.5%; 						
}
#wrapp {
width: 710px;
text-align: left;
font-size: 1.1em;
margin: 1em auto;
padding: 1em;
color: black;
}

/* slideViewer 1.0 default styles */
.svw {width: 50px; height: 20px; background: #fff;}
.svw ul{position: relative; left: -999em;}

.stripViewer { /* this is the DIV container for your UL of images */
position: relative;
overflow: hidden; 
border: 5px solid #ff0000; /* this is the border. should have the same value for the links */
margin: 0 0 1px 0;
}
.stripViewer ul { /* this is your UL of images */
position: relative;
left: 0;
top: 0;
width: 1%;
list-style-type: none;
}
.stripViewer ul li { /* each image is arranged horizontally */
float:left;
}
.stripTransmitter { /* this is the DIV for your transmitter (the UL generated at run time that commands the list)*/
overflow: auto;
width: 1%;
}
.stripTransmitter ul { /* the auto-generated set of links */
position: relative;
list-style-type: none;
}
.stripTransmitter ul li{ /* in this list too, each LI is arranged horizontally */
width: 20px;
float:left;
margin: 0 1px 1px 0;
}
.stripTransmitter a{ /* the links. */
font: bold 10px Verdana, Arial;
text-align: center;
line-height: 22px;
background: #ff0000;
color: #fff;
text-decoration: none;
display: block;
}
.stripTransmitter a:hover { /* hover */
background: #c50000;
color: #fff;
}
.stripTransmitter a.current, .stripTransmitter a.current:hover { /* current */
background: #fff;
color: #ff0000;
}
/* end slideViewer default styles */

p {padding: 2em 0 0 0;}

code {
width:93%;	
font: normal 1em/1.3em 'Courier New', Courier, Fixed;
color: #000;
display: block;
padding: 0;
margin: 0;
background-color: #fff;
white-space: pre;
overflow-x: auto;
}

.tooltip
{
padding: 0.5em;
background: #fff;
color: #000;
border: 5px solid #dedede;
}


</style>


<script type="text/javascript" src="jquery-1.5.min.js"></script>
<script src="jquery.easing.1.3.js" type="text/javascript"></script>

<script src="jquery.slideviewer.1.2.js" type="text/javascript"></script>
<!-- Syntax hl -->
<script src="http://www.gcmingati.net/wordpress/wp-content/themes/giancarlo-mingati/js/jquery-syntax/jquery.syntax.min.js" type="text/javascript" charset="utf-8"></script>



<script type="text/javascript">
$(window).bind("load", function() {
	$("div#mygaltop").slideView({toolTip: true, ttOpacity: 0.5});	
	$("div#mygalone").slideView(); //if leaved blank performs the default kind of animation (easeInOutExpo, 750)
	$("div#mygaltwo").slideView({
		easeFunc: "easeInOutBounce",
		easeTime: 2200,
		toolTip: true
	}); 
	$("div#mygalthree").slideView({
		easeFunc: "easeInOutSine",
		easeTime: 500,
		uiBefore: true,
		ttOpacity: 0.5,
		toolTip: true
	});
});

$(function(){
$.syntax({root: 'http://www.gcmingati.net/wordpress/wp-content/themes/giancarlo-mingati/js/jquery-syntax/'});
});

</script>
</head>
<body>
<div id="wrapp">
<h2 style="letter-spacing: -1px;">slideViewer (a jQuery image slider built on a <em>single</em> unordered list) 1.2</h2>

<div id="mygaltop" class="svw">
	<ul>
		<li><img alt="new Mikado logo 600 3D"  src="picts/14.jpg" /></li>
		<li><img alt="Bell 412"  src="picts/01.jpg" /></li>
		<li><img alt="Four bladed MaxiR with Bell 427 semiscale fuselage"  src="http://www.gcmingati.net/wordpress/wp-content/uploads/maxirbell42703.jpg" /></li>
		<li><img alt="MaxiR Bell 427"  src="http://www.gcmingati.net/wordpress/wp-content/uploads/maxirbell42702.jpg" /></li>
		<li><img alt="Sikorsky S-76 full-scale"  src="picts/09.jpg" /></li>
		<li><img alt="Jetcopter SX turbine r/c heli"  src="picts/10.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>

		<li><img alt="Mikado logo-14 front-view"  src="picts/12.jpg" /></li>
		<li><img alt="Mikado logo-14"  src="picts/13.jpg" /></li>
		<li><img alt="Sikorsky S-76 full-scale"  src="picts/09.jpg" /></li>
		<li><img alt="Jetcopter SX turbine r/c heli"  src="picts/10.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="Mikado logo-14 front-view"  src="picts/12.jpg" /></li>
		<li><img alt="Mikado logo-14"  src="picts/13.jpg" /></li>
	</ul>
</div>

<br />
<p style="margin-top: 3em;">Download <a id="kkk" href="jquery.slideviewer.1.2.js" title="get jquery.slideviewer.1.2">slideViewer 1.2</a> (last updated july 9 2010)</p>

<p><b>What's this?</b> slideViewer is a lightweight (3.5Kb) jQuery plugin wich allows to instantly create an image gallery by writing <b>just few lines</b> of HTML such as <b>an unordered list</b> of images:</p>

<pre class="syntax brush-html">
&lt;div id=&quot;mygalleryinpost10.12.2006&quot; class=&quot;svw&quot;&gt;
	&lt;ul&gt;
		&lt;li&gt;&lt;img src=&quot;picts/10.jpg&quot; alt=&quot;my description for this image&quot; /&gt;&lt;/li&gt;		
		&lt;li&gt;&lt;img src=&quot;picts/08.jpg&quot; alt=&quot;this is my dog...&quot; /&gt;&lt;/li&gt;		
		&lt;li&gt;&lt;img src=&quot;picts/03.jpg&quot; alt=&quot;my dog eating the cat&quot; /&gt;&lt;/li&gt;		
		&lt;li&gt;&lt;img src=&quot;picts/05.jpg&quot; alt=&quot;my r/c helicopter crashing...&quot; /&gt;&lt;/li&gt;		
		&lt;!--eccetera--&gt;

	&lt;/ul&gt;
&lt;/div&gt;
</pre>


<p><b>slideViewer</b> checks for the number of images within your list, and dinamically creates a set of links to command (slide) you pictures. Also, clicking on each image will make the gallery slide forward or backward, <strong>depending on the area you are clicking</strong> (eg: clicking the left part of a picture will move the slides backward, and viceversa for the right part of the picture).</p> 
<p>You can optionally customize the <b>kind</b> of animation and its <b>duration</b> and also <b>enhance(*)</b> the default tooltips with some fancy <b>tooltips</b>.</p>

<p>You can choose where to put the user interface (the numbered links); it can be above or below your set of images.</p>
<p>You don't need to specify the <b>width</b> and <b>height</b> for your images (but all the images within a single gallery <b>must have</b> the same width/height!) because slideViewer automatically checks for the size and renders accordingly. But if you can't live without declaring your images size, slideViewer  <b>will use</b> your declared dimensions. Pretty flexible.</p>
<p><b>How many galleries per page?</b> As much as you like. slideViewer will instantly create a gallery for each list of images you wish to render as a gallery. This may be useful to instantly create a gallery within <a  href="http://www.gcmingati.net/wordpress/2007/09/12/seeing-it-burn-gives-me-the-chills/" title="see how slideViewer is integrated in a blog post"><b>one or more posts</b> in a blog.</a></p>

<p><b>Installation</b> is preatty easy. slideViewer <b>requires</b> <a href="http://jquery.com" title="jQuery. Write less, do more.">jQuery 1.4.1</a> and the <a href="http://gsgd.co.uk/sandbox/jquery.easing.php" title="jq easing plugin">jQuery easing.1.2</a> plugin to work:</p>

<pre class="syntax brush-html">
&lt;script src=&quot;jquery-1.4.1.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;

&lt;script src=&quot;jquery.easing.1.2.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;jquery.slideviewer.1.2.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
</pre>

<p><b>Optional enhanced toolTips:</b> adding fancy toolTips to your galleries is pretty easy, just add <strong>toolTip: true</strong> as illustrated below.</p>

<p><b>slideViewer's basic CSS:</b></p>
<pre class="syntax css">
/*preload classes*/
.svw {width: 50px; height: 20px; background: #fff;}
.svw ul {position: relative; left: -999em;}

/*core classes*/
.stripViewer { 
position: relative;
overflow: hidden; 
border: 5px solid #ff0000;  
margin: 0 0 1px 0;
}
.stripViewer ul { /* this is your UL of images */
margin: 0;
padding: 0;
position: relative;
left: 0;
top: 0;
width: 1%;
list-style-type: none;
}
.stripViewer ul li { 
float:left;
}
.stripTransmitter {
overflow: auto;
width: 1%;
}
.stripTransmitter ul {
margin: 0;
padding: 0;
position: relative;
list-style-type: none;
}
.stripTransmitter ul li{
width: 20px;
float:left;
margin: 0 1px 1px 0;
}
.stripTransmitter a{
font: bold 10px Verdana, Arial;
text-align: center;
line-height: 22px;
background: #ff0000;
color: #fff;
text-decoration: none;
display: block;
}
.stripTransmitter a:hover, a.current{
background: #fff;
color: #ff0000;
}

/*tooltips formatting*/
.tooltip
{
padding: 0.5em;
background: #fff;
color: #000;
border: 5px solid #dedede;
}
</pre>
<p><b>Setup:</b> create a DIV with an <b>unique ID</b> and <b>class=&quot;svw</b>&quot; and inside that DIV, create a list of images (an unordered list):</p>

<pre class="syntax brush-html">
&lt;div id=&quot;mygalone&quot; class=&quot;svw&quot;&gt;
	&lt;ul&gt;
		&lt;li&gt;&lt;img alt=&quot;abc defrg thysu ooip jkifbtg fff&quot;  src=&quot;picts/01.jpg&quot; /&gt;&lt;/li&gt;

		&lt;li&gt;&lt;img alt=&quot;abc defrg thysu ooip jkifbtg fff&quot;  src=&quot;picts/02.jpg&quot; /&gt;&lt;/li&gt;		
		&lt;li&gt;&lt;img alt=&quot;abc defrg thysu ooip jkifbtg fff&quot;  src=&quot;picts/03.jpg&quot; /&gt;&lt;/li&gt;

		&lt;li&gt;&lt;img alt=&quot;abc defrg thysu ooip jkifbtg fff&quot;  src=&quot;picts/04.jpg&quot; /&gt;&lt;/li&gt;
		&lt;!-- eccetera --&gt;
		&lt;li&gt;&lt;img alt=&quot;abc defrg thysu ooip jkifbtg fff&quot;  src=&quot;picts/15.jpg&quot; /&gt;&lt;/li&gt;

	&lt;/ul&gt;
&lt;/div&gt;	
</pre>
<p><b>Ready to fly in 10 seconds!</b> Now that we have our list ready, let's make it slide! </p>
<pre class="syntax javascript">
&lt;script type=&quot;text/javascript&quot;&gt;
	$(window).bind(&quot;load&quot;, function() {
	$(&quot;div#mygalone&quot;).slideView()
});

&lt;/script&gt;
</pre>
<p><b>Add fancy tooltips (and optionally set their opacity)?</b></p>
<pre class="syntax javascript">
&lt;script type=&quot;text/javascript&quot;&gt;
	$(window).bind(&quot;load&quot;, function() {
	$(&quot;div#mygalone&quot;).slideView({toolTip: true, ttOpacity: 0.5}) // ttOpacity can be 0.1 to 1.0
});
&lt;/script&gt;

</pre>

<p><b>Custom easing functions:</b> you can customize the <b>kind of animation</b> and its <b>duration</b>; <b>time</b> is expressed in milliseconds eg: 1700.</p>
<pre class="syntax javascript">
&lt;script type=&quot;text/javascript&quot;&gt;

	$(window).bind(&quot;load&quot;, function() {
	$(&quot;div#myInstantGallery&quot;).slideView({
	easeFunc: &quot;easeInOutBack&quot;,
	easeTime: 1200
}); 
});
&lt;/script&gt;
</pre>
<p><b>Supported browsers:</b> slideViewer have been tested with IE6, IE7, IE8, FF3.5, Opera 9, Chrome 2.0</p>
<h4><b>Usecase 1</b> width and height have not been declared, nor the kind of easing function and its duration; this is the simplest use</h4>

<div id="mygalone" class="svw">
	<ul>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>

		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>

		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>

		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>

		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>

		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>

		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>

		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>
		<li><img alt="FlightPower li-poly batteries for r/c model aviation"  src="picts/11.jpg" /></li>

	</ul>

</div>
<br />
<p><b>Did you know?</b> if your galleries are made of a large number of images, probably you'll get two or more rows of links. Don't worry, they'll never go further your gallery right border.</p>
<br />
<h5>HTML</h5>
<pre class="syntax brush-html">
&lt;div id=&quot;mygalone&quot; class=&quot;svw&quot;&gt;

	&lt;ul&gt;
		&lt;li&gt;&lt;img alt=&quot;abc defrg thysu ooip jkifbtg fff&quot;  src=&quot;picts/01.jpg&quot; /&gt;&lt;/li&gt;
		&lt;li&gt;&lt;img alt=&quot;abc defrg thysu ooip jkifbtg fff&quot;  src=&quot;picts/02.jpg&quot; /&gt;&lt;/li&gt;		
		&lt;li&gt;&lt;img alt=&quot;abc defrg thysu ooip jkifbtg fff&quot;  src=&quot;picts/03.jpg&quot; /&gt;&lt;/li&gt;

		&lt;li&gt;&lt;img alt=&quot;abc defrg thysu ooip jkifbtg fff&quot;  src=&quot;picts/04.jpg&quot; /&gt;&lt;/li&gt;
		&lt;!-- eccetera --&gt;
	&lt;/ul&gt;

&lt;/div&gt;	
</pre>
<h5>JS</h5>
<pre class="syntax javascript">
&lt;script type=&quot;text/javascript&quot;&gt;
	$(window).bind(&quot;load&quot;, function() {
	$(&quot;div#mygalone&quot;).slideView()
});
&lt;/script&gt;

</pre>

<h4><b>Usecase 2</b> width and height <b>have been declared</b>: the script will use that values; also the kind of easing function and duration of the effect have been <b>customized</b> (easeFunc: "easeInOutBack", easeTime: 2200)</h4>
<div id="mygaltwo" class="svw">
	<ul>
		<li><img width="350" height="200" alt="abc defrg thysu ooip jkifbtg fff"  src="picts/10.jpg" /></li>
		<li><img width="350" height="200" alt="abc defrg thysu ooip jkifbtg fff"  src="picts/10.jpg" /></li>

		<li><img width="350" height="200" alt="abc defrg thysu ooip jkifbtg fff"  src="picts/10.jpg" /></li>
		<li><img width="350" height="200" alt="abc defrg thysu ooip jkifbtg fff"  src="picts/10.jpg" /></li>
		<li><img width="350" height="200" alt="abc defrg thysu ooip jkifbtg fff"  src="picts/10.jpg" /></li>
	</ul>
</div>
<br />
<h5>HTML</h5>
<pre class="syntax brush-html">
&lt;div id=&quot;mygaltwo&quot; class=&quot;svw&quot;&gt;

	&lt;ul&gt;
		&lt;li&gt;&lt;img width=&quot;350&quot; height=&quot;200&quot; alt=&quot;abc&quot;  src=&quot;picts/03.jpg&quot; /&gt;&lt;/li&gt;

		&lt;li&gt;&lt;img width=&quot;350&quot; height=&quot;200&quot; alt=&quot;defrg&quot;  src=&quot;picts/04.jpg&quot; /&gt;&lt;/li&gt;		
		&lt;!-- eccetera --&gt;

	&lt;/ul&gt;
&lt;/div&gt;
</pre>
<h5>JS</h5>
<pre class="syntax javascript">
&lt;script type=&quot;text/javascript&quot;&gt;
	$(window).bind(&quot;load&quot;, function() {
	$(&quot;div#mygaltwo&quot;).slideView({
	easeFunc: &quot;easeInOutBack&quot;,
	easeTime: 2200
}); 
});

&lt;/script&gt;
</pre>
<h4><b>easeInOutSine, toolTips, UI on top?</b> (easeFunc: "easeInOutSine",easeTime: 500, uiBefore: true, ttOpacity: 0.5, toolTip: true)</h4>
<div class="post" id="post-40">

<div style="float: left; margin: 0 2em 1em 0"><!-- left-floated like a simple image in a paragraph -->
<div id="mygalthree" class="svw">
	<ul>
		<li><img alt="description for this first image"  src="http://www.gcmingati.net/wordpress/wp-content/uploads/svdemo01.jpg" /></li>		
		<li><img alt="second picture and second description"  src="http://www.gcmingati.net/wordpress/wp-content/uploads/svdemo02.jpg" /></li>		
		<li><img alt="my third picture in da gallery!"  src="http://www.gcmingati.net/wordpress/wp-content/uploads/svdemo03.jpg" /></li>

		<li><img alt="makin my gallery is easy!"  src="http://www.gcmingati.net/wordpress/wp-content/uploads/svdemo04.jpg" /></li>
	</ul>
</div>
</div>
<p><b>toolTips!</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p> <p>Dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in.</p> <p>The 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>

</div>

<br />

<h5>HTML</h5>
<pre class="syntax brush-html">
&lt;div id=&quot;mygalthree&quot; class=&quot;svw&quot;&gt;
	&lt;ul&gt;

		&lt;li&gt;&lt;img alt=&quot;abc&quot; src=&quot;picts/10.jpg&quot; /&gt;&lt;/li&gt;		
		&lt;li&gt;&lt;img alt=&quot;abc&quot; src=&quot;picts/08.jpg&quot; /&gt;&lt;/li&gt;		
		&lt;li&gt;&lt;img alt=&quot;abc&quot; src=&quot;picts/05.jpg&quot; /&gt;&lt;/li&gt;

		&lt;!--eccetera--&gt;
	&lt;/ul&gt;
&lt;/div&gt;
</pre>
<h5>JS</h5>
<pre class="syntax javascript">
&lt;script type=&quot;text/javascript&quot;&gt;
$(window).bind(&quot;load&quot;, function() {
$(&quot;div#mygalthree&quot;).slideView({
easeFunc: &quot;easeInOutSine&quot;,
easeTime: 500,
uiBefore: true, //you can optionally draw the ui before the slider's images
ttOpacity: 0.5,
toolTip: true
});
});

&lt;/script&gt;
</pre>

<p><b>updates:</b><br />
venerdi 7 luglio 2010: Clicking the left part of a picture will move the slides backward, and viceversa for the right part of the picture.<br style="margin: 0;"/>	
lunedi 14 giugno 2010: Added the option uiBefore wich if set to true, places the ui bofore the slider's images. See the last example.<br style="margin: 0;"/>
mercoledi 17 febbraio 2010: due to the incompatibility between jQuery release 1.4 and J&ouml;rn Zaefferer's toolTip plugin, this new version includes a built-in tooltip script. You don't need anymore an extra-plugin to activate the tooltips.<br style="margin: 0;"/>
mercoledi 14 gennaio 2009: slideViewer now slides forward by clicking on the images (i received lots of emails requiring that functionality. and here it is.)<br style="margin: 0;"/>
lunedi 26 novembre 2007: no more IE6 crashes! Removed the overflow:hidden; statement in the CSS preload class (.svw) that was causing IE6 to crash. Thanks to Ark Kuciak.<br style="margin: 0;"/>

sabato 6 ottobre 2007: jQuery 1.2 compliant<br style="margin: 0;"/>
mercoledi 27 giugno 2007: slideViewer now works *optionally* with the jQuery toolTip plugin!<br style="margin: 0;"/>
martedi 26 giugno 2007: added a tricky preloader! now works in IE7!<br style="margin: 0;"/>
lunedi 25 giugno 2007: auto-selection of current element (navigation links)<br style="margin: 0;"/>
lunedi 25 giugno 2007: added a "title" tag to the links (grabbed from the "alt" tag of the images)<br style="margin: 0;"/>
</p>
<p>New! <a title="check out the new slideViewerPro" href="http://www.gcmingati.net/wordpress/wp-content/lab/jquery/svwt/index.html">jQuery slideViewerPro</a> 1.0</p>
<p><b>Thanks:</b> Credits go to George Smith for his "inspiring" easing plugin and to J&ouml;rn Zaefferer for his toolTip plugin. Thanks to the jQuery discussion list participants, to John Resig and the team behind jQuery.</p>

<p><small>2007-2010 Gian Carlo Mingati | design and development for interactive media</small></p>
<br />

</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-2064812-2");
pageTracker._initData();
pageTracker._trackPageview();
</script>



</body>
</html>
