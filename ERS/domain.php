<?php// header("refresh: 1800; url=http://localhost/ERS/try2.php"); ?>
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
		$result = mysql_query("SELECT distinct title,link,type_news,date FROM news_story where cnt = 1 group by title order by date DESC");


		while($row = mysql_fetch_array($result))
		  {
		  //echo $row['title'] ;
		  $link = urlencode($row['link']);
		  $title = $row['title'] ;
		  $catagory = $row['type_news'];
		  $date = $row['date'];
		  $cur = date('d-m-Y H:i:s');
		  $cur = strtotime($cur);
		  $timezone1 = "Asia/Calcutta";
		  if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone1);
			$d = date('d-m-Y H:i:s');
		  $old_date_timestamp1 = strtotime($date);
		  $diff = $cur-$old_date_timestamp1;
			
		  if($diff < 86400000){
			$title2 = urlencode($title);
		   	echo "<a href='increment.php?x=$link&t=$title2&z=$catagory' target=\"_blank\">$title</a>";
			echo "<br />";
			}
		  echo "<br />";
		  }
		  mysql_close($con);
		?>

