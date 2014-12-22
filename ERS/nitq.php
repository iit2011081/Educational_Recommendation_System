<?php header("refresh: 1800; url=http://localhost/ERS/nitq.php"); ?>
<?php


// Inialize session
//session_start();

// Check, if username session is NOT set then this page will jump to login page

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("news2", $con);

?>


<?php
		$temp = "NITs";
		
		$result = mysql_query("SELECT distinct title,link,type_news,date FROM news_story where type_news = '$temp' group by title order by date DESC LIMIT 15");

		while($row = mysql_fetch_array($result))
		  {
		
				  $link = urlencode($row['link']);
				  $title = $row['title'] ;
				  $catagory = $row['type_news'];
					
				  $date = $row['date'];
				  	$title2 = urlencode($title);
				  	//echo $title2 ;
				
				    echo "<a href='increment.php?x=$link&t=$title2&z=$catagory' target=\"_blank\">$title </a>";
					//echo "<a href='increment.php?x=$link&t=$title2&z=$catagory' target=\"_blank\"></a>";
					//echo $title;
					//echo '<br/>';
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

					echo "<a href='/ERS/rate.php?x=$link&t=$title2&z=$catagory' target=\"_blank\">Rate</a>";
				 
					//echo '<a href="/ERS/combo1.php">Give Rating</a>';

					echo "<br />";
				  echo "<br />";
		  }
		  mysql_close($con);
?>

