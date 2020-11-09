<?php
									date_default_timezone_set('Asia/Kolkata'); 
									include('conn.php');
									$query="SELECT id,name,birthdate,mobileno,emailid  FROM tbl_friends WHERE DAYOFYEAR(curdate()) 
									<= dayofyear(`birthdate`) AND DAYOFYEAR(curdate()) +25 >= dayofyear(`birthdate`) order by MONTH(birthdate) asc,DAY(birthdate) 
									asc LIMIT 30";
									$rs=mysqli_query($conn,$query);

									$name="";
									$bdate="";
									$message='May you find your favorite color on the rainbow and may it be the color of your happiness on your birthday.Happy Birthday-Amit Bhalerao';
									
									
									while($row=mysqli_fetch_array($rs))
									{
							        $str=$row[1];
                                	$mobno=$row[3];	
                                	$emailid=$row[4];
                                        $birthdate=$row[2];
                                	$time = strtotime($birthdate);
                                	$tommorow = mktime(date("H"), date("i"), date("s"), date("m"), date("d")+1, date("Y"));
                                    $name1=explode(" ",$str);
                                    $name=$name1[0];
                                    $time = strtotime($birthdate);
                                    $mess = 'Happy Birthday!!! Wish you a many many happy returns of the day-Amit Bhalerao';
                                
                                    if(date('m-d') == date('m-d', $time))  
                                       {  
                                        echo $str;
                                       }
									}
?>