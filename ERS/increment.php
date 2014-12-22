<?php header("refresh: 1800; url=http://localhost/ERS/increment.php"); ?>
<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['username'])) {
        header('Location: http://localhost/ERS/index1.php');
}

?>
<?php
$user = $_SESSION['username'];
echo $user;
echo "<br />";
$c = $_GET['x'];
$tit = $_GET['t'];
$tit = addslashes($tit);
$type = $_GET['z'];
$y = crc32($c);

echo $y;
echo "<br />";
echo $c;
echo "<br />";
echo $type;
echo "<br />";
echo $tit;
$con1 = mysql_connect("localhost","root","");
if (!$con1)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("news2", $con1);
mysql_query("update news_story SET cnt = cnt+1 WHERE title= '$tit' ");
$result1 = mysql_query("select count(cnt) from user_interest where username ='$user' and title ='$tit'");
$row = mysql_fetch_array($result1);
$count1 = $row['count(cnt)'];
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone1);
$cur1 = date('Y-m-d H:i:s');
echo "<br />";
echo $count1; 
echo "<br />";
//echo $res;
if ($count1 == 0)
{
	echo "HI";
	mysql_query("insert into user_interest values('$user','$tit','$c','$type',1,'$cur1')");
}
else
{
	echo "HELLO";
	mysql_query("update user_interest set cnt = cnt+1 where username = '$user' and title = '$tit' and link = '$c' ");
	mysql_query("update user_interest set date = '$cur1' where username = '$user' and title = '$tit' and link = '$c' ");
}
echo "<br />";


mysql_close($con1);

header("Location: $c") ;

?>



