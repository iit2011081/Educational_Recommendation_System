<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("news2", $con);
echo "connect";
$sql="INSERT INTO user_details (email_id,username, password)
VALUES ('$_POST[emailid]','$_POST[username]','$_POST[password]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  

$sqp ="INSERT INTO prediction (username,MNIT_allahabad ,MNIT_Bhopal ,NIT_Kurukshetra ,NIT_Raipur ,NIT_Warangal,NIT_Patna,NIT_Trichy)

VALUES ('$_POST[username]', '0', '0', '0', '0','0','0','0')";

if (!mysql_query($sqp,$con))
{
  die('Error: ' . mysql_error());
}  

/*$sql1="INSERT INTO user_behaviour (username, NITs, IITs, IIITs, State Govt. Colleges, Sports, IIMS, Foreign Colleges, Private Colleges,Lifestyle,Entertainment)
VALUES ('$_POST[username]','0','0','0','0','0','0','0','0','0','0')";

if (!mysql_query($sql1,$con))
  {
echo " connect";
  die('Error: ' . mysql_error());
  }
 echo "connect5"; 
*/
/*$sql2="INSERT INTO domain (username, india, iit, technical, business, sports, IIMS, science, education,lifestyle,entertainment)
VALUES ('$_POST[username]','0','0','0','0','0','0','0','0','0','0')";

  if (!mysql_query($sql2,$con))
  {
echo "connect4";
  die('Error: ' . mysql_error());
  }
  */
echo "1 record added";
 header( 'Location:http://localhost/ERS/index2.php' ) ;

mysql_close($con);
?> 
