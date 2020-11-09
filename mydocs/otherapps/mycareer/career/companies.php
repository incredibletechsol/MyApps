<?php
 include('classes/crud.php');
?>
<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<title>IT Companies In Pune</title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap\dist\css\bootstrap.min.css" rel="stylesheet">
<link href="../plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
<!-- Menu CSS -->
<link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css\animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css\style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css\colors\megna.css" id="theme" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="http://www.w3schools.com/lib/w3data.js"></script>
<script type="text/javascript" src="js/customalert.js"></script>
<link rel="stylesheet" type="text/css" href="css/customalert.css" />
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
		  
		    /* Name  validation */ 		  
		 if (form.name.value == "" || form.name.value.trim().length==0) {
		    valid = false;
		    setColor(form.name, bgBad);
		  
		  } else {
		    setColor(form.name, bgGood);
		  }
		  
		   /* Name  validation */ 		  
		 if (form.area.value == "" || form.area.value.trim().length==0) {
		    valid = false;
		    setColor(form.area, bgBad);
		  
		  } else {
		    setColor(form.area, bgGood);
		  }
		 	  
		  
		  
		 
		   
			//E-mail field should accept valid characters only.
			if (document.login.UserName.value != " ")
			{
				var checkOK="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-@._";
				var checkStr = document.login.UserName.value;
				var allValid = 'true';
				for (i = 0;  i < checkStr.length+1;  i++)
				{
		
				ch = checkStr.charAt(i);
					for (j = 0;  j < checkOK.length+1;  j++)
					{
						if (ch == checkOK.charAt(j))
						break;
						if (j == checkOK.length)
						{
							allValid = 'false';
							break;
						}
					}
				}
			}
			//E-mail id must have '@'
			if(document.login.UserName.value != "")
			{
				var val=document.login.UserName.value ;
				var pass1=val.indexOf('@',0);
				if(pass1==-1)
				{
					//alert("Not a valid E-Mail Address");
					createCustomAlert("Not a valid E-Mail Address","","Errors");
		
					document.login.UserName.value="";
					document.login.UserName.focus();
					return false;
				}
			}
			//E-mail id must have '.'
			if(document.login.UserName.value != "")
			{
				var val=document.login.UserName.value ;
				var pass2=val.indexOf('.',0);
				if(pass2==-1)
				{
					//alert("Not a valid E-Mail Address");
					createCustomAlert("Not a valid E-Mail Address","","Errors");
					document.login.UserName.value="";
					document.login.UserName.focus();
					return false;
				}
				if((pass2 - pass1)== 1)
				{
					//alert("Not a valid E-Mail Address");
					createCustomAlert("Not a valid E-Mail Address","","Errors");
					document.login.UserName.value="";
					document.login.UserName.focus();
					return false;
				}
			}
			//E-mail id should have only @,.,_ and - with the letters and digits
			if (!allValid)
			{
				createCustomAlert("Please enter only letters, digits,and \"@\"  \"_\"  \".\"  \"-\"  characters in the \"EMail\" field.","Errors");
				document.login.UserName.focus();
				return false;
			}
		 
		  
		errmsg=errmsg+"\n\nPlease enter the fields marked with * ";
		
		if (!valid) 
			createCustomAlert(errmsg,"","Errors");
			
			
			
		return valid;
		}
		
		
		function isNumberKey(evt)
		       {
		          var chCode = (evt.which) ? evt.which : event.keyCode
		          if (chCode != 46 && chCode > 31 
		            && (chCode < 48 || chCode > 57))
		             return false;
		          else
		          return true;
		       }
		       
		       function isAlpha(keyCode)
		        {
		            return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
		        }
	</script>
	

