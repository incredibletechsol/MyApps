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
<title>My Payslips</title>

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
 <script type="text/javascript">

		function setColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
		function checkInput(form) 
		{
		  var bgBad = "yellow";
		  var bgGood = "lightyellow";
		  var valid = true;
		  var errmsg="";
		  
		  
		   /* Date validation */
		  if (form.salarydate.value == "") {
		    valid = false;
		    setColor(form.salarydate, bgBad);
		  
		  } else {
		    setColor(form.salarydate, bgGood);
		  }
		 
		   /* File validation */ 		  
		 if (form.payslipfile.value == "") {
		    valid = false;
		    setColor(form.payslipfile, bgBad);
		  
		  } else {
		    setColor(form.payslipfile, bgGood);
		  }
		  
		  
		errmsg=errmsg+"\n\nPlease enter the fields marked with * ";
		
		if (!valid) 
			createCustomAlert(errmsg,"","Errors");
			
			
			
		return valid;
		}
		
	function CheckExt()
	{
		var fup = document.getElementById('payslipfile');
     	var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "pdf" || ext == "PDF")
			{
			return true;
			} 
		else
		{
			fileName="";
			error_payslip.innerHTML ="<img src='img/close.png' border='0'>&nbsp;&nbsp;Upload .pdf files only.";
			document.getElementById('payslipfile').value="";
			fup.focus();
			return false;
		}
	}
	
	</script>

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
							<h1>My Payslips</h1>
							<?php
							if(isset($_GET['msg'])) 
								{
								$param=$_GET['msg'];
								if($param=="save")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Pay Slip Uploaded Successfully</strong></div></div>";
								if($param=="delete")
									echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Pay Slip Deleted Successfully</strong></div></div>";
								if($param=="sent")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Payslip Sent on your Email</strong></div></div>";
								if($param=="sentzip")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>All Payslips Sent on your Email</strong></div></div>";	 
								}
							?>
							<div align="right">	
								<a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg"><i class="fa fa-plus-circle fa-lg"></i>Add Payslip</a>
								<a data-toggle="modal" href="mypayslipactions.php?msg=sendzip" class="btn btn-primary btn-lg"><i class="fa fa-lg"></i>Send All Payslips(.zip)</a>
							</div>	
						</div>
					</div>
					

					<div class="row">
						<div class="col-lg-12">
							<div class="main-box clearfix">
								<div class="main-box-body clearfix">
									<div class="table-responsive">
										<?php
										 	$db = new Database();
											$db->connect();
											$db->sql("select id,DATE_FORMAT(date, '%b %y') mont,name from tbl_mypayslips order by date desc"); 
											$rs = $db->getResult();
											echo "<table id='table-example-fixed' class='table table-hover'>";
											echo "<thead>";
												echo "<tr>";
													echo "<th>Sr No</th>";
													echo "<th>Month</th>";
													echo "<th>Send On My Email</th>";
													echo "<th>Delete</th>";
												echo "</tr>";
											echo "</thead>";
											
										
											echo "<tbody>";
											$i=0;
												foreach($rs as $x) 
													{
													$i++;	
													 echo "<tr>";  
														 $id=$x['id'];
														 echo  "<td>". $i."</td>";
														 echo  "<td><a href='payslips/$x[name]' target='_blank'><b>". $x['mont']."</b></a></td>";
														 echo  "<td><a href='mypayslipactions.php?name=$x[name]&msg=sendonemail'><img src='img/email.png'></a></td>";
														 echo  "<td><a href='mypayslipactions.php?id=$id&msg=deletepayslip'><img src='img/cross.png'></a></td>";
													echo "</tr>"; 
													}
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add Payslip</h4>
			</div>
			<div class="modal-body">
				<form name="payslip" method="post" action="mypayslipactions.php" onSubmit="return checkInput(this)"  enctype="multipart/form-data">
					<script>
					setTimeout(function () {error_payslip.innerHTML =""}, 10000);
					</script>
					<div class="form-group">
						<label for="email">*Salary Date :</label>
						<input type="text" class="form-control" id="salarydate" name="salarydate">
					</div>
					
					<div class="form-group">
						<label for="email">*PDF File :</label>
						<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
						<input name="payslipfile" type="file" id="payslipfile" class="form-control"  onchange="return CheckExt();">
						<DIV id="error_payslip" style="color:red;"></DIV>
					</div>
				</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Save" name="savepayslip">
			</div>
			</form>
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