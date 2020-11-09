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
<title>My Letters</title>

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
		  
		  
		   /* Doc Name validation */
		  if (form.docname.value == "") {
		    valid = false;
		    setColor(form.docname, bgBad);
		  
		  } else {
		    setColor(form.docname, bgGood);
		  }
		 
		   /* Pdf File validation */ 		  
		 if (form.pdffile.value == "") {
		    valid = false;
		    setColor(form.pdffile, bgBad);
		  
		  } else {
		    setColor(form.pdffile, bgGood);
		  }
		  
				  
		errmsg=errmsg+"\n\nPlease enter the fields marked with * ";
		
		if (!valid) 
			createCustomAlert(errmsg,"","Errors");
			
			
			
		return valid;
		}
		
	function CheckPdfExt()
	{
		var fup = document.getElementById('pdffile');
     		var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "pdf" || ext == "PDF")
			{
			return true;
			} 
		else
		{
			fileName="";
			error_pdf.innerHTML ="<img src='img/close.png' border='0'>&nbsp;&nbsp;Upload .pdf files only.";
			document.getElementById('pdffile').value="";
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
							<h1>My Letters</h1>
							<?php
							if(isset($_GET['msg'])) 
								{
								$param=$_GET['msg'];
								if($param=="save")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Letter Uploaded Successfully</strong></div></div>";
								
								if($param=="delete")
									echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Letter Deleted Successfully</strong></div></div>";
								
								if($param=="sent")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Letter Sent on your Email</strong></div></div>";
									 
								if($param=="sentzip")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>All LETTERS Sent on your Email</strong></div></div>";	 
								}
							?>
							<div align="right">	
								<a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg"><i class="fa fa-plus-circle fa-lg"></i>Add Document</a>
								<a data-toggle="modal" href="mylettersactions.php?msg=sendzip" class="btn btn-primary btn-lg"><i class="fa fa-lg"></i>Send All LETTERS(.zip)</a>
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
											$db->sql("select * from tbl_myletters order by id desc"); 
											$rs = $db->getResult();
											echo "<table id='table-example-fixed' class='table table-hover'>";
											echo "<thead>";
												echo "<tr>";
													echo "<th>Sr No</th>";
													echo "<th>Document Name</th>";
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
														 echo  "<td><a href='myletters/$x[filename]' target='_blank'><b>". $x['docname']."</b></a></td>";
														 echo  "<td><a href='mylettersactions.php?name=$x[filename]&msg=sendonemail'><img src='img/email.png'></a></td>";
														 echo  "<td><a href='mylettersactions.php?id=$id&msg=deleteletter'><img src='img/cross.png'></a></td>";
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
				<h4 class="modal-title">Upload Document</h4>
			</div>
			<div class="modal-body">
				<form name="pdfdoc" method="post" action="mylettersactions.php" onSubmit="return checkInput(this)"  enctype="multipart/form-data">
					<script>
					setTimeout(function () {error_pdf.innerHTML =""}, 10000);
					</script>
					<div class="form-group">
						<label for="email">*Document Name</label>
						<input type="text" class="form-control" id="docname" name="docname">
					</div>
					
					<div class="form-group">
						<label for="email">*PDF File :</label>
						<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
						<input name="pdffile" type="file" id="pdffile" class="form-control"  onchange="return CheckPdfExt();">
						<DIV id="error_pdf" style="color:red;"></DIV>
					</div>
					
					
				</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Save" name="savedocument">
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

</body>
</html>