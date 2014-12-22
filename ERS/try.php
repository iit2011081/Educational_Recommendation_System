<?php// header("refresh: 1800; url=http://localhost/ERS/try.php"); ?>
<?php


// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
        header('Location: index.php');
}

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("news2", $con);

?>
<?php
$user_1 = $_SESSION['username'];
$catagory = array();
$catagory[0] = 'NITs';
$catagory[1] = 'IITs';
$catagory[2] = 'IIITs';
$catagory[3] = 'State Govt. Colleges';
$catagory[4] = 'sports';
$catagory[5] = 'IIMS';
$catagory[6] = 'Foreign Colleges';
$catagory[7] = 'Private Colleges';
$catagory[8] = 'lifestyle';
$catagory[9] = 'Medical colleges';
$timezone1 = "Asia/Calcutta";


$count = array();
$key_array = array();
$top_most = array();
//$count = (0,0,0,0,0,0,0,0,0,0);
$count[0] = 0;
$count[1] = 0;
$count[2] = 0;
$count[3] = 0;
$count[4] = 0;
$count[5] = 0;
$count[6] = 0;
$count[7] = 0;
$count[8] = 0;
$count[9] = 0;
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone1);
$cur = date('d-m-Y H:i:s');
$cur = strtotime($cur);
  
for( $i = 0; $i < 10; $i ++ )
{
	$query1 = mysql_query("SELECT catagory,date FROM user_interest WHERE username = '$user_1' AND catagory = '$catagory[$i]' ORDER BY date DESC");	
	while($result = mysql_fetch_array($query1))
	{
		$type = $result['catagory'];
		$date = $result['date'];
		$old_date_timestamp1 = strtotime($date);
  		$diff = $cur-$old_date_timestamp1;
		if(diff<345600)
		{
			$count[$i] = $count[$i]+1;
			
		
		}
	}
}

	/*echo $count[0];
	echo "<br />";
	echo $count[2];
	echo "<br />";
	echo $count[7];
	echo "<br />";
	echo $count[9];
	echo "<br />";*/

	arsort($count);
	//echo "sorted";
	//echo "<br />";
	/*foreach ($count as $value)
  	{
  		echo $value . "<br />";
  	}*/

	//echo "keys";
	//echo "<br />";
	$key_array = array_keys($count);
	for( $i = 0; $i < 4; $i ++ )
	{
		$top_most[$i] = $key_array[$i]; 
		//echo $top_most[$i];
		//echo "<br />";
	}
for( $i = 0; $i < 4; $i ++ ){
$top = $top_most[$i];
$query2 = mysql_query("SELECT distinct title,link,type_news FROM news_story WHERE type_news = '$catagory[$top]' group by title ORDER BY date DESC LIMIT 2");
while($result2 = mysql_fetch_array($query2))
{
	$title_1 = $result2['title'];
	$link_1 = $result2['link'];
	$catagory_1 = $result2['type_news'];
	$query3 = mysql_query("SELECT NITs,IITs,IIITs,State Govt. Colleges,sports,IIMS,Foreign Colleges,Private Colleges,lifestyle,Medical colleges FROM domain WHERE username = '$user_1'");
	while($result3 = mysql_fetch_array($query3))
	{
	//echo "prateek";
	//echo "<br />";
	//echo $result3['national'];
	//echo "<br />";
	$NITs = $result3['NITs'];
	$IITs = $result3['IITs'];
	$technical = $result3['IIITs'];
	$business = $result3['State Govt. Colleges'];
	$sports = $result3['sports'];
	$health = $result3['IIMS'];
	$science = $result3['Foreign Colleges'];
	$education = $result3['Private Colleges'];
	$lifestyle = $result3['lifestyle'];
	$entertainment = $result3['Medical colleges'];
	
	if($NITs != "1" )
	{
		if($catagory_1 == 'NITs')
		{
			$link_1 = urlencode($link_1);	
			$title_2 = urlencode($title_1);
		
			echo "<a href='increment.php?x=$link_1&t=$title_2&z=$catagory_1' target=\"_blank\">$title_1</a>";
			echo "<br />";
		}
	
	}

	if($IITs != "1" )
	{
		if($catagory_1 == 'IITs')
		{
			$link_1 = urlencode($link_1);	
			$title_2 = urlencode($title_1);
			
			echo "<a href='increment.php?x=$link_1&t=$title_2&z=$catagory_1' target=\"_blank\" >$title_1</a>";
			echo "<br />";
		}
	
	}

	if($technical != "1" )
	{
		if($catagory_1 == 'IIITs')
		{
			$link_1 = urlencode($link_1);	
			$title_2 = urlencode($title_1);
			
			echo "<a href='increment.php?x=$link_1&t=$title_2&z=$catagory_1' target=\"_blank\">$title_1</a>";
			echo "<br />";
		}
	
	}
	
	if($business != "1" )
	{
		if($catagory_1 == 'State Govt. Colleges')
		{
			$link_1 = urlencode($link_1);	
			$title_2 = urlencode($title_1);
			
			echo "<a href='increment.php?x=$link_1&t=$title_2&z=$catagory_1' target=\"_blank\">$title_1</a>";
			echo "<br />";
		}
	
	}
	
	if($sports != "1" )
	{
		if($catagory_1 == 'sports')
		{
			$link_1 = urlencode($link_1);	
			$title_2 = urlencode($title_1);
			
			echo "<a href='increment.php?x=$link_1&t=$title_2&z=$catagory_1' target=\"_blank\">$title_1</a>";
			echo "<br />";
			echo "<br />";
		}
	
	}
	
	if($health != "1" )
	{
		if($catagory_1 == 'IIMS')
		{
			$link_1 = urlencode($link_1);	
			$title_2 = urlencode($title_1);

			echo "<a href='increment.php?x=$link_1&t=$title_2&z=$catagory_1' target=\"_blank\" >$title_1</a>";
			echo "<br />";
			echo "<br />";
		}
	
	}
	
	if($science != "1" )
	{
		if($catagory_1 == 'Foreign Colleges')
		{
			$link_1 = urlencode($link_1);	
			$title_2 = urlencode($title_1);
			
			echo "<a href='increment.php?x=$link_1&t=$title_2&z=$catagory_1' target=\"_blank\">$title_1</a>";
			echo "<br />";
			echo "<br />";
		}
	
	}
	
	if($education != "1" )
	{
		if($catagory_1 == 'Private Colleges')
		{
			$link_1 = urlencode($link_1);	
			$title_2 = urlencode($title_1);
			
			echo "<a href='increment.php?x=$link_1&t=$title_2&z=$catagory_1' target=\"_blank\">$title_1</a>";
			echo "<br />";
			echo "<br />";
		}
	
	}
	if($lifestyle != "1" )
	{
		if($catagory_1 == 'lifestyle')
		{
			$link_1 = urlencode($link_1);	
			$title_2 = urlencode($title_1);
			
			echo "<a href='increment.php?x=$link_1&t=$title_2&z=$catagory_1' target=\"_blank\">$title_1</a>";
			echo "<br />";
			echo "<br />";
		}
	
	}
	if($entertainment != "1" )
	{
		if($catagory_1 == 'Medical colleges')
		{
			$link_1 = urlencode($link_1);	
			$title_2 = urlencode($title_1);
			
			echo "<a href='increment.php?x=$link_1&t=$title_2&z=$catagory_1' target=\"_blank\">$title_1</a>";
			echo "<br />";
			echo "<br />";
		}
	
	}
	//echo "<br />";
	}
	/*$link_1 = urlencode($link_1);	
	$title_2 = urlencode($title_1);
	echo "<a href='increment.php?x=$link_1&t=$title_2&z=$catagory_1' >$title_1</a>";
	echo "<br />";*/


}
//echo "<br />";
}
mysql_close($con);
?>

