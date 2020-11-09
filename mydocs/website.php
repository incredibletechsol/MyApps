<?php
 include('logincommon.php'); 
 include('classes/crud.php');
?>
	
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Website Backup</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css"/>
 
<script src="js/demo-rtl.js"></script>
 
 
<link rel="stylesheet" type="text/css" href="css/libs/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css"/>
 
<link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css"/>
 
<link rel="stylesheet" type="text/css" href="css/libs/dataTables.fixedHeader.css">
<link rel="stylesheet" type="text/css" href="css/libs/dataTables.tableTools.css">
<script type="text/javascript" src="js/customalert.js"></script>
<link rel="stylesheet" type="text/css" href="css/customalert.css" />
<link rel="stylesheet" href="css/default.css" type="text/css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<script>
setTimeout(function () {SUCCESS.innerHTML =""}, 10000);
</script>	
<div id="theme-wrapper">
<?php include('header.php'); ?>
	<div id="page-wrapper" class="container">
		<div class="row">
			<?php include('leftsidebar.php'); ?>
		</div>
		<div id="content-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<h1>Website Backup</h1>
							<?php
							if(isset($_GET['msg'])) 
								{
								$param=$_GET['msg'];
								if($param=="sent")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Backup Sent on your Email</strong></div></div>";
								if($param=="done")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Download Started....</strong></div></div>";	 
								}
							?>
					
						</div>
					</div>
					

					<div class="row">
						<div class="col-lg-12">
							<div class="main-box clearfix">
								<div class="main-box-body clearfix">
									<div class="table-responsive">
										<?php
											echo "<table id='table-example-fixed' class='table table-hover'>";
											echo "<thead>";
												echo "<tr>";
												    echo "<th>Description</th>";
													echo "<th>Send On My Email</th>";
													echo "<th>Download Full Backup</th>";
												echo "</tr>";
											echo "</thead>";
    											echo "<tbody>";
        											echo "<tr>"; 
            											echo "<td>Maharashtra Institute Of Management </td>";
            							    		    echo "<td><a href='http://www.dkkkpmba.com/backup/projectbackup/mim.php'><img src='img/email.png'></a></td>";
            							    		    echo "<td><a class='btn' href='backupactions.php?msg=mim'><i class='fa fa-download'></i> Download</a></td>";
        											echo "</tr>"; 
        											echo "<tr>"; 
            											echo "<td>Late Babasaheb Phadtare Polytechnic </td>";
            							    		    echo "<td><a href='http://www.dkkkpmba.com/backup/projectbackup/bpp.php'><img src='img/email.png'></a></td>";
            							    		    echo "<td><a class='btn' href='backupactions.php?msg=bpp'><i class='fa fa-download'></i> Download</a></td>";
        											echo "</tr>"; 
        											echo "<tr>"; 
            											echo "<td>औद्योगिक प्रशिक्षण संस्था  </td>";
            							    		    echo "<td><a href='http://www.dkkkpmba.com/backup/projectbackup/iti.php'><img src='img/email.png'></a></td>";
            							    		    echo "<td><a class='btn' href='backupactions.php?msg=iti'><i class='fa fa-download'></i> Download</a></td>";
        											echo "</tr>"; 
        											echo "<tr>"; 
            											echo "<td>Late Sahebrao Phadtare Junior College Science  </td>";
            							    		    echo "<td><a href='http://www.dkkkpmba.com/backup/projectbackup/lsps.php'><img src='img/email.png'></a></td>";
            							    		    echo "<td><a class='btn' href='backupactions.php?msg=lsps'><i class='fa fa-download'></i> Download</a></td>";
        											echo "</tr>"; 
        											echo "<tr>"; 
            											echo "<td>Vyankateshwara English Medium School  </td>";
            							    		    echo "<td><a href='http://www.dkkkpmba.com/backup/projectbackup/svems.php'><img src='img/email.png'></a></td>";
            							    		    echo "<td><a class='btn' href='backupactions.php?msg=svems'><i class='fa fa-download'></i> Download</a></td>";
        											echo "</tr>"; 
        											echo "<tr>"; 
            											echo "<td>Kikale Associates  </td>";
            							    		    echo "<td>---</td>";
            							    		    echo "<td><a class='btn' href='backupactions.php?msg=kikale'><i class='fa fa-download'></i> Download</a></td>";
        											echo "</tr>"; 
        											echo "<tr>"; 
            											echo "<td>IHSDP SATARA  </td>";
            							    		    echo "<td>---</td>";
            							    		    echo "<td><a class='btn' href='backupactions.php?msg=ihsdp'><i class='fa fa-download'></i> Download</a></td>";
        											echo "</tr>";
        											echo "<tr>"; 
            											echo "<td>Constro-Q-Check Labs  </td>";
            							    		    echo "<td>---</td>";
            							    		    echo "<td><a class='btn' href='backupactions.php?msg=constroqchecklab'><i class='fa fa-download'></i> Download</a></td>";
        											echo "</tr>";
        											echo "<tr>"; 
            											echo "<td>Kasturi Collection  </td>";
            							    		    echo "<td>---</td>";
            							    		    echo "<td><a class='btn' href='backupactions.php?msg=kasturicollection'><i class='fa fa-download'></i> Download</a></td>";
        											echo "</tr>";
        											echo "<tr>"; 
            											echo "<td>Vinayak Electricals  </td>";
            							    		    echo "<td>---</td>";
            							    		    echo "<td><a class='btn' href='backupactions.php?msg=vinayakele'><i class='fa fa-download'></i> Download</a></td>";
        											echo "</tr>";
    											echo "</tbody>";  
											echo "</table>";
										?>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>	
			</div>
		</div>
	</div>
</div>




<?php include('settings.php'); ?>
  
<script src="js/demo-skin-changer.js"></script>  
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.nanoscroller.min.js"></script>
<script src="js/demo.js"></script>  
 
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.fixedHeader.js"></script>
<script src="js/dataTables.tableTools.js"></script>
<script src="js/jquery.dataTables.bootstrap.js"></script>
 
<script src="js/scripts.js"></script>
<script src="js/pace.min.js"></script>
 
<script>
$(document).ready(function() {
	
	
	var tableFixed = $('#table-example-fixed').dataTable({
		'info': false,
		'pageLength': 10
	});
	
	new $.fn.dataTable.FixedHeader( tableFixed );
});
</script>
 <script type="text/javascript" src="js/zebra_datepicker.js"></script>
<script type="text/javascript" src="js/core.js"></script>
</body>
</html>