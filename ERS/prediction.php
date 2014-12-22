<?php header("refresh: 1800; url=http://localhost/ERS/prediction.php"); ?>
<?php 
// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['username'])) {
   
        header('Location: http://localhost/ERS/index1.php');
}
?>
<?php

$con = mysql_connect("localhost","root","");

  if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("news2", $con);

  $user = $_SESSION['username'];
  echo $user;
  echo "<br/>";

  $tit = $_SESSION['tit1'];
  echo $tit;
  echo "<br/>";
  
  if($tit == 'NIT_Raipur')  {  
    $sq2  = "UPDATE prediction SET NIT_Raipur = '$_POST[NIT_Raipur]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'MNIT_allahabad')  {  
    $sq2  = "UPDATE prediction SET MNIT_allahabad  = '$_POST[MNIT_allahabad]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
 else if($tit == 'NIT_Kurukshetra')  { 
    $sq2  = "UPDATE prediction SET NIT_Kurukshetra = '$_POST[NIT_Kurukshetra]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'MNIT_Bhopal')  {  
    $sq2  = "UPDATE prediction SET MNIT_Bhopal = '$_POST[MNIT_Bhopal]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'NIT_Patna')  { 
    $sq2  = "UPDATE prediction SET NIT_Patna = '$_POST[NIT_Patna]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'NIT_Warangal')  { 
    $sq2  = "UPDATE prediction SET NIT_Warangal = '$_POST[NIT_Warangal]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
 else if($tit == 'NIT_Trichy')  { 
    $sq2  = "UPDATE prediction SET NIT_Trichy = '$_POST[NIT_Trichy]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIT_Bhubaneswar')  { 
    $sq2  = "UPDATE prediction SET IIT_Bhubaneswar = '$_POST[IIT_Bhubaneswar]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIT_Bombay')  { 
    $sq2  = "UPDATE prediction SET IIT_Bombay = '$_POST[IIT_Bombay]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  

  else if($tit == 'IIT_Delhi')  {  
    $sq2  = "UPDATE prediction SET IIT_Delhi  = '$_POST[IIT_Delhi]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIT_Guwahati')  { 
    $sq2  = "UPDATE prediction SET IIT_Guwahati = '$_POST[IIT_Guwahati]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIT_Hyderabad')  {  
    $sq2  = "UPDATE prediction SET IIT_Hyderabad = '$_POST[IIT_Hyderabad]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIT_Indore')  { 
    $sq2  = "UPDATE prediction SET IIT_Indore = '$_POST[IIT_Indore]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIT_Jodhpur')  { 
    $sq2  = "UPDATE prediction SET IIT_Jodhpur = '$_POST[IIT_Jodhpur]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
 else if($tit == 'Engineering_College_Ajmer')  { 
    $sq2  = "UPDATE prediction SET Engineering_College_Ajmer = '$_POST[Engineering_College_Ajmer]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIT_BHU_Varanasi')  { 
    $sq2  = "UPDATE prediction SET IIT_BHU_Varanasi = '$_POST[IIT_BHU_Varanasi]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIT_Roorkee')  { 
    $sq2  = "UPDATE prediction SET IIT_Roorkee = '$_POST[IIT_Roorkee]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  }
  
  
  else if($tit == 'IIT_Patna')  {  
    $sq2  = "UPDATE prediction SET IIT_Patna  = '$_POST[IIT_Patna]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIT_Mandi')  { 
    $sq2  = "UPDATE prediction SET IIT_Mandi = '$_POST[IIT_Mandi]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIT_Madras')  {  
    $sq2  = "UPDATE prediction SET IIT_Madras = '$_POST[IIT_Madras]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIT_Kharagpur')  { 
    $sq2  = "UPDATE prediction SET IIT_Kharagpur = '$_POST[IIT_Kharagpur]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIT_Kanpur')  { 
    $sq2  = "UPDATE prediction SET IIT_Kanpur = '$_POST[IIT_Kanpur]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
 else if($tit == 'NIT_Delhi')  { 
    $sq2  = "UPDATE prediction SET NIT_Delhi = '$_POST[NIT_Delhi]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'NIT_Durgapur')  { 
    $sq2  = "UPDATE prediction SET NIT_Durgapur = '$_POST[NIT_Durgapur]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'NIT_Goa')  { 
    $sq2  = "UPDATE prediction SET NIT_Goa = '$_POST[NIT_Goa]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  

  else if($tit == 'NIT_Mizoram')  {  
    $sq2  = "UPDATE prediction SET NIT_Mizoram  = '$_POST[NIT_Mizoram]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'NIT_Nagaland')  { 
    $sq2  = "UPDATE prediction SET NIT_Nagaland = '$_POST[NIT_Nagaland]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'NIT_Jamshedpur')  {  
    $sq2  = "UPDATE prediction SET NIT_Jamshedpur = '$_POST[NIT_Jamshedpur]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'NIT_Sikkim')  { 
    $sq2  = "UPDATE prediction SET NIT_Sikkim = '$_POST[NIT_Sikkim]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'NIT_Karnataka')  { 
    $sq2  = "UPDATE prediction SET NIT_Karnataka = '$_POST[NIT_Karnataka]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  }   



 else if($tit == 'IIIT_Allahabad')  { 
    $sq2  = "UPDATE prediction SET IIIT_Allahabad = '$_POST[IIIT_Allahabad]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIIT_Gwalior')  {  
    $sq2  = "UPDATE prediction SET IIIT_Gwalior = '$_POST[IIIT_Gwalior]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIIT_Hyderabad')  { 
    $sq2  = "UPDATE prediction SET IIIT_Hyderabad = '$_POST[IIIT_Hyderabad]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIIT_Jabalpur')  { 
    $sq2  = "UPDATE prediction SET IIIT_Jabalpur = '$_POST[IIIT_Jabalpur]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
 else if($tit == 'IIIT_Kancheepuram')  { 
    $sq2  = "UPDATE prediction SET IIIT_Kancheepuram = '$_POST[IIIT_Kancheepuram]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'Netaji_Subash_Institute_of_Technology')  { 
    $sq2  = "UPDATE prediction SET Netaji_Subash_Institute_of_Technology = '$_POST[Netaji_Subash_Institute_of_Technology]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'Delhi_College_of_Engineering')  { 
    $sq2  = "UPDATE prediction SET Delhi_College_of_Engineering = '$_POST[Delhi_College_of_Engineering]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  

  else if($tit == 'University_School_of_Information_Technology')  {  
    $sq2  = "UPDATE prediction SET University_School_of_Information_Technology  = '$_POST[University_School_of_Information_Technology]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'Indira_Gandhi_Institute_of_Technology_New_Delhi')  { 
    $sq2  = "UPDATE prediction SET Indira_Gandhi_Institute_of_Technology_New_Delhi = '$_POST[Indira_Gandhi_Institute_of_Technology_New_Delhi]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'Bharti_Vidyapeeth_College_of_Engineering')  {  
    $sq2  = "UPDATE prediction SET Bharti_Vidyapeeth_College_of_Engineering = '$_POST[Bharti_Vidyapeeth_College_of_Engineering]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'Guru_Tej_Bahadur_Institute_of_Technology')  { 
    $sq2  = "UPDATE prediction SET Guru_Tej_Bahadur_Institute_of_Technology = '$_POST[Guru_Tej_Bahadur_Institute_of_Technology]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIT_Jodhpur')  { 
    $sq2  = "UPDATE prediction SET IIT_Jodhpur = '$_POST[IIT_Jodhpur]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
 else if($tit == 'Guru_Premsukh_Memorial_College_of_Engineering')  { 
    $sq2  = "UPDATE prediction SET Guru_Premsukh_Memorial_College_of_Engineering = '$_POST[Guru_Premsukh_Memorial_College_of_Engineering]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 

  else if($tit == 'Maharaja_Surajmal_Institute_of_Technology')  { 
    $sq2  = "UPDATE prediction SET Maharaja_Surajmal_Institute_of_Technology = '$_POST[Maharaja_Surajmal_Institute_of_Technology]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  }

  else if($tit == 'Engineering_College_Bikaner')  { 
    $sq2  = "UPDATE prediction SET Engineering_College_Bikaner = '$_POST[Engineering_College_Bikaner]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'MBM_Engineering_College')  { 
    $sq2  = "UPDATE prediction SET MBM_Engineering_College = '$_POST[MBM_Engineering_College]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  }
  
  
  else if($tit == 'Jaipur_National_University')  {  
    $sq2  = "UPDATE prediction SET Jaipur_National_University  = '$_POST[Jaipur_National_University]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'Jaipur_Engineering_College')  { 
    $sq2  = "UPDATE prediction SET Jaipur_Engineering_College = '$_POST[Jaipur_Engineering_College]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  
  else if($tit == 'IIM_Calcutta')  { 
    $sq2  = "UPDATE prediction SET IIM_Calcutta = '$_POST[IIM_Calcutta]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIM_Ahmedabad')  { 
    $sq2  = "UPDATE prediction SET IIM_Ahmedabad = '$_POST[IIM_Ahmedabad]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
 else if($tit == 'IIM_Benglore')  { 
    $sq2  = "UPDATE prediction SET IIM_Benglore = '$_POST[IIM_Benglore]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIM_Lucknow')  { 
    $sq2  = "UPDATE prediction SET IIM_Lucknow = '$_POST[IIM_Lucknow]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIM_Indore')  { 
    $sq2  = "UPDATE prediction SET IIM_Indore = '$_POST[IIM_Indore]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  

  else if($tit == 'IIM_Shilong')  {  
    $sq2  = "UPDATE prediction SET IIM_Shilong  = '$_POST[IIM_Shilong]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIM_ROhtak')  { 
    $sq2  = "UPDATE prediction SET IIM_ROhtak = '$_POST[IIM_ROhtak]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIM_Ranchi')  {  
    $sq2  = "UPDATE prediction SET IIM_Ranchi = '$_POST[IIM_Ranchi]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIM_Raipur')  { 
    $sq2  = "UPDATE prediction SET IIM_Raipur= '$_POST[IIM_Raipur]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIM_Udaypur')  { 
    $sq2  = "UPDATE prediction SET IIM_Udaypur = '$_POST[IIM_Udaypur]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  }



  else if($tit == 'AIIMS_New_Delhi')  { 
    $sq2  = "UPDATE prediction SET AIIMS_New_Delhi = '$_POST[AIIMS_New_Delhi]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
 else if($tit == 'AIIMS_Bhopal')  { 
    $sq2  = "UPDATE prediction SET AIIMS_Bhopal = '$_POST[AIIMS_Bhopal]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'AIIMS_Bhubaneswar')  { 
    $sq2  = "UPDATE prediction SET AIIMS_Bhubaneswar = '$_POST[AIIMS_Bhubaneswar]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'IIM_Indore')  { 
    $sq2  = "UPDATE prediction SET IIM_Indore = '$_POST[IIM_Indore]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  

  else if($tit == 'AIIMS_Jodhpur')  {  
    $sq2  = "UPDATE prediction SET AIIMS_Jodhpur  = '$_POST[AIIMS_Jodhpur]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'AIIMS_Patna')  { 
    $sq2  = "UPDATE prediction SET AIIMS_Patna = '$_POST[AIIMS_Patna]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'AIIMS_Raipur')  {  
    $sq2  = "UPDATE prediction SET AIIMS_Raipur = '$_POST[AIIMS_Raipur]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'AIIMS_Rishikesh')  { 
    $sq2  = "UPDATE prediction SET AIIMS_Rishikesh= '$_POST[AIIMS_Rishikesh]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 

  else if($tit == 'Stanley_Medical_College')  { 
    $sq2  = "UPDATE prediction SET Stanley_Medical_College = '$_POST[Stanley_Medical_College]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'Government_Kilpauk_Medical_chennai')  { 
    $sq2  = "UPDATE prediction SET Government_Kilpauk_Medical_chennai = '$_POST[Government_Kilpauk_Medical_chennai]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
 else if($tit == 'University_of_Cambridge')  { 
    $sq2  = "UPDATE prediction SET University_of_Cambridge = '$_POST[University_of_Cambridge]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'Harvard_University')  { 
    $sq2  = "UPDATE prediction SET Harvard_University = '$_POST[Harvard_University]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'University_of_Aberdeen')  { 
    $sq2  = "UPDATE prediction SET University_of_Aberdeen = '$_POST[University_of_Aberdeen]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  

  else if($tit == 'National_Chiao_Tung_University')  {  
    $sq2  = "UPDATE prediction SET National_Chiao_Tung_University  = '$_POST[National_Chiao_Tung_University]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'Barbados_Community_College')  { 
    $sq2  = "UPDATE prediction SET Barbados_Community_College = '$_POST[Barbados_Community_College]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  } 
  else if($tit == 'MIT')  { 
    $sq2  = "UPDATE prediction SET MIT = '$_POST[MIT]' WHERE username = '$user'";
    $rs = mysql_query($sq2);
  }




 
  echo "<br/>"." UPDATED "."<br/>";
  //echo $user;

  /*$pred1 = array();
  $u = 0;

   $I_array = array("MNIT_allahabad","MNIT_Bhopal","NIT_Kurukshetra","NIT_Raipur","NIT_Warangal","NIT_Patna","NIT_Trichy");
   $n = count($I_array); //number of institutes //


            $sq1= "SELECT * FROM prediction";
            $rs = mysql_query($sq1);
            while($row = mysql_fetch_array($rs))  
             {
                if($row['username'] == $user)
                {
           
                  for($i = 0; $i < $n;$i++)
                  {
                    if($row[$I_array[$i]] == 0)array_push($pred1, $I_array[$i]);
                  }
                 }else $u++;
               
              }

              $l1=count($pred1);
              $z = $l1;
             //for($i = 0;$i < $l;$i++) echo $pred[$i] ."<br/>";  // universities with non rated //

         $pvalue = array();    


   for($x = 0; $x < $l1;$x++)
   {
          $pred = array();
           $srm = "SELECT * FROM prediction";
            $rm = mysql_query($srm);
            while($row = mysql_fetch_array($rm))  
             {
                if($row['username'] == $user)
                {
           
                  for($i = 0; $i < $n;$i++)
                  {
                    if($row[$I_array[$i]] == 0)array_push($pred, $I_array[$i]);
                  }
                 }
               
              }
            $l=count($pred);
            //for($i = 0;$i < $l;$i++) echo $pred[$i] ."<br/>"; 

         

          $avg_rat = array();
          $ra_avg = 0.0;
          echo " Prediction For university " . $pred1[$x] . "<br/>"; //.......??........//
            $sq1= "SELECT * FROM prediction";
            $rs1 = mysql_query($sq1);
        
          while($row = mysql_fetch_array($rs1))  
          {
                 // echo  $row[$I_array[2]] . "<br/>" ;
                $sum = 0;
                if($row['username'] == $user)
                {
                  $sum1 = $row['MNIT_allahabad'] + $row['NIT_Raipur'] + $row['NIT_Warangal'] + $row['NIT_Patna'] + $row['NIT_Trichy'] + $row['MNIT_Bhopal'] + $row['NIT_Kurukshetra'];
                  $p = $n - $z ;   //.............TO BE CHANGED....... //
                  $ra_avg = $sum1/$p;
                }
                else 
                { 
                  for($k = 0;$k < $n;$k++)
                  {
                    $r = 0;
                    for($t = 0;$t < $l;$t++)
                    {
                         if($I_array[$k] == $pred[$t])break;
                         else $r++; 
                    }
                    if($r == $l){
                      //echo " sum added of univ = " . $I_array[$k]. "<br/>";
                            $sum += $row[$I_array[$k]];
                           
                      }
                  }
                  //echo  "sum = " .$sum . "<br/>";
                  $q = $n - $z ; //...............TO BE CHANGED ..........//
                  $a = $sum/$q;
                  array_push($avg_rat, $a);
                }
          }
         // echo "Avg of active user " . $ra_avg . "<br/>";
          //for($i = 0;$i < $u;$i++) echo $avg_rat[$i] ."<br/>"; // avg rating of each user on all universities//

//................ for similarity coffecient ..............//

          $sq1= "SELECT * FROM prediction";
          $rs1 = mysql_query($sq1);

           $sq2= "SELECT * FROM prediction";
          $rs2 = mysql_query($sq2);

          
          $f4 = 0.0;
          $k = 0;
          $WA  = array();

          
            while($row2 = mysql_fetch_array($rs2))   //for active user//
            {
              if($row2['username'] == $user)
              {
                while($row1 = mysql_fetch_array($rs1))  
                {
                  
                  $f1 = 0.0;
                  $s1 = 0.0;
                  $s2 = 0.0;
                  $f2 = 0.0;
                  $f3 = 0.0;
                    if($row1['username'] != $row2['username'])
                    {
                      //echo " k = " . $k .  "\t" . $row1['username'] ."\t  avg rating = ".  $avg_rat[$k] . "<br/>";
                      // for($j = 0;$j < $l;$j++)
                       //{
                          for($i = 0;$i < $n;$i++)
                          {
                               $r = 0;
                              for($t = 0;$t < $l;$t++)
                              {
                                   if($I_array[$i] == $pred[$t])break;
                                   else $r++; 
                              }
                              if($r == $l)
                              {                                  
                                      $p1 = $row2[$I_array[$i]] - $ra_avg;
                                      $p2 = $row1[$I_array[$i]] - $avg_rat[$k];
                                      $f1 += $p1*$p2;
                                      $s1 += $p1*$p1;
                                      $s2 += $p2*$p2;
                             }
                          }
                      $k++;
                      }
  
                    
                      $f2 = sqrt($s1);
                      $f3 = sqrt($s2);
                     // echo "f1 " . $f1 . "<br/>";
                      //echo "f2 " . $f2 . "<br/>";
                      //echo "f3 " . $f3 . "<br/>";
                      if($f2 != 0 || $f3 != 0){
                        $w = ($f1)/($f2*$f3);
                        //echo "WA " . $w . "<br/>";
                       array_push($WA, $w);
                      }

                    
                      //if($k > $n-1) break;
                  } 
              } 
            }
          //echo "similarity coff " . "<br/>";
          $wl = count($WA);
          //for($i = 0; $i < $wl;$i++) echo $WA[$i] . "\t" ;


 //............ for prediction value ..............//   

          //echo "FOr prediction ". $user . "<br/>";        
          $sq3= "SELECT * FROM prediction";
          $rs3 = mysql_query($sq3);

          $f5 = 0.0;
          $f6 = 0.0;
          $r1 = 0.0;
          $r2 = 0.0;
          $y = 0;
            while($row3 = mysql_fetch_array($rs3)) 
            {
             
              if( $row3['username'] != $user)
              {
                //echo   $row3['username'] . "\t " . $row3[$pred[$x] .  "\t" . $WA[$y] .  "<br/>";    //......????....//
                $r1 = $row3[$pred1[$x]] - $avg_rat[$y];    // ...........TO BE CHANGED.....????.....//
                $r2 = $WA[$y];
                $f5 += $r1*$r2;
                $f6 += $WA[$y];
                  $y++;
              }
            
            }
            $p =  $ra_avg + ($f5)/($f6);
            array_push($pvalue, $p);

            echo "prediction value = " . $p ."<br/>";

            $sq4= "SELECT * FROM prediction";
            $rs4 = mysql_query($sq4);

            while($row4 = mysql_fetch_array($rs4)) 
            {
             
              if( $row4['username'] == $user)
              {
                $s = $pred1[$x]; //............????............//
                echo $row4[$s];
                echo $p;
                $sq5  = "UPDATE prediction SET  $s = $p WHERE username = '$user'";
                $rs5 = mysql_query($sq5);
                break;
              }
            }

            $z--;
   }

        echo "<br/>";
        $srm = array();
        for($k = 0;$k < $l1;$k++)
        {
          $srm[$pred1[$k]] = $pvalue[$k];
        }  
        arsort($srm);
        foreach($srm as $x=>$x_value)
        {
          echo "Key=" . $x . ", Value=" . $x_value;
          echo "<br>";
        }
        */

      //}
        //echo $ra_avg;
// here we go -> for algo






  
  
echo " record added";
 //header( 'Location:http://localhost/ERS/index2.php' ) ;

mysql_close($con);
?> 
