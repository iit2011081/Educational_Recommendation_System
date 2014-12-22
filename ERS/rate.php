<?php header("refresh: 1800; url=http://localhost/ERS/rate.php"); ?>
<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['username'])) {
        //header('Location: http://localhost/ERS/index1.php');
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

//echo $y;
//echo "<br />";
//echo $c;
//echo "<br />";
//echo $type;
echo "<br />";
echo $tit;
$con1 = mysql_connect("localhost","root","");
if (!$con1)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("news2", $con1);
if($tit == 'NIT_Raipur')
{
		$_SESSION['tit1'] = $tit;
	?>
	<form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="NIT_Raipur" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'NIT_Kurukshetra')
{
	$_SESSION['tit1'] = $tit;
	?>
	<form class="clearfix" action="prediction.php" method="post">
                      <label class="grey" for="email">Rating</label>     

                    <input class="field" type="text" name="NIT_Kurukshetra" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'MNIT_allahabad')
{
	$_SESSION['tit1'] = $tit;
	?>
	<form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="MNIT_allahabad" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'NIT_Patna')
{
	$_SESSION['tit1'] = $tit;
	?>
	<form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="NIT_Patna" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'NIT_Warangal')
{
	$_SESSION['tit1'] = $tit;
	?>
	<form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="NIT_Warangal" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'NIT_Trichy')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="NIT_Trichy" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'MNIT_Bhopal')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="MNIT_Bhopal" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Guwahati')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT Guwahati" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Bombay')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT Bombay" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Delhi')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT Delhi" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Kharagpur')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT Kharagpur" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Bhubaneswar')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT Bhubaneswar" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Hyderabad')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT Hyderabad" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Indore')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                      <label class="grey" for="email">Rating</label>     

                    <input class="field" type="text" name="IIT Indore" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Jodhpur')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT Jodhpur" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'Engineering_College_Ajmer')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Engineering College Ajmer" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_BHU_Varanasi')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT BHU Varanasi" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Roorkee')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT Roorkee" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Patna')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT Patna" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Mandi')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT Mandi" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Madras')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT Madras" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Kanpur')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT Kanpur" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'Delhi_College_of_Engineering')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Delhi_College_of_Engineering" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'NIT_Delhi')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="NIT Delhi" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Patna')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT Patna" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIT_Mandi')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIT Mandi" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}

else if($tit == 'NIT_Mizoram')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="NIT Mizoram" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'NIT_Nagaland')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="NIT Nagaland" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'NIT_Goa')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="NIT Goa" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'NIT_Sikkim')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="NIT Sikkim" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'NIT_Karnataka')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="NIT Karnataka" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'NIT_Jamshedpur')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="NIT Jamshedpur" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'NIT_Durgapur')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="NIT Durgapur" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIIT_Allahabad')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIIT Allahabad" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIIT_Hyderabad')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIIT Hyderabad" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIIT_Jabalpur')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIIT Jabalpur" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIIT_Gwalior')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIIT Gwalior" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIIT_Kancheepuram')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIIT Kancheepuram" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}

else if($tit == 'Jaipur_Engineering_College')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Jaipur Engineering College" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'Engineering_College_Bikaner')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Engineering College Bikaner" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'Guru_Premsukh_Memorial_College_of_Engineering')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Guru Premsukh Memorial College of Engineering" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'MBM_Engineering_College')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="MBM Engineering College" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'Bharti_Vidyapeeth_College_of_Engineering')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Bharti Vidyapeeth College of Engineering" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'Jamia_Millia_Islamia ')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Jamia Millia Islamia " size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}


else if($tit == 'Netaji_Subash_Institute_of_Technology')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Netaji Subash Institute of Technology" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'Indira_Gandhi_Institute_of_Technology_New_Delhi')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Indira Gandhi Institute of Technology New Delhi" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'Guru_Tej_Bahadur_Institute_of_Technology')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Guru Tej Bahadur Institute of Technology" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'University_School_of_Information_Technology')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="University School of Information Technology" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'Maharaja_Surajmal_Institute_of_Technology')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Maharaja Surajmal Institute of Technology" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'Jaipur_National_University')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Jaipur National University" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIM_Raipur')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIM Raipur" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIM_Lucknow')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIM Lucknow" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIM_Benglore')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIM Benglore" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIM_Ranchi')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIM Ranchi" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIM_Udaypur')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIM Udaypur" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIM_Calcutta')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIM Calcutta" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIM_ROhtak')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIM ROhtak" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIM_Shilong')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIM Shilong" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIM_Indore')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIM Indore" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIM_Ahmedabad')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIM Ahmedabad" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'AIIMS_Rishikesh')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="AIIMS Rishikesh" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'AIIMS_New_Delhi')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="AIIMS New Delhi" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}

else if($tit == 'Government_Kilpauk_Medical_chennai')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Government Kilpauk Medical chennai" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'IIM_Ahmedabad')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="IIM Ahmedabad" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'AIIMS_Bhopal')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="AIIMS Bhopal" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'AIIMS_Bhubaneswar')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="AIIMS Bhubaneswar" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'Stanley_Medical_College')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Stanley Medical College" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'AIIMS_Jodhpur')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="AIIMS Jodhpur" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}

else if($tit == 'AIIMS_Patna')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="AIIMS Patna" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'AIIMS_Raipur')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="AIIMS Raipur" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'University_of_Aberdeen')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="University of Aberdeen" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'Harvard_University')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Harvard University" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'National_Chiao_Tung_University')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="National Chiao Tung University" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'MIT')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="MIT" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}

else if($tit == 'University_of_Cambridge')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="University of Cambridge" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}
else if($tit == 'Barbados_Community_College')
{
    $_SESSION['tit1'] = $tit;
    ?>
    <form class="clearfix" action="prediction.php" method="post">
                           
                    <label class="grey" for="email">Rating</label>
                    <input class="field" type="text" name="Barbados Community College" size="2" />
                 
                    <input type="submit" name="submit" value="submit" class="bt_register" />
    </form>
    <?php
}




mysql_close($con1);
?>



