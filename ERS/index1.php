<?php header("refresh: 1800; url=http://localhost/ERS/index1.php"); ?>
<?php

// Inialize session
session_start();

// Check, if email_id session is NOT set then this page will jump to login page

//$user_name = $_SESSION['username'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("news2", $con);

?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  	<meta name="description" content="Demo of a Sliding Login Panel using jQuery 1.3.2" />
  	<meta name="keywords" content="jquery, sliding, toggle, slideUp, slideDown, login, login form, register" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />	

	<!-- stylesheets -->
  	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
	
  	<!-- PNG FIX for IE6 -->
  	<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
	<!--[if lte IE 6]>
		<script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>
	<![endif]-->
	 
    <!-- jQuery - the core -->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Educational Guide System</title>
<meta name="keywords" content="newspaper theme, black, white, red, free templates, web design, CSS, HTML" />
<meta name="description" content="Newspaper Theme - free CSS template by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript">
    var flashvars = {};
    flashvars.xml_file = "flashmo_224_photo_list.xml";
    var params = {};
    params.wmode = "transparent";
    var attributes = {};
    attributes.id = "slider";
    swfobject.embedSWF("flash_slider.swf", "flash_grid_slider", "960", "350", "9.0.0", false, flashvars, params, attributes);
</script>

<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>

<body>


<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Educational System Guide</h1>
				<br>
				<p class="grey">This Educational System is Project work for Indian Institute of Information Technology, Allahabad!</p>
			</div>
			<div class="left">
				<!-- Login Form -->
				<form method="POST" action="/ERS/login/loginproc.php">
					<h1>Member Login</h1>
					<label class="grey" for="log">Username:</label>
					<input class="field" type="text" name="username" size="23" />
					<label class="grey" for="pwd">Password:</label>
					<input class="field" type="password" name="password" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					
				</form>
			</div>
			<div class="left right">			
				<!-- Register Form -->
				<form class="clearfix" action="insert.php" method="post">
					<h1>Not a member yet? Sign Up!</h1>				
					<label class="grey" for="email">Email:</label>
					<input class="field" type="text" name="emailid" size="23" />
					<label class="grey" for="username">Username:</label>
					<input class="field" type="text" name="username" size="23" />
					
					<label class="grey" for="password">Password:</label>	
					<input class="field" type="password" name="password" size="23" />
					<input type="submit" name="submit" value="Register" class="bt_register" />
				</form>
			</div>
		</div>
</div> <!-- /login -->	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hello Guest!</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Log In | Register</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->






<div id="templatemo_wrapper">
	  <div id="templatemo_header">
    	 <div id="site_title">
        	<!-- <h1><a href="http://www.templatemo.com">Free CSS Templates</a></h1>  -->
            <!-- <h1><a href="http://www.freewebsitetemplates.com/">Free CSS Templates</a></h1> -->
            Educational Guide System
        </div> 
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="index1.php"  class="selected">Home</a></li>
          	
            
              	<li><a href="about1.php">About</a></li>
              	<li><a href="contact1.php">Contact</a></li>
            </ul>
            <br style="clear: left" /> 
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
     <div id="templatemo_slider">
        <div id="flash_grid_slider">
            <a href="http://www.flashmo.com/preview/flashmo_224_grid_slider" target="_blank">
                Flash XML Grid Slider
            </a>
            <br /><br />
            <a href="http://www.adobe.com/go/getflashplayer">
                <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
            </a>
        </div>
    </div> 
    
    <div id="content_top">
        <div id="page_title">Educational Guide System</div>
        <div class="cleaner"></div>
    </div>  
    
    <div id="no_sidebar">
    	
    	<div class="col_3">
        	<h2>Latest Universities</h2>
<style type="text/css">
#marqueecontainer{
position: relative;
width: 300px; /*marquee width */
height: 500px; /*marquee height */
background-color: white;
overflow: hidden;
padding: 2px;
padding-left: 4px;
}

</style>

<script type="text/javascript">



var delayb4scroll=1000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
var marqueespeed=1 //Specify marquee scroll speed (larger is faster 1-10)
var pauseit=1 //Pause marquee onMousever (0=no. 1=yes)?

var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var actualheight=''

function scrollmarquee(){
if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8)) //if scroller hasn't reached the end of its height
cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px" //move scroller upwards
else //else, reset to original position
cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
}

function initializemarquee(){
cross_marquee=document.getElementById("vmarquee")
cross_marquee.style.top=0
marqueeheight=document.getElementById("marqueecontainer").offsetHeight
actualheight=cross_marquee.offsetHeight //height of marquee content (much of which is hidden from view)
if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
cross_marquee.style.height=marqueeheight+"px"
cross_marquee.style.overflow="scroll"
return
}
setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
}

if (window.addEventListener)
window.addEventListener("load", initializemarquee, false)
else if (window.attachEvent)
window.attachEvent("onload", initializemarquee)
else if (document.getElementById)
window.onload=initializemarquee


</script>


<div id="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
<div id="vmarquee" style="position: absolute; width: 98%;">

<!--YOUR SCROLL CONTENT HERE-->
<font size="3"><b>
<?php include 'try1.php';?>
</b></font>
<!--YOUR SCROLL CONTENT HERE-->

</div>
</div>
          
        </div>
        <div class="col_3">
        	<h2>Most Visited</h2>
	<style type="text/css">
#marqueecontainer1{
position: relative;
width: 300px; /*marquee width */
height: 300px; /*marquee height */
background-color: white;
overflow: hidden;
padding: 2px;
padding-left: 4px;
}

</style>
		
		<script type="text/javascript">



var delayb4scroll1=1000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
var marqueespeed1=1 //Specify marquee scroll speed (larger is faster 1-10)
var pauseit1=1 //Pause marquee onMousever (0=no. 1=yes)?

var copyspeed1=marqueespeed1
var pausespeed1=(pauseit1==0)? copyspeed1: 0
var actualheight1=''

function scrollmarquee1(){
if (parseInt(cross_marquee1.style.top)>(actualheight1*(-1)+8)) //if scroller hasn't reached the end of its height
cross_marquee1.style.top=parseInt(cross_marquee1.style.top)-copyspeed1+"px" //move scroller upwards
else //else, reset to original position
cross_marquee1.style.top=parseInt(marqueeheight1)+8+"px"
}

function initializemarquee1(){
cross_marquee1=document.getElementById("vmarquee1")
cross_marquee1.style.top=0
marqueeheight1=document.getElementById("marqueecontainer1").offsetHeight
actualheight1=cross_marquee1.offsetHeight //height of marquee content (much of which is hidden from view)
if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
cross_marquee1.style.height=marqueeheight1+"px"
cross_marquee1.style.overflow="scroll"
return
}
setTimeout('lefttime=setInterval("scrollmarquee1()",30)', delayb4scroll1)
}

if (window.addEventListener)
window.addEventListener("load", initializemarquee1, false)
else if (window.attachEvent)
window.attachEvent("onload", initializemarquee1)
else if (document.getElementById)
window.onload=initializemarquee1


</script>



		
		
		<div id="marqueecontainer1" onMouseover="copyspeed1=pausespeed1" onMouseout="copyspeed1=marqueespeed1">
<div id="vmarquee1" style="position: absolute; width: 98%;">

<!--YOUR SCROLL CONTENT HERE-->
<font size="3"><b>
<?php include 'try2.php';?>
</b></font>
<!--YOUR SCROLL CONTENT HERE-->

