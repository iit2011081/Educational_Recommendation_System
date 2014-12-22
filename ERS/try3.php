<?php header("refresh: 1800; url=http://localhost/ERS/try3.php"); ?>
<?php


// Inialize session
//session_start();


if (!isset($_SESSION['username'])) {
        header('Location: index1.php');
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
  //echo $user;
  echo "<br/>";




//<?php
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
			//$result = mysql_query("SELECT * FROM domain where username = '$user_1'");

			/*$row2 = mysql_fetch_array($result);
			$count2 = 0;
		
			for( $i = 1; $i <= 10; $i++ )
			{
				if( $row2[$i] == "1" ) {
					$result_2 = mysql_query("SELECT distinct title,link,type_news from news_story WHERE type_news = '$catagory[$count2]' group by title ORDER BY date DESC LIMIT 3");
					$cat = strtoupper($catagory[$count2]) . " NEWS";
					echo "<font size=2 color='black' > $cat </font>";
					echo "<br />";
					while($row_2 = mysql_fetch_array($result_2))
			  		{
						$link_2 = urlencode($row_2['link']);
						$title_2 = $row_2['title'] ;
			  			$catagory_2 = $row_2['type_news'];

						echo "<a href='increment.php?x=$link_2&t=$title_2&z=$catagory_2' target=\"_blank\">$title_2</a>";	
						echo "<br />";
			
					}
				echo "<br />";
				}
	
				$count2++;
			}*/


  $pred1 = array();
  $u = 0;
  $zero = 0;
  $notzero = 0;
  $l2 = 0;
  $up = 10;
  $lw = 0;
  $p1 = 2;
  $lw1 = 0;
  $lw2 = 3;
  $pl1 = -1;
  $pl2 = 5;
  $pl3 = $p1;
   
   $I_array = array("MNIT_allahabad","MNIT_Bhopal","NIT_Kurukshetra","NIT_Raipur","NIT_Warangal","NIT_Patna","NIT_Trichy","IIT_Bhubaneswar","IIT_Bombay","IIT_Delhi","IIT_Guwahati","IIT_Hyderabad","IIT_Indore","IIT_Jodhpur","Engineering_College_Ajmer","IIT_BHU_Varanasi","IIT_Roorkee","IIT_Patna","IIT_Mandi","IIT_Madras","IIT_Kharagpur","IIT_Kanpur","NIT_Delhi","NIT_Durgapur","NIT_Goa","NIT_Mizoram","NIT_Nagaland","NIT_Jamshedpur","NIT_Sikkim","NIT_Karnataka","IIIT_Allahabad","IIIT_Gwalior","IIIT_Hyderabad","IIIT_Jabalpur","IIIT_Kancheepuram","Engineering_College_Bikaner","MBM_Engineering_College","Jaipur_National_University","Jaipur_Engineering_College","IIM_Calcutta","IIM_Ahmedabad","IIM_Benglore","IIM_Lucknow","IIM_Indore","IIM_Shilong","IIM_ROhtak","IIM_Ranchi","IIM_Raipur","IIM_Udaypur","AIIMS_New_Delhi","AIIMS_Bhopal","AIIMS_Bhubaneswar","AIIMS_Jodhpur","AIIMS_Patna","AIIMS_Raipur","AIIMS_Rishikesh","Stanley_Medical_College","Government_Kilpauk_Medical_chennai","University_of_Cambridge","Harvard_University","University_of_Aberdeen","National_Chiao_Tung_University","Barbados_Community_College","MIT");


$x1 = 0;
///$var = 1;
   $n = count($I_array); //number of institutes //

              function count_digit($aps)  {
                    return strlen((string)$aps);
              }


            $sq1= "SELECT * FROM prediction";
            $rs = mysql_query($sq1);
            while($row = mysql_fetch_array($rs))  
             {
                if($row['username'] == $user)
                {
                  $cpd = 0;  
                  for($i = 0; $i < $n; $i++)  {
                        $as = $row[$I_array[$i]];
                        $ash = count_digit($as);
                        if($as == 0)  {$cpd++;}
                        if($ash > 3)  {
                            $row[$I_array[$i]] = 0;
                            $sqp ="UPDATE prediction SET $I_array[$i] = 0 WHERE username = '$user'";
                            $sqp1 = mysql_query($sqp);
                            //echo $row[$I_array[$i]] . "<br/>";
                        }
                  }  
                  if($cpd == $n)  {
                    $var = 0;
                  } else {
                    $var = 1;
                  }

                  for($i = 0; $i < $n;$i++)
                  {
                    if($row[$I_array[$i]] == 0) { 
                        $zero++; array_push($pred1, $I_array[$i]);
                      } else {
                        $notzero++;
                        //$as = $row[$I_array[$i]];
                        //$ash = count_digit($as);
                        //if($ash > 3)  {
                          //$notzero++;
                          //$l2++;
                          ///  array_push($pred1, $I_array[$i]);
                           // echo $pred1[0] . " -> " . $I_array[$i] . "<br/>";
                        //}
                      } 
                  }
                 } else $u++;
               
              }
    if($var == 1)  {
             $l1= count($pred1);
             //$l1 = $l1 + $l2;
             //$l1 = $zero;
             //echo  $l1 ." - > " .$notzero . "<br/>";


           


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
                                  //$ash = count_digit($row[$I_array[$i]]);
                                  if($row[$I_array[$i]] == 0)array_push($pred, $I_array[$i]);
                                }
                               }
                             
                            }
                          $l=count($pred);
                          //for($i = 0;$i < $l;$i++) echo $pred[$i] ."<br/>"; 

                       //echo "infinrehkjdenhjk". "<br/>";

                        $avg_rat = array();
                        $ra_avg = 0.0;
                      //  echo " Prediction For university " . $pred1[$x] . "<br/>"; //.......??........//
                          $sq1= "SELECT * FROM prediction";
                          $rs1 = mysql_query($sq1);
                      
                        while($row = mysql_fetch_array($rs1))  
                        {
                          
                                //echo  $row[$I_array[2]] . "<br/>" ;
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
                            //echo $x1."<br/>";
                            $x1++;
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
                          
                          /*if($p >= $up)  {
                               $p = $p - ($p / $p1); 
                          }*/
                          
                          
                          if($p < $lw1)  {
                            $p = $pl1*$p + $pl3;
                          }
                          if($p < $lw2) {
                            $p = $p + $pl2;
                          }
                          while($p >= $up)  {
                               $p = $p - ($p / $p1); 
                          }
                          

                          
                          array_push($pvalue, $p);

                         // echo "prediction value = " . $p ."<br/>";

                          $sq4= "SELECT * FROM prediction";
                          $rs4 = mysql_query($sq4);

                          while($row4 = mysql_fetch_array($rs4)) 
                          {
                           
                            if( $row4['username'] == $user)
                            {
                              $s = $pred1[$x]; //............????............//
                              //echo $row4[$s];
                              //echo $p;
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
                  rsort($srm);
                  
                 /*for($k = 0;$k < $l1;$k++)
                  {
                    echo  $pred1[$k] . " -> ". $pvalue[$k]. " <br/> ";
                  }*/  
               
                  //$ar1 = array(10, 100, 100, 0);
                  //$ar2 = array(1, 3, 2, 4);
                  array_multisort($pvalue, $pred1);
                  //echo "<br/>"."<br/>" ; 
                  $tpred1 = array();
                  $tpvalue = array();
                    
                  for($k = 0;$k < $l1;$k++)
                  {
                   // echo  $pred1[$k] . " -> ". $pvalue[$k]. " <br/> ";
                    $tpred1[$k] = $pred1[$k];
                    $tpvalue[$k] = $pvalue[$k];
    
                   }   
                  //echo "<br/>"."<br/>";
                  $i = 0;  
                  for($k = $l1-1;$k >= 0;$k--)
                  {
                    $pred1[$i] = $tpred1[$k];
                    $pvalue[$i] = $tpvalue[$k];
                    $i++;  
                  } 

                   for($k = 0;$k < $l1;$k++)
                  {
                    //echo  $pred1[$k] . " -> ". $pvalue[$k]. " <br/> ";
                   } 

                  //var_dump($ar1);
                  //var_dump($ar2);
              
              $result = "SELECT * FROM news_story";
              $rs4 = mysql_query($result);
              $th = 10;
              $lp = 0;
              foreach($pvalue as $x=>$x_value)
                {
                  //rsort($srm);
                  if($lp < $th) {
                    //echo "Key=" . $x . ", Value=" . $x_value;
                    //echo "<br>";
                  $result = "SELECT * FROM news_story";
                  $rs4 = mysql_query($result);
                  while($row2 = mysql_fetch_array($rs4))
                  {
                    $link2 = urlencode($row2['link']);
                    $title2 = $row2['title'] ;
                    $catagory2 = $row2['type_news'];
                
                        if($pred1[$x] == $title2)
                        {
                          echo "<a href='increment.php?x=$link2&t=$title2&z=$catagory2' target=\"_blank\">$title2</a>";
                          echo "<br />";
                          //echo "<br />";
                          //break;
                        }
                    }
                    $lp++;
                    echo "<br>";
                  }
                    //echo "<br />";
                  }
           }      


   /*     echo "<br/>";
        $srm = array();
        for($k = 0;$k < $l1;$k++)
        {
          $srm[$pred1[$k]] = $pvalue[$k];
        }  
        arsort($srm);
       
		$result = "SELECT * FROM news_story";
		$rs4 = mysql_query($result);
		foreach($srm as $x=>$x_value)
	    {
	    	  //echo "Key=" . $x . ", Value=" . $x_value;
        	  //echo "<br>";
				while($row2 = mysql_fetch_array($rs4))
				{
					$link2 = urlencode($row2['link']);
					$title2 = $row2['title'] ;
					$catagory2 = $row2['type_news'];
			
	        		if($x == $title2)
	        		{
	        			echo "<a href='increment.php?x=$link2&t=$title2&z=$catagory2' target=\"_blank\">$title2</a>";
	        			echo "<br />";
	        			echo "<br />";
	        			break;
	        		}
        	}
        	//echo "<br />";
        }
*/




mysql_close($con);
			?>