</head>
<body>
<script>
setTimeout(function () {SUCCESS.innerHTML =""}, 10000);
</script>	
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
 
 
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
    
      <!-- /row -->
      <div class="row">
 
        <div class="col-sm-12">
          <div class="white-box">
            <img src="img\logo.png" border="0">
			<?php
			if(isset($_GET['msg'])) 
				{
				$param=$_GET['msg'];
				if($param=="save")
					 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Company Details Saved Successfully</strong></div></div>";
				if($param=="update")
					  echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Company Details Updated Successfully</strong></div></div>";
				if($param=="delete")
					echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Company Details Deleted Successfully</strong></div></div>";
				}
			?>
			<div align="right">	
				<a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg"><i class="fa fa-plus-circle fa-lg"></i>Add Company</a>
			</div>	<br>
             <div class="table-responsive">
				<?php
				$db = new Database();
				$db->connect();
				$db->select('tbl_pune_it_companies','*',NULL,NULL,NULL,NULL); 
				$rs = $db->getResult();
				echo " <table id='example23' class='display nowrap' cellspacing='0' width='100%'>";
				echo "<thead>";
					echo "<tr>";
						echo "<th>Company Name</th>";
						echo "<th>Area</th>";
						echo "<th>Address</th>";
						echo "<th>Website</th>";
						echo "<th>Email Id</th>";
						echo "<th>Contact No</th>";
						echo "<th>Technologies</th>";
						echo "<th>Domains</th>";
						echo "<th>Company Type</th>";
						echo "<th>Edit</th>";
						echo "<th>Delete</th>";
					echo "</tr>";
				echo "</thead>";
				

				echo "<tbody>";
					foreach($rs as $x) 
						{
						 echo "<tr>";  
							 $id=$x['cmpny_id'];
							 $domain=$x['cmpny_website'];
							 $address= wordwrap($x['cmpny_address'],35,"<br>\n");
							 echo  "<td>". $x['cmpny_name']."</td>";
							 echo  "<td>". $x['cmpny_area_location']."</td>";
							 echo  "<td>". $address."</td>";
							 echo  "<td><a href='http://$domain' target='_blank'>". $x['cmpny_website']."</a></td>";
							 echo  "<td>". $x['cmpny_emailid']."</td>";
							 echo  "<td>". $x['cmpny_contactno']."</td>";
							 echo  "<td>". $x['cmpny_technologies']."</td>";
							 echo  "<td>". $x['cmpny_domain_areas']."</td>";
							 echo  "<td>". $x['cmpny_type']."</td>";
							 echo  "<td><a href='companies.php?id=$id&msg=editcmpny'><img src='img/edit.png'></a></td>";
							 echo  "<td><a href='companyactions.php?id=$id&msg=deletecmpny'><img src='img/cross.png'></a></td>";
						echo "</tr>"; 
						}
				echo "</tbody>";  
				echo "</table>";

				?>
			</div>
			
			<?php
					if(isset($_GET['msg'])) 
					{
					$param=$_GET['msg'];
					
					if($param  == "editcmpny")
						{
						$db1 = new Database();
						$db1->connect();
						$id=$_GET['id'];
						$db1->sql("SELECT * FROM tbl_pune_it_companies td where td.cmpny_id='$id'");
						$res = $db1->getResult();
						foreach($res as $x) 
							{
							$name=$x['cmpny_name'];
							$area=$x['cmpny_area_location'];
							$address=$x['cmpny_address'];
							$website=$x['cmpny_website'];
							$emailid=$x['cmpny_emailid'];
							$contact=$x['cmpny_contactno'];
							$technologies=$x['cmpny_technologies'];
							$domains=$x['cmpny_domain_areas'];
							$type=$x['cmpny_type'];
							}
					?>

					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Edit Company Details</h4>
							</div>
							<div class="modal-body">
								<form name="login" method="post" action="companyactions.php" onSubmit="return checkInput(this)">
								<input type="hidden" name="updatefriend" value="updatecmpny">
								<input type="hidden" name="id" value="<?php echo $id; ?>">
									<div class="form-group">
										<label for="name">*Company Name</label>
										<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $name; ?>">
									</div>
									
									<div class="form-group">
										<label for="name">*Company Area/Location</label>
										<input type="text" class="form-control" id="area" placeholder="Enter Area/Location" name="area" value="<?php echo $area; ?>">
									</div>
									
									<div class="form-group">
										<label for="name">Company Address</label>
										  <textarea class="form-control" rows="5" name="address"><?php echo $address; ?></textarea>
									</div>
								
									<div class="form-group">
										<label for="name">Company Website</label>
										<input type="text" class="form-control" id="website" placeholder="Enter Website" name="website" value="<?php echo $website; ?>">
									</div>
									
									<div class="form-group">
										<label for="email">Email Id</label>
										<input type="text" class="form-control" id="UserName" placeholder="Email Id" name="UserName" value="<?php echo $emailid; ?>">
									</div>
									
									<div class="form-group">
										<label for="email">Contact No :</label>
										<input type="text" class="form-control" id="contact" placeholder="Contact No" name="contact" onkeypress="return isNumberKey(event)" value="<?php echo $contact; ?>">
									</div>
									
									<div class="form-group">
										<label for="email">Technologies :</label>
										<input type="text" class="form-control" id="technolgies" name="technolgies" value="<?php echo $technologies; ?>">
									</div>
									
									<div class="form-group">
										<label for="email">Domain Areas :</label>
										<input type="text" class="form-control" id="domains"  name="domains" value="<?php echo $domains; ?>">
									</div>
									
									<div class="form-group">
										<label for="type">Company Type :</label>
										
										 <select class="form-control" name="type">
										  <?php
												$typeOptions  = array('Not Specified', 'Service','Product','Service and Product','Captive');
												foreach($typeOptions as $option){
													if($type == $option){
														echo "<option selected='selected' value='$option'>$option</option>" ;
													}else{
														echo "<option value='$option'>$option</option>" ;
													}
												}
											?>
										 </select>
										 									
									
								</div>
							<div class="modal-footer">
								<input type="submit" class="btn btn-primary" value="Update" name="updatecmpny">
							</div>
							</form>
						</div> 
					</div> 

					<?php	
						}
					}
					?>
			
			
          </div>
        </div>
		
		
		
      </div>
  
    </div>
  
  </div>
  <!-- /#page-wrapper -->
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add Company Details</h4>
			</div>
			<div class="modal-body">
				<form name="login" method="post" action="companyactions.php" onSubmit="return checkInput(this)">
					<div class="form-group">
						<label for="name">*Company Name</label>
						<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
					</div>
					
					<div class="form-group">
						<label for="name">*Company Area/Location</label>
						<input type="text" class="form-control" id="area" placeholder="Enter Area/Location" name="area">
					</div>
					
					<div class="form-group">
						<label for="name">Company Address</label>
						  <textarea class="form-control" rows="5" name="address"></textarea>
					</div>
				
					<div class="form-group">
						<label for="name">Company Website</label>
						<input type="text" class="form-control" id="website" placeholder="Enter Website" name="website">
					</div>
					
					<div class="form-group">
						<label for="email">Email Id</label>
						<input type="text" class="form-control" id="UserName" placeholder="Email Id" name="UserName">
					</div>
					
					<div class="form-group">
						<label for="email">Contact No :</label>
						<input type="text" class="form-control" id="contact" placeholder="Contact No" name="contact" onkeypress="return isNumberKey(event)" >
					</div>
					
					<div class="form-group">
						<label for="email">Technologies :</label>
						<input type="text" class="form-control" id="technolgies" name="technolgies">
					</div>
					
					<div class="form-group">
						<label for="email">Domain Areas :</label>
						<input type="text" class="form-control" id="domains"  name="domains">
					</div>
					
					<div class="form-group">
						<label for="type">Company Type :</label>
						 <select class="form-control" name="type">
						    <option value="">Not Specified</option>
							<option value="Service">Service</option>
							<option value="Product">Product</option>
							<option value="Service and Product">Service and Product</option>
							<option value="Captive">Captive</option>
						 </select>
					</div>
					
					
				</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Save" name="savecmpny">
			</div>
			</form>
		</div> 
	</div> 
</div> 

<!-- /#wrapper -->
<!-- jQuery -->
<script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap\dist\js\bootstrap.min.js"></script>

<!--slimscroll JavaScript -->
<script src="js\jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js\waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js\custom.min.js"></script>
<script src="../plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script>
    $(document).ready(function(){
      $('#myTable').DataTable();
      $(document).ready(function() {
        var table = $('#example').DataTable({
          "columnDefs": [
          { "visible": false, "targets": 2 }
          ],
          "order": [[ 2, 'asc' ]],
          "displayLength": 25,
          "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;

            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
              if ( last !== group ) {
                $(rows).eq( i ).before(
                  '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                  );

                last = group;
              }
            } );
          }
        } );

    // Order by the grouping
    $('#example tbody').on( 'click', 'tr.group', function () {
      var currentOrder = table.order()[0];
      if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
        table.order( [ 2, 'desc' ] ).draw();
      }
      else {
        table.order( [ 2, 'asc' ] ).draw();
      }
    });
  });
    });
    $('#example23').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
  </script>

</body>
</html>
