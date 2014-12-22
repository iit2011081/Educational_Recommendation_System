<?php header('refresh:300');?>
<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['email_id'])) {
        header('Location: http://localhost/ERS/success_login.php');
}

?>
<?php
$name = $_SESSION['email_id'];
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Personal News Guide</title>
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

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
        	<!-- <h1><a href="http://www.templatemo.com">Free CSS Templates</a></h1> -->
            Educational Guide System
        </div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
				<li><a href="index1.php">Home</a></li>
          		<li><a href="profile.html">Profile</a></li>
              	<li><a href="about.html">About</a></li>
              	<li><a href="contact.html">Contact</a></li>            
			</ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="content_top">
        <div id="page_title">National News</div>
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <div class="cleaner"></div>
    </div>  
    
    <div id="templatemo_content">
    	<h2>Duis iaculis purus a tellus ut </h2>
		<?php
$cur = date('d-m-Y H:i:s');
$cur = strtotime($cur);
mysql_query("UPDATE user_behaviour SET national= national+1 WHERE email_id= '$email_id'");
$result = mysql_query("SELECT title , link,date FROM  `news_story` WHERE type_news ='national' ORDER BY  `news_story`.`date` DESC ");
while($row = mysql_fetch_array($result))
  {
	$a = $row['title'];
	$b = $row['link'];
	$d = $row['date'];
	$timezone1 = "Asia/Calcutta";
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone1);
	//$d = date('d-m-Y H:i:s');
	$old_date_timestamp1 = strtotime($d);
	$diff = $cur-$old_date_timestamp1;
	if($diff<86400)
	{
		//echo $diff;
		$a1 = urlencode($a);
		echo "<a href='second.php?x=$b&t=$a1'>$a</a>";
	//echo $old_date_timestamp1;
	echo "<br />";
	echo "<br />";
	}
	//echo "<br />";
	//echo "<a href=second.php?x=$b&t=$a>$a</a>";
	//echo "<br />";
 }


?>


    </div> <!-- end of content -->
    <div id="templatemo_sidebar">
    	
        <div class="sb_box">
        	<h2>Categories</h2>
            <ul class="sb_list">
            	<li><a href="#">NITs</a></li>
                <li><a href="#">IITs</a></li>
                <li><a href="#">IIITs</a></li>
                <li><a href="#">State Govt. Colleges</a></li>
                <li><a href="#">Private Colleges</a></li>
                <li><a href="#">Foreign Colleges</a></li>
				<li><a href="#">Health</a></li>
				<li><a href="#">Entertainment</a></li>
				<!--<li><a href="#">Sports</a></li>
				<li><a href="#">Life Style</a></li> -->
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
            	<li><a href="#" class="facebook social">Facebook</a></li>
                <li><a href="#" class="linkedin social">Linkedin</a></li>
                <li><a href="#" class="myspace social">Myspace</a></li>
                <li><a href="#" class="youtube social">Youtube</a></li>
                <li><a href="#" class="vimeo social">Vimeo</a></li>
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
