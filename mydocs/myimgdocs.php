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
<title>My IMG Documents</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css"/>
 
<script src="js/demo-rtl.js"></script>
 
 
<link rel="stylesheet" type="text/css" href="css/libs/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css"/>
 
<link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css"/>
 
<link rel="stylesheet" type="text/css" href="css/libs/dataTables.fixedHeader.css">
<link rel="stylesheet" type="text/css" href="css/libs/dataTables.tableTools.css">
<script type="text/javascript" src="js/customalert.js"></script>
<link rel="stylesheet" type="text/css" href="css/customalert.css" />
<link rel="stylesheet" type="text/css" href="css/libs/magnific-popup.css">
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
		 
		   /* Img File validation */ 		  
		 if (form.imgfile.value == "") {
		    valid = false;
		    setColor(form.imgfile, bgBad);
		  
		  } else {
		    setColor(form.imgfile, bgGood);
		  }
		  
				  
		errmsg=errmsg+"\n\nPlease enter the fields marked with * ";
		
		if (!valid) 
			createCustomAlert(errmsg,"","Errors");
				
		return valid;
		}
		
	function CheckImgExt()
	{
		var fup = document.getElementById('imgfile');
     	var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "jpg" || ext == "png" || ext == "gif" || ext == "bmp" || ext == "JPG" || ext == "PNG" || ext == "GIF" || ext == "BMP")
			{
			return true;
			} 
		else
		{
			fileName="";
			error_img.innerHTML ="<img src='img/close.png' border='0'>&nbsp;&nbsp;Upload .jpg or .png or .gif or .bmp files only.";
			document.getElementById('imgfile').value="";
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
							<h1>My IMG Documents</h1>
							<?php
							if(isset($_GET['msg'])) 
								{
								$param=$_GET['msg'];
								if($param=="save")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Document Uploaded Successfully</strong></div></div>";
	
								if($param=="delete")
									echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Document Deleted Successfully</strong></div></div>";
									
								if($param=="sent")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Document Sent on your Email</strong></div></div>";
									 
								if($param=="sentzip")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>All IMG Docs Sent on your Email</strong></div></div>";	 
								}
							?>
							<div align="right">	
								<a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg"><i class="fa fa-plus-circle fa-lg"></i>Add Document</a>
								<a data-toggle="modal" href="myimgdocsactions.php?msg=sendzip" class="btn btn-primary btn-lg"><i class="fa fa-lg"></i>Send All IMGDOCS(.zip)</a>
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
											$db->sql("select * from tbl_myimgdocs order by id desc"); 
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
														 echo  "<td><a href='myimgdocs/$x[filename]' class='photo-box image-link' target='_blank'><b>". $x['docname']."</b></a></td>";
														 echo  "<td><a href='myimgdocsactions.php?name=$x[filename]&msg=sendonemail'><img src='img/email.png'></a></td>";
														 echo  "<td><a href='myimgdocsactions.php?id=$id&msg=deleteimgdoc'><img src='img/cross.png'></a></td>";
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
				<form name="pdfdoc" method="post" action="myimgdocsactions.php" onSubmit="return checkInput(this)"  enctype="multipart/form-data">
					<script>
					setTimeout(function () {error_img.innerHTML =""}, 10000);
					</script>
					<div class="form-group">
						<label for="email">*Document Name</label>
						<input type="text" class="form-control" id="docname" name="docname">
					</div>
					
					<div class="form-group">
						<label for="email">*IMG File :</label>
						<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
						<input name="imgfile" type="file" id="imgfile" class="form-control"  onchange="return CheckImgExt();">
						<DIV id="error_img" style="color:red;"></DIV>
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
<script src="js/jquery.magnific-popup.min.js"></script> 
<script>
$(document).ready(function() {
	
	var tableFixed = $('#table-example-fixed').dataTable({
		'info': false,
		'pageLength': 10
	});
	
	new $.fn.dataTable.FixedHeader( tableFixed );
	
	$('#gallery-photos-lightbox').magnificPopup({
		type: 'image',
		delegate: 'a',
		gallery: {
			enabled: true
	    }
	});
});
</script>

</body>
</html>