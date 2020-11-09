<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<meta property="og:image" itemprop="image" content="http://dkkkpmba.com/MyApps/mydocs/img/sha.jpg" />
    <title>jQuery Bootstrap News plugin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="css/site.css" rel="stylesheet" type="text/css" />
   <script src="vendors/jquery/dist/jquery.min.js"></script>
	<script src="scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
</head>

<body>
	<br />
	<div class="container">
		<div class="row">
			
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-list-alt"></span><b>Upcoming Birthdays</b></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12">
								<ul class="demo1">
									<?php
									date_default_timezone_set('Asia/Kolkata'); 
									include('conn.php');
									$query="(SELECT name,birthdate,mobileno,emailid,id FROM `tbl_friends`
                                            WHERE MONTH(birthdate) = MONTH(NOW()) AND DAY(birthdate) = DAY(NOW()) 
                                            order by MONTH(birthdate) asc,DAY(birthdate) asc LIMIT 30)
                                            UNION
                                            (SELECT name,birthdate,mobileno,emailid,id  FROM tbl_friends WHERE DAYOFYEAR(curdate()) 
                                            <= dayofyear(`birthdate`) AND DAYOFYEAR(curdate()) +25 >= dayofyear(`birthdate`) order by MONTH(birthdate) asc,DAY(birthdate) asc LIMIT 30) ";
									$rs=mysqli_query($conn,$query);

									$name="";
									$bdate="";
									$message='May you find your favorite color on the rainbow and may it be the color of your happiness on your birthday.Happy Birthday-Amit Bhalerao';
									
									
									while($row=mysqli_fetch_array($rs))
									{
									$name=$row[0];
									$bdate=$row[1];	
									$mobilno=$row[2];
									$emailid=$row[3];
									$id=$row[4];
									$disdate= date("d M Y", strtotime($bdate));
									$time = strtotime($bdate);
									$tommorow = mktime(date("H"), date("i"), date("s"), date("m"), date("d")+1, date("Y"));
									$special = getIsSpecial($id);
									$mobno='91'.$mobilno;
									$whatsapplink = "https://wa.me/$mobno?text=$message";
									
									if(date('m-d') == date('m-d', $time)) 
										{ 
										echo "<li class='news-item'>"; 
										echo "<font face='calibri'>";
										echo "<table cellpadding='4'><tr>";
										echo "<td><a href='myfriendactions.php?msg=sendmsg&type=2&mobileno=$mobileno&emailid=$emailid&name=$name'><img src='img/user1.jpeg' width='60' class='img-circle'/></td>";
										echo "<td><b><font color='red'>".$name."</font></b><br><font color='red'>$disdate</a><a href='$whatsapplink' data-action='share/whatsapp/share'><img src='img/whatsapp.png' border='0'/></a></font></td>";	
										echo "</tr></table>";
										echo "</font>";	
										echo "</li>";
										} 
									else if(date('m-d', $time) == date("m-d", $tommorow))
										{ 
										echo "<li class='news-item'>"; 
										echo "<font face='calibri'>";
										echo "<table cellpadding='4'><tr>";
										echo "<td><img src='img/user2.jpeg' width='60' class='img-circle'/></td>";
										echo "<td><b><font color='orange'>".$name."</font></b><br><font color='orange'>$disdate</font>";	
											if($special == "true") {
										    echo  "<img src='img/star.png'/>";
										}
										echo  "</td>";  
										echo "</tr></table>";
										echo "</font>";	
										echo "</li>";
										} 
										
									else
										{
										echo "<li class='news-item'>"; 
										echo "<font face='calibri'>";
										echo "<table cellpadding='4'><tr>";
										echo "<td><img src='img/user.jpeg' width='60' class='img-circle'/></td>";
										echo "<td><b><font color='blue'>".$name."</font></b><br><font color='blue'>$disdate</font>";	
											if($special == "true") {
										    echo  "<img src='img/star.png'/>";
										}
										echo  "</td>";  
										echo "</tr></table>";
										echo "</font>";	
										echo "</li>";
										}	
										
									}
									
									function getIsSpecial($id){
									include('conn.php');
									$isSpecial = "false";
									$query="SELECT isSpecial FROM `tbl_friends` where id='$id' ";
									$rs=mysqli_query($conn,$query);
									while($row=mysqli_fetch_array($rs))
									    {
									        if($row[0]=='Y') 
									            $isSpecial = "true";
									        else
									            $isSpecial = "false";
									    }
									return $isSpecial;    
									}
								
									?>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			
		</div>
	</div>
	
<script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 5,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
		
    });
</script>


</body>

</html>