</div>
</div>           
           <!-- <ul class="templatemo_list">
            	<li>In elementum bibendum odio</li>
                <li>Nam sagittis dui pellentesque</li>
                <li>Lacus a suspendisse luctus</li>
                <li>Turpis vel convallis faucibus</li>
                <li>Praesent fringilla neque lorem </li>
			</ul>-->
         
        </div>
		
		<div id="templatemo_sidebar">
    	
        <div class="sb_box">
        	<h2>Categories</h2>
            <ul class="sb_list">
              <li><a href="nit1.php" onClick="alert('registered users login first.....register yourself if you are a new user');return false;">
				NITs</a></li>
                <li><a href="iit1.php" onClick="alert('registered users login first.....register yourself if you are a new user');return false;">
				IITs</a></li>
                <li><a href="iiit1.php" onClick="alert('registered users login first.....register yourself if you are a new user');return false;">
				IIITs</a></li>
                <li><a href="state_govt1.php" onClick="alert('registered users login first.....register yourself if you are a new user');return false;">
				State Govt. Colleges</a></li>
                <li><a href="private_college1.php" onClick="alert('registered users login first.....register yourself if you are a new user');return false;">
				Private Colleges</a></li>
                <li><a href="foreign_college1.php" onClick="alert('registered users login first.....register yourself if you are a new user');return false;">
				Foreign Colleges</a></li>
				<li><a href="iim1.php" onClick="alert('registered users login first.....register yourself if you are a new user');return false;">
				IIMS</a></li>
				<li><a href="medical_college1.php" onClick="alert('registered users login first.....register yourself if you are a new user');return false;">
				Entertainment</a></li>
				<!--<li><a href="sports1.php" onClick="alert('registered users login first.....register yourself if you are a new user');return false;">
				Sports</a></li>
				<li><a href="lifestyle1.php" onClick="alert('registered users login first.....register yourself if you are a new user');return false;">
				Lifestyle</a></li> -->
	</ul>
        </div>
</div>
    
		
       <!-- <div class="col_3 rmc">
        	<h2>Portfolio</h2>
            <img src="images/templatemo_image_05.jpg" alt="Image 05" class="image_frame" />
            <p><em>Proin mauris justo, ornare sed consequat ac, laoreet porta rhoncus quis arcu.</em></p>
            <a href="#" class="more">More</a>	
        </div>
        -->
        <div class="cleaner h60"></div>
        <!--
    	<div class="col_4">
        	<h3>Story One</h3>
            <img src="images/templatemo_image_01.jpg" alt="Image 01" />
        	Curabitur turpis turpis, rutrum sit amet porttitor sed, consequat at libero.
		</div>
        <div class="col_4">
        	<h3>Story Two</h3>
            <img src="images/templatemo_image_02.jpg" alt="Image  02" />
        	Suspendisse rhoncus tincidunt mauris, eget fringilla magna at arcu. 
        </div>
        <div class="col_4">
        	<h3>Story Three</h3>
            <img src="images/templatemo_image_03.jpg" alt="Image 03" />
        	Maecenas ut eros mi, in suscipit ante ut suscipit tortor interdum id.
        </div>
        <div class="col_4 rmc">
        	<h3>Story Four</h3>
            <img src="images/templatemo_image_04.jpg" alt="Image 04" />
        	Donec faucibus accumsan lectus id posuere. Morbi dictum purus. 
        </div> -->
    </div>      
    <div id="templatemo_content">
        <div class="cleaner"></div>
    </div> <!-- end of content -->
    <div id="templatemo_sidebar">

    </div> <!-- end of sidebar -->
    <div class="cleaner"></div>
    
    <div id="templatemo_bottom">
    	
		
		<pre><h3> Further Universities                                                                                                                   Contact</h3></pre>                       

		<div class="col_4">
            
             <a href="http://www.harvard.edu" target="_blank">
            <img src="images/harward1.jpg" alt="Image 01"></a> 
            
        </div>
        <div class="col_4">
            <a href="http://www.stanford.edu" target="_blank">
            <img src="images/stanford2.jpg"  alt="Image  02"></a>
            
        </div>
        <div class="col_4">
            <a href="http://www.cam.ac.uk" target="_blank">
            <img src="images/cambridge1.jpg"  alt="Image 03"></a>
            
        </div>

		
		
			
		
         <div class="col_4 col_l rmc">
        
            <ul class="footer_link">
            	<li><a href="http://www.facebook.com" class="facebook social" target="_blank">Facebook</a></li>
                <li><a href="http://www.linkedin.com" class="linkedin social"target="_blank">Linkedin</a></li>
                <li><a href="http://www.myspace.com" class="myspace social" target="_blank">Myspace</a></li>
                <li><a href="http://www.youtube.com" class="youtube social" target="_blank">Youtube</a></li>
                <li><a href="http://www.vimeo.com" class="vimeo social" target="_blank">Vimeo</a></li>
			</ul>
        </div>
		    <div class="cleaner"></div>

        
    </div>

    <div id="templatemo_footer">
    	Copyright © 2014 <a href="http://www.iiita.ac.in">Indian Institute of Information Technology, Allahabad</a>
    </div>
</div>

</body>
</html>
