<?php header("refresh: 1800; url=http://localhost/ERS/iim1.php"); ?>
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
<title>Newspaper Theme - About Our Company</title>
<meta name="keywords" content="about us, our company, newspaper theme, free templates, website design" />
<meta name="description" content="Newspaper Theme, About Us, Our Company, free CSS template by templatemo.com" />
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
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Welcome to your personalized News Guide</h1>
				<br>
				<p class="grey">This website is part of a Project work for Institute of Information Technology, Allahabad!</p>
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
        	<!-- <h1><a href="http://www.templatemo.com">Free CSS Templates</a></h1> -->
        	Educational Guide System
        </div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
				<li><a href="index1.php">Home</a></li>
          		
              	<li><a href="about1.php" class="selected">About</a></li>
              	<li><a href="contact1.php">Contact</a></li>            
			</ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="content_top">
        <div id="page_title">IIMS</div>

        <div class="cleaner"></div>
    </div>  
    
    <div id="templatemo_content">
    	<?php include 'iimq.php';?>


    </div> <!-- end of content -->
    <div id="templatemo_sidebar">
    	
        <div class="sb_box">
        	<h2>Categories</h2>
            <ul class="sb_list">
            	<li><a href="nit1.php" >NITs</a></li>
                <li><a href="iit1.php">IITs</a></li>
                <li><a href="iiit1.php">IIITs</a></li>
                <li><a href="state_govt1.php">State Govt. Colleges</a></li>
                <li><a href="private_college1.php">Private Colleges</a></li>
                <li><a href="foreign_college1.php">Foreign Colleges</a></li>
		<li><a href="iim1.php"><font color='red'>IIMS</font></a></li>
		<li><a href="medical_college1.php">Medical colleges</a></li>
		 		
<!--<li><a href="sports2.php">Sports</a></li>
<li><a href="lifestyle2.php">Life Style</a></li>-->
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
