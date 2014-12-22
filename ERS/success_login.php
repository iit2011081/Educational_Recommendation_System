<?php header("refresh: 3; url=http://localhost/ERS/success_login.php"); ?>
<?php

// Inialize session
session_start();

// Check, if email_id session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
echo "THis is strange";
        header('Location: index1.php');
}

$user_name = $_SESSION['username'];
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
<title>Newspaper Theme - Blog Page</title>
<meta name="keywords" content="newspaper, blog theme, black, white, red, website templates, CSS, HTML" />
<meta name="description" content="Newspaper Blog Theme, free CSS template from templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
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
	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hello <?php echo $user_name ?>! </li>
			<li class="sep">|</li>
			<li>
				<a id="open" class="open" href="logout.php">Logout</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
</div> 





<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
        	<!-- <h1><a href="http://www.templatemo.com">Free CSS Templates</a></h1> -->
        	Educational Guide System
        </div>
         <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="success_login.php" class="selected" >Home</a></li>
          		<!-- <li><a href="profile.php">Profile</a> -->
                    
              	</li>
              	<li><a href="about2.php" >About</a></li>
              	<li><a href="contact2.php">Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="content_top">
        <div id="page_title">University Blog Page</div>
    
        <div class="cleaner"></div>
    </div>  
    
    <div id="templatemo_content">
    	<div class="post_box">
                <h2>Latest Universities</h2>

		<table> 
		<tr><td>
              <!--  <img src="images/templatemo_image_06.jpg"  alt="Image" width= 240 height= 200/>  --> 
              <img src="images/university.PNG" alt="Image" width= 240 height= 200/> 
		</td><td>
		
		
		
		
		
		
		
		
		<style type="text/css">

#marqueecontainer{
position: relative;
width: 350px; /*marquee width */
height: 200px; /*marquee height */
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
	       		
				
				
				
				
				
				
				
				
				
				
				
				
		</td></tr>
		</table>
		
		
              	<div class="post_meta">    </div>
            </div>
            
		<div class="post_box">
                  <h2> Most Viewed</h2>
		<table><tr><td>
               <!-- <img src="images/templatemo_image_07.png"  alt="Image" width= 240 height= 200 /> -->
               <img src="images/templatemo_image_07we4t5.jpg"  alt="Image" width= 240 height= 200 />
		</td><td>
		
		<style type="text/css">

#marqueecontainer1{
position: relative;
width: 350px; /*marquee width */
height: 200px; /*marquee height */
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
            	
				
				
				
				
				
				
				
		</td></tr>
		</table>
                <div class="post_meta">    </div>
          </div>
            
		<div class="post_box">
		<h2> Recommended</h2>
		<table><tr><td>
                <img src="images/templatemo_image_08.jpg"  alt="Image" width= 240 height= 200/>
		</td><td>
			<font size="3"><b>
			<?php include 'try3.php';?>
			</b></font>
		</td></tr>
		</table>
                <div class="post_meta">
                </div>
          </div>
    
			
		<div class="post_box">
		<h2>You May Like </h2>
		<table>	<tr><td>
                <img src="images/templatemo_image_09.jpg"  alt="Image" width= 240 height= 200/>
		</td><td>
		
<font size="3"><b>
			<?php include 'domain.php';?>
			</b></font>
				
		</td></tr>
		</table>
                <div class="post_meta">
                </div>

          	</div>
       
    </div> <!-- end of content -->

   <div id="templatemo_sidebar">
    <div class="sb_box">
        	<h2>Categories</h2>
            <ul class="sb_list">
            	<li><a href="nit2.php" >NITs</a></li>
                <li><a href="iit2.php">IITs</a></li>
                <li><a href="iiit2.php">IIITs</a></li>
                <li><a href="state_govt2.php">State Govt. Colleges</a></li>
                <li><a href="private_college2.php">Private Colleges</a></li>
                <li><a href="foreign_college2.php">Foreign Colleges</a></li>
		<li><a href="iim2.php">IIMS</a></li>
		<li><a href="medical_college2.php">Medical colleges</a></li>
		<!--<li><a href="sports2.php">Sports</a></li>
		<li><a href="lifestyle2.php">Life Style</a></li> -->
			</ul>
     </div>
        
        
	</div> <!-- end of sidebar -->
    <div class="cleaner"></div>
    
    <div id="templatemo_bottom">
    	
		<pre><h3> Further Universities                                                                                                                    Contact</h3></pre>                       

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
