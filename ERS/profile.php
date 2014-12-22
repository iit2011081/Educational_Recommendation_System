<?php header("refresh: 5; url=http://localhost/ERS/profile.php"); ?>
<?php

// Inialize session
session_start();

// Check, if email_id session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
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










<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
	<script type="text/javascript">
	
$(document).ready(function() {
	
	/* see if anything is previously checked and reflect that in the view*/
	$(".checklist input:checked").parent().addClass("selected");
	
	/* handle the user selections */
	$(".checklist .checkbox-select").click(
		function(event) {
			event.preventDefault();
			$(this).parent().addClass("selected");
			$(this).parent().find(":checkbox").attr("checked","checked");
		}
	);
	
	$(".checklist .checkbox-deselect").click(
		function(event) {
			event.preventDefault();
			$(this).parent().removeClass("selected");
			$(this).parent().find(":checkbox").removeAttr("checked");
		}
	);
	
});
	
	</script>
	
	<style type="text/css">

body {
	font: 12px/1.3 "Lucida Grande","Lucida","Arial",Sans-serif;
}

form {
	margin: 0 0 30px 0;
}

legend {
	font-size: 17px;
}

fieldset {
	border: 0;
}

.checklist {
	list-style: none;
	margin: 0;
	padding: 0;
}

.checklist li {
	float: left;
	margin-right: 10px;
	background: url(i/checkboxbg.gif) no-repeat 0 0;
	width: 105px;
	height: 150px;
	position: relative;
	font: normal 11px/1.3 "Lucida Grande","Lucida","Arial",Sans-serif;
}

.checklist li.selected {
	background-position: -105px 0;
}

.checklist li.selected .checkbox-select {
	display: none;
}

.checkbox-select {
	display: block;
	float: left;
	position: absolute;
	top: 118px;
	left: 10px;
	width: 85px;
	height: 23px;
	background: url(i/select.gif) no-repeat 0 0;
	text-indent: -9999px;
}

.checklist li input {
	display: none;	
}

a.checkbox-deselect {
	display: none;
	color: white;
	font-weight: bold;
	text-decoration: none;
	position: absolute;
	top: 120px;
	right: 10px;
}

.checklist li.selected a.checkbox-deselect {
	display: block;
}

.checklist li label {
	display: block;
	text-align: center;
	padding: 8px;
}

.sendit {
	display: block;
	float: left;
	top: 118px;
	left: 10px;
	width: 115px;
	height: 34px;
	border: 0;
	cursor: pointer;
	background: url(i/sendit.gif) no-repeat 0 0;
	text-indent: -9999px;
	margin-top:20px;
	margin-bottom:30px;
	margin-left:230px;

}

</style>
	













<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Universities - Blog Page</title>
<meta name="keywords" content="newspaper, blog theme, black, white, red, website templates, CSS, HTML" />
<meta name="description" content="Newspaper Blog Theme, free CSS template from templatemo.com" />
<link href="templatemo_style1.css" rel="stylesheet" type="text/css" />

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
              	<li><a href="success_login.php">Home</a></li>
          		<li><a href="profile.php" class="selected">Profile</a>
                    
              	</li>
              	<li><a href="about2.php">About</a></li>
              	<li><a href="contact2.php">Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="content_top">
        <div id="page_title">Profile</div>
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <div class="cleaner"></div>
    </div>  
    
<?php 

		$con = mysql_connect("localhost","root","");
		if (!$con)
		  {
			
		  die('Could not connect: ' . mysql_error());
		  }

		mysql_select_db("news2", $con);
$user_name =  mysql_real_escape_string($_SESSION['username']);

$query  = "select * from domain WHERE username = '$user_name'";
	$row = mysql_query($query) or die(mysql_error());
	$result = mysql_fetch_assoc($row);	

