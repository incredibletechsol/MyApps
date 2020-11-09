<?php
	include('conn.php');
	session_start();
	if (!isset($_SESSION['user_id'])){
	header('location:index.php');
	}
	?>
	<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Event System</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <link href="assets/css/component.css" rel="stylesheet" />
    <?php include('theme.php'); ?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <script type="text/javascript" src="assets/js/customalert.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/customalert.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/tcal.css" />
    <script type="text/javascript" src="assets/js/tcal.js"></script> 
    <style type="text/css">
	.img-500 
		{
		height : 100px;
		width  : 120px;
		}
			
	table 
		{
		table-layout: fixed;
		word-break: break-all;
		word-wrap: break-word;
		}
	</style>
	<?php include('zoom.php'); ?>
	</head>
	<body class="cbp-spmenu-push">
    <!-- MAIN HEADING-->
    <div class="color-bg-one" id="main-sec">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <h3 class="pad-adjust">Event Manager</h3>
                </div>
            </div>
        </div>
    </div>
    <!--END MAIN HEADING-->
	
    <!--LEFT SLIDE MENU-->
    <?php include('leftmenu.php'); ?>
    <!--END LEFT SLIDE MENU-->
	

    <!--List Of News and Events and Photo Galleries- Start -->
	<?php
	if(isset($_GET['msg']))
		{
		$param=$_GET['msg'];
		if($param == "listevents")
			{
	?>		
    <div class="container" id="home">
        <div class="row text-center">
            <div class="col-md-12">
				<div class="content-wrapper">
					 <div class="container">
						<div class="row">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2><a href="#" id="listnewsevents">Events List</a></h2>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover" id="dataTables-example"> 
											<thead>
												<tr>
													<th align="center">Date</th>
													<th>Event Name</th>
													<th>Message</th>
													<th align="center">Photo</th>
                                                    <th align="center">Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php
												include('conn.php');
												$fetch_details="select * from events order by date desc";	
												$details_rs= mysqli_query($con,$fetch_details);

												while($details_row = mysqli_fetch_array($details_rs)) 
													{
													  echo "<tr>";
													  echo "<td>".$details_row[1]."</td>";
													  $shortdesc=wordwrap($details_row[2],30,"<br>\n");
													  echo "<td>".$shortdesc."</td>";
													  $longdesc=wordwrap($details_row[3],30,"<br>\n");
													  echo "<td>".wordwrap($details_row[3],30,"<br/>")."</td>";
													  if($details_row[4]=="noimg.gif")
															{
															echo "<td><a href='images/noimg.gif' rel='lightbox1' class='effectable' title='$longdesc'><img src='images/noimg.gif' border='0' class='img-500'></a></td>";
															}
														else
															{	
															echo "<td><a href='eventpics/$details_row[4]' rel='lightbox1' class='effectable' title='$longdesc'><img src='eventpics/$details_row[4]' border='0' class='img-500'></a></td>";
															}
													  echo "<td><a href='actionpage.php?id=$details_row[0]&msg=edit'><img src='images/b_edit.png'></a>&nbsp;&nbsp;<a href='actionpage.php?id=$details_row[0]&msg=del'><img src='images/b_drop.png'></a></td>";
													  echo "</tr>";
													} 
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
            </div>
		</div>
    </div>
	<?php
	    }
	}	
	else
	{
	
	?>
	 <div class="container" id="home">
        <div class="row text-center">
            <div class="col-md-12">
				<div class="content-wrapper">
					 <div class="container">
						<div class="row">
							<div class="panel panel-default">
								<div class="panel-heading">
									<p align='left'><h2><a href="#" id="listnewsevents">Events List</a></h2></p>
									<?php
									date_default_timezone_set('Asia/Kolkata'); 
									include('conn.php');
									$query="SELECT eventdescription,date FROM `events` WHERE DAYOFYEAR(curdate()) <= dayofyear(`date`) AND DAYOFYEAR(curdate()) +25 >= dayofyear(`date`) order by MONTH(date) asc,DAY(date) asc LIMIT 30  ";
									$rs=mysqli_query($con,$query);

									$ename="";
									$date="";
									echo "<marquee behavior=scroll direction=up scrollamount=7 onmouseout=this.start() onmouseover=this.stop() scrolldelay=200>"; 
									echo "<font face='calibri'>";
									while($row=mysqli_fetch_array($rs))
									{
										$ename=$row[0];
										$date=$row[1];	
										$time = strtotime($date);
										$tommorow = mktime(date("H"), date("i"), date("s"), date("m"), date("d")+1, date("Y"));
										date_default_timezone_set('Asia/Kolkata'); 
										if(date('m-d') == date('m-d', $time)) 
											{ 
												echo "<fieldset>";
												echo "<b><img src='images/bullet.gif' border=0><font color='red'>".$ename."</font></b>";	
												echo "<br><font color='red'>$date(Today)</font><br>";
												echo "</fieldset>";
											} 
										else if(date('m-d', $time) == date("m-d", $tommorow))
											{ 
												echo "<fieldset>";
												echo "<b><img src='images/bullet.gif' border=0><font color='orange'>".$ename."</font></b>";	
												echo "<br><font color='orange'>$date(Tommorow)</font><br>";
												echo "</fieldset>";
											} 
										else
											{
												echo "<fieldset>";
												echo "<b><img src='images/bullet.gif' border=0>".$ename."</b>";	
												echo "<br>".$date."<br>";
												echo "</fieldset>";
											}	
									}
									echo "</font>";	
									echo "</marquee>";
									?>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover" id="dataTables-example"> 
											<thead>
												<tr>
													<th align="center">Date</th>
													<th>Event Name</th>
													<th>Message</th>
													<th align="center">Photo</th>
                                                    <th align="center">Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php
												include('conn.php');
												$fetch_details="select * from events order by id desc";	
												$details_rs= mysqli_query($con,$fetch_details);

												while($details_row = mysqli_fetch_array($details_rs)) 
													{
													  echo "<tr>";
													  echo "<td>".$details_row[1]."</td>";
													  $shortdesc=wordwrap($details_row[2],30,"<br>\n");
													  echo "<td>".$shortdesc."</td>";
													  $longdesc=wordwrap($details_row[3],30,"<br>\n");
													  echo "<td>".wordwrap($details_row[3],30,"<br/>")."</td>";
													  if($details_row[4]=="noimg.gif")
															{
															echo "<td><a href='images/noimg.gif' rel='lightbox1' class='effectable' title='$longdesc'><img src='images/noimg.gif' border='0' class='img-500'></a></td>";
															}
														else
															{	
															echo "<td><a href='eventpics/$details_row[4]' rel='lightbox1' class='effectable' title='$longdesc'><img src='eventpics/$details_row[4]' border='0' class='img-500'></a></td>";
															}
													  echo "<td><a href='actionpage.php?id=$details_row[0]&msg=edit'><img src='images/b_edit.png'></a>&nbsp;&nbsp;<a href='actionpage.php?id=$details_row[0]&msg=del'><img src='images/b_drop.png'></a></td>";
													  echo "</tr>";
													} 
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
            </div>
		</div>
    </div>
	<?php
	}
	?>
   
    <!--List Of News and Events and Photo Galleries- End -->
    
    <!--FOOTER SECTION -->
    <div class="for-full-back color-bg-one" id="footer">
        Copyright @ 2015 Designed & Developed by <a href="http://www.incredibletechsolve.com" target="_blank">Incredible Tech Solutions</a>
	</div>
    <!-- END FOOTER SECTION -->

    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap.js"></script>
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script src="assets/js/custom1.js"></script>
    </form>
</body>
</html>