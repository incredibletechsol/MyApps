<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
    <title>jQuery Bootstrap News plugin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

</head>

<body>
	<br />
	<div class="container">
		<div class="row">
			
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-list-alt"></span><b>Upcoming Anniversaries</b></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12">
								<ul class="demo2">
									
									
									<?php
									date_default_timezone_set('Asia/Kolkata'); 
									include('conn.php');
									$query="(SELECT name,annvdate,mobileno,emailid,id FROM `tbl_friends`
                                            WHERE MONTH(annvdate) = MONTH(NOW()) AND DAY(annvdate) = DAY(NOW()) 
                                            order by MONTH(annvdate) asc,DAY(annvdate) asc LIMIT 30)
                                            UNION
                                            (SELECT name,annvdate,mobileno,emailid,id  FROM tbl_friends WHERE DAYOFYEAR(curdate()) 
                                            <= dayofyear(`annvdate`) AND DAYOFYEAR(curdate()) +25 >= dayofyear(`annvdate`) order by MONTH(annvdate) asc,DAY(annvdate) asc LIMIT 30)";
									$rs=mysqli_query($conn,$query);

									$name="";
									$adate="";
									
									
									while($row=mysqli_fetch_array($rs))
									{
									$name=$row[0];
									$adate=$row[1];	
									$mobileno=$row[2];
									$emailid=$row[3];
									$disdate1= date("d M Y", strtotime($adate));
									$time = strtotime($adate);
									$tommorow = mktime(date("H"), date("i"), date("s"), date("m"), date("d")+1, date("Y"));
									$mobno='91'.$mobileno;
									$message = 'Remember The Yesterdays.Plan Your Tomorrows.And Celebrate Your Today.Happy Anniversary-Amit Bhalerao';
									$whatsapplink = "https://wa.me/$mobno?text=$message";
										
									if(date('m-d') == date('m-d', $time)) 
										{ 
										echo "<li class='news-item'>"; 
										echo "<font face='calibri'>";
										echo "<table cellpadding='4'><tr>";
										echo "<td><a href='myfriendactions.php?msg=sendmsg&type=2&mobileno=$mobileno&emailid=$emailid&name=$name'><img src='img/user1.jpeg' width='60' class='img-circle'/></td>";
										echo "<td><b><font color='red'>".$name."</font></b><br><font color='red'>$disdate1</a><a href='$whatsapplink' data-action='share/whatsapp/share'><img src='img/whatsapp.png' border='0'/></a></font></td>";	
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
										echo "<td><b><font color='orange'>".$name."</font></b><br><font color='orange'>$disdate1</font></td>";	
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
										echo "<td><b><font color='blue'>".$name."</font></b><br><font color='blue'>$disdate1</font></td>";	
										echo "</tr></table>";
										echo "</font>";	
										echo "</li>";
										}	
										
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
        $(".demo2").bootstrapNews({
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