?>   
	<div id="templatemo_content">
    	<div class="post_box">
                <h2>Personalize Universities</h2>
				
				
	<!-- <form action="form_action1.php" method = "post">
	
		<fieldset>

		
			<ul class="checklist">
			
				<li>
				<?php	if($result['NITs']=="1") 
					echo "<input name=\"NITs\" value=\"value1\" type=\"checkbox\" id=\"choice_c\" checked=\"checked\"/>\n";
					else 
						echo "<input name=\"NITs\" value=\"value1\" type=\"checkbox\" id=\"choice_c\"/>\n";
				?>
					
					<a class="checkbox-select" href="#"></a>
					<a class="checkbox-deselect" href="#">Cancel</a>
				</li>
				<li>
				<?php	if($result['IITs']=="1")
					echo "<input name=\"IITs\" value=\"value1\" type=\"checkbox\" id=\"choice_c\" checked=\"checked\"/\n";
					else
					{
						echo "<input name=\"IITs\" value=\"value1\" type=\"checkbox\" id=\"choice_c\"/>\n";
						//echo "<a class=\"checkbox-select\" href=\"#\">Select</a>\n";
					}
				?>
			
					
					<a class="checkbox-select" href="#"></a>
					<a class="checkbox-deselect" href="#">Cancel</a>
				</li>
				<li>
				<?php	if($result['Other_universities']=="1")
					echo "<input name=\"Other_universities\" value=\"value1\" type=\"checkbox\" id=\"choice_c\" checked=\"checked\"/\n";
					else
						echo "<input name=\"Other_universities\" value=\"value1\" type=\"checkbox\" id=\"choice_c\"/>\n";
				?>
					
					<a class="checkbox-select" href="#"></a>
					<a class="checkbox-deselect" href="#">Cancel</a>
				</li>
				<li>
				<?php	if($result['business']=="1")
					echo "<input name=\"business\" value=\"value1\" type=\"checkbox\" id=\"choice_c\" checked=\"checked\"/\n";
					else
						echo "<input name=\"business\" value=\"value1\" type=\"checkbox\" id=\"choice_c\"/>\n";
				?>
					
					<a class="checkbox-select" href="#"></a>
					<a class="checkbox-deselect" href="#">Cancel</a>
				</li>
				<li>
				<?php	if($result['education']=="1")
					echo "<input name=\"education\" value=\"value1\" type=\"checkbox\" id=\"choice_c\" checked=\"checked\"/\n";
					else
						echo "<input name=\"education\" value=\"value1\" type=\"checkbox\" id=\"choice_c\"/>\n";
				?>
					
					<a class="checkbox-select" href="#"></a>
					<a class="checkbox-deselect" href="#">Cancel</a>
				</li>


			</ul>
		
			
			
			<div style="clear: both;"></div>
			
			
		</fieldset>
		
		<fieldset>
			
			
		
		
		
		
			<ul class="checklist">
				<li>
				<?php	if($result['science']=="1")
					echo "<input name=\"science\" value=\"value1\" type=\"checkbox\" id=\"choice_c\" checked=\"checked\"/\n";
					else
						echo "<input name=\"science\" value=\"value1\" type=\"checkbox\" id=\"choice_c\"/>\n";
				?>
					
					<a class="checkbox-select" href="#"></a>
					<a class="checkbox-deselect" href="#">Cancel</a>
				</li>
				<li>
				<?php	if($result['IIMS']=="1")
					echo "<input name=\"health\" value=\"value1\" type=\"checkbox\" id=\"choice_c\" checked=\"checked\"/\n";
					else
						echo "<input name=\"health\" value=\"value1\" type=\"checkbox\" id=\"choice_c\"/>\n";
				?>
					
					<a class="checkbox-select" href="#"></a>
					<a class="checkbox-deselect" href="#">Cancel</a>
				</li>

				<li>
				<?php	if($result['Medical colleges']=="1")
					echo "<input name=\"entertainment\" value=\"value1\" type=\"checkbox\" id=\"choice_c\" checked=\"checked\"/\n";
					else
						echo "<input name=\"entertainment\" value=\"value1\" type=\"checkbox\" id=\"choice_c\"/>\n";
				?>
					
					<a class="checkbox-select" href="#"></a>
					<a class="checkbox-deselect" href="#">Cancel</a>
				</li>
				<li>
				<?php	if($result['sports']=="1")
					echo "<input name=\"sports\" value=\"value1\" type=\"checkbox\" id=\"choice_c\" checked=\"checked\"/\n";
					else
						echo "<input name=\"sports\" value=\"value1\" type=\"checkbox\" id=\"choice_c\"/>\n";
				?>
					
					<a class="checkbox-select" href="#"></a>
					<a class="checkbox-deselect" href="#">Cancel</a>
				</li>
				<li>
				<?php	if($result['lifestyle']=="1")
					echo "<input name=\"lifestyle\" value=\"value1\" type=\"checkbox\" id=\"choice_c\" checked=\"checked\"/\n";
					else
						echo "<input name=\"lifestyle\" value=\"value1\" type=\"checkbox\" id=\"choice_c\"/>\n";
				?>
					
					<a class="checkbox-select" href="#"></a>
					<a class="checkbox-deselect" href="#">Cancel</a>
				</li>

			</ul>
		-->
			
		<div style="clear: both;"></div>
		
		</fieldset>
		
		          <button class="sendit" type="submit" name="submitbutton" title="Submit the form">Send it!</button>
				 
	</form>


				
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
		<li><a href="sports2.php">Sports</a></li>
		<li><a href="lifestyle2.php">Life Style</a></li>
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
    	Copyright © 2014 <a href="http://www.iiita.ac.in"> Institute of Information Technology, Allahabad</a>
    </div>
</div>

</body>
</html>
