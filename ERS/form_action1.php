<?php

// Inialize session
session_start();
if (!isset($_SESSION['username'])) {
echo "session not set";
        header('Location: index1.php');
}

// Check, if user is already login, then jump to secured page
?>


<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("news2", $con);




	$user = $_SESSION['username'];
	
	

	if (isset($_POST['NITs']))
	{
			mysql_query("UPDATE domain  SET NITs=1 WHERE username='$user'");
	}
	else
	{
			mysql_query("UPDATE domain  SET NITs=0 WHERE username='$user'");
	}
	echo "<br />";




	if (isset($_POST['world']))
	{
	
		mysql_query("update domain  set world = 1 where username = '$user'");
		echo "<br />";
	}
	else
		{
			mysql_query("UPDATE domain  SET world = 0 WHERE username='$user'");
		}
	


	

	
	if (isset($_POST['technical']))		
	{
	
		mysql_query("update domain  set technical = 1 where username = '$user'");
	}
	else
	{
			mysql_query("UPDATE domain  SET technical = 0 WHERE username='$user'");
	}
		echo "<br />";
		


	if (isset($_POST['business']))
	{
	
		mysql_query("update domain  set business = 1 where username = '$user'");
		}
	else
		{
			mysql_query("UPDATE domain  SET business = 0 WHERE username='$user'");
		}
		echo "<br />";
		


	if (isset($_POST['education']))
	{		
	
		mysql_query("update domain  set education = 1 where username = '$user'");
		}
	else
		{
			mysql_query("UPDATE domain  SET education = 0 WHERE username='$user'");
		}
		echo "<br />";

		
	if (isset($_POST['lifestyle']))
	{
	
	
		mysql_query("update domain  set lifestyle = 1 where username = '$user'");
		}
	else
		{
			mysql_query("UPDATE domain  SET lifestyle = 0 WHERE username='$user'");
		}
		echo "<br />";



	if (isset($_POST['health']))
	{
		
	
		mysql_query("update domain  set health = 1 where username = '$user'");
		}
	else
		{
			mysql_query("UPDATE domain  SET health = 0 WHERE username='$user'");
		}
		echo "<br />";

	if (isset($_POST['science']))
	{
		mysql_query("update domain  set science = 1 where username = '$user'");
	
		}
	else
		{
			mysql_query("UPDATE domain  SET science = 0 WHERE username='$user'");
		}
		echo "<br />";

	if (isset($_POST['sports']))
	{
	
		mysql_query("update domain  set sports = 1 where username = '$user'");
		}
		else
		{
			mysql_query("UPDATE domain  SET sports = 0 WHERE username='$user'");
		}
		echo "<br />";

	if (isset($_POST['entertainment']))
		{
	
		mysql_query("update domain  set entertainment = 1 where username = '$user'");
		}
	else
		{
			mysql_query("UPDATE domain  SET entertainment = 0 WHERE username='$user'");
		}
		echo "<br />";

		
		

	  mysql_close($con);
	  header( 'Location:http://localhost/ERS/success_login.php' ) ;
?>
