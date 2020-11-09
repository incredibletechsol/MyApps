<?php include('logincommon.php'); 
 include('classes/crud.php');
?>
	
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>My Friends</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css"/>
<script src="js/demo-rtl.js"></script>
<link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css"/>
<link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css"/>
<link type="image/x-icon" href="img/favicon.png" rel="shortcut icon"/>
 <link rel="stylesheet" href="css/default.css" type="text/css">

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

                 
		  
		  if (form.UserName.value == "" || form.UserName.value.trim().length==0) {
		    valid = false;
		    setColor(form.UserName, bgBad);
		  
		  } else {
		    setColor(form.UserName, bgGood);
		  }
		  
		  
		   if (form.contact.value == "" || form.contact.value.trim().length==0) {
		    valid = false;
		    setColor(form.contact, bgBad);
		  
		  } else {
		    setColor(form.contact, bgGood);
		  }

                  if (form.contact.value.trim().length < 10) 
                   {
		    valid = false;
		    setColor(form.contact, bgBad);
		    createCustomAlert("Please Enter a valid Contact Number","","Errors"); 
		  } 
                  else
                     {
		    setColor(form.contact, bgGood);
		    }

		  
		   /* Birth Date validation */
		  if (form.bdate.value == "" || form.bdate.value.trim().length==0) {
		    valid = false;
		    setColor(form.bdate, bgBad);
		  
		  } else {
		    setColor(form.bdate, bgGood);
		  }
		 
		  /* Annv Date validation 
		  if (form.adate.value == "" || form.adate.value.trim().length==0) {
		    valid = false;
		    setColor(form.adate, bgBad);
		  
		  } else {
		    setColor(form.adate, bgGood);
		  }
		  */
		  
		 
		   if(document.login.UserName.value=="")
			{
				createCustomAlert("Please Enter a valid E-mail Address","","Errors");
				document.login.UserName.focus();
				return false;
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
		
		function checkUpdateInput(form) 
		{

		  var bgBad = "yellow";
		  var bgGood = "lightyellow";
		  var valid = true;
		  var errmsg="";
		  
		    /* Name  validation */ 		  
		 if (form.name1.value == "" || form.name1.value.trim().length==0) {
		    valid = false;
		    setColor(form.name1, bgBad);
		  
		  } else {
		    setColor(form.name1, bgGood);
		  }

       
		  
		  if (form.UserName1.value == "" || form.UserName1.value.trim().length==0) {
		    valid = false;
		    setColor(form.UserName1, bgBad);
		  
		  } else {
		    setColor(form.UserName1, bgGood);
		  }
		  
		  
		   if (form.contact1.value == "" || form.contact1.value.trim().length==0) {
		    valid = false;
		    setColor(form.contact1, bgBad);
		  
		  } else {
		    setColor(form.contact1, bgGood);
		  }

                  if (form.contact1.value.trim().length < 10) 
                   {
		    valid = false;
		    setColor(form.contact1, bgBad);
		    createCustomAlert("Please Enter a valid contact Number","","Errors"); 
		  } 
                  else
                     {
		    setColor(form.contact1, bgGood);
		    }

		  
		 
		  if (form.bdate1.value == "" || form.bdate1.value.trim().length==0) {
		    valid = false;
		    setColor(form.bdate1, bgBad);
		  
		  } else {
		    setColor(form.bdate1, bgGood);
		  }
		 
		
		  
		 
		   if(document.login1.UserName1.value=="")
			{
				createCustomAlert("Please Enter a valid E-mail Address","","Errors");
				document.login1.UserName1.focus();
				return false;
			}
			//E-mail field should accept valid characters only.
			if (document.login1.UserName1.value != " ")
			{
				var checkOK="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-@._";
				var checkStr = document.login1.UserName1.value;
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
			if(document.login1.UserName1.value != "")
			{
				var val=document.login1.UserName1.value ;
				var pass1=val.indexOf('@',0);
				if(pass1==-1)
				{
					//alert("Not a valid E-Mail Address");
					createCustomAlert("Not a valid E-Mail Address","","Errors");
		
					document.login1.UserName1.value="";
					document.login1.UserName1.focus();
					return false;
				}
			}
			//E-mail id must have '.'
			if(document.login1.UserName1.value != "")
			{
				var val=document.login1.UserName1.value ;
				var pass2=val.indexOf('.',0);
				if(pass2==-1)
				{
					//alert("Not a valid E-Mail Address");
					createCustomAlert("Not a valid E-Mail Address","","Errors");
					document.login1.UserName1.value="";
					document.login1.UserName1.focus();
					return false;
				}
				if((pass2 - pass1)== 1)
				{
					//alert("Not a valid E-Mail Address");
					createCustomAlert("Not a valid E-Mail Address","","Errors");
					document.login1.UserName1.value="";
					document.login1.UserName1.focus();
					return false;
				}
			}
			//E-mail id should have only @,.,_ and - with the letters and digits
			if (!allValid)
			{
				createCustomAlert("Please enter only letters, digits,and \"@\"  \"_\"  \".\"  \"-\"  characters in the \"EMail\" field.","Errors");
				document.login1.UserName1.focus();
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
							<h1>My Friends</h1>
							<?php
							if(isset($_GET['msg'])) 
								{
								$param=$_GET['msg'];
								if($param=="save")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Friend Details Saved Successfully</strong></div></div>";
								if($param=="update")
									  echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Friend Details Updated Successfully</strong></div></div>";
								if($param=="delete")
									echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Friend Details Deleted Successfully</strong></div></div>";
								if($param=="send")
									echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>SMS and Email Sent Successfully</strong></div></div>";
								if($param=="special")
									echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Bulk SMS Sent Successfully</strong></div></div>";	 	
								}
							?>
							<div align="right">	
								<a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg"><i class="fa fa-plus-circle fa-lg"></i>Add Friend</a>
							</div>	
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-lg-6">
							<div class="main-box clearfix">
								<div class="main-box-body clearfix">
									<?php include('upcomingbirth.php'); ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="main-box clearfix">
								<div class="main-box-body clearfix">
									<?php include('upcomingannv.php'); ?>
								</div>
							</div>
						</div>
					</div>
					
					<?php
					if(isset($_GET['msg'])) 
					{
					$param=$_GET['msg'];
					
					if($param  == "editfriend")
						{
						$db1 = new Database();
						$db1->connect();
						$id=$_GET['id'];
						$db1->sql("SELECT * FROM tbl_friends td where td.id='$id'");
						$res = $db1->getResult();
						foreach($res as $x) 
							{
							$name  = $x['name'];	
							$mobileno = $x['mobileno'];
							$emailid = $x['emailid'];
							$birthdate	= $x['birthdate'];
							$annvdate = $x['annvdate'];
							$isSpecial = $x['isSpecial'];
							}
					?>

					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Edit Friend</h4>
							</div>
							<div class="modal-body">
								<form name="login1" method="post" action="myfriendactions.php" onSubmit="return checkUpdateInput(this)">
								<input type="hidden" name="updatefriend" value="updatefriend">
								<input type="hidden" name="id" value="<?php echo $id; ?>">
									<div class="form-group">
										<label for="name">*Name</label>
										<input type="text" class="form-control" id="name1" placeholder="Enter Name" name="name1" value="<?php echo $name; ?>">
									</div>
									
									<div class="form-group">
										<label for="email">*Email Id</label>
										<input type="text" class="form-control" id="UserName1" placeholder="Email Id" name="UserName1" value="<?php echo $emailid; ?>">
									</div>
									
									<div class="form-group">
										<label for="email">*Contact No :</label>
										<input type="text" class="form-control" id="contact1" placeholder="Contact No" name="contact1" onkeypress="return isNumberKey(event)" maxlength="10" value="<?php echo $mobileno; ?>">
									</div>
									
									<div class="form-group">
										<label for="email">*Birth Date :</label>
										<input type="text" class="form-control" id="bdate1" name="bdate1" value="<?php echo $birthdate; ?>">
									</div>
									
									<div class="form-group">
										<label for="email">Anniversary Date :</label>
										<input type="text" class="form-control" id="adate1"  name="adate1" value="<?php echo $annvdate; ?>">
									</div>
									
									<div class="form-group">
										<label for="email">Special :</label>
									    <select name="isSpecial" id="isSpecial" style="width:135px;"  class="form-control">
						             	<?php
            								$speicalOptions  = array('Y', 'N');
            								foreach($speicalOptions  as $option){
            									if($isSpecial == $option){
            										echo "<option selected='selected' value='$option'>$option</option>" ;
            									}else{
            										echo "<option value='$option'>$option</option>" ;
            									}
            								}
            							?>
            							</select>
									</div>
								</div>
							<div class="modal-footer">
								<input type="submit" class="btn btn-primary" value="Update" name="updatefriend">
							</div>
							</form>
						</div> 
					</div> 

					<?php	
						}
					}
					?>

					<div class="row">
						<div class="col-lg-12">
							<div class="main-box clearfix">
								<div class="main-box-body clearfix">
								<div class="table-responsive">
										<?php 
										include('grids.php'); 
								
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
				<h4 class="modal-title">Add Friend</h4>
			</div>
			<div class="modal-body">
				<form name="login" method="post" action="myfriendactions.php" onSubmit="return checkInput(this)">
					<div class="form-group">
						<label for="name">*Name</label>
						<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
					</div>
					
					<div class="form-group">
						<label for="email">*Email Id</label>
						<input type="text" class="form-control" id="UserName" placeholder="Email Id" name="UserName">
					</div>
					
					<div class="form-group">
						<label for="email">*Contact No :</label>
						<input type="text" class="form-control" id="contact" placeholder="Contact No" name="contact" onkeypress="return isNumberKey(event)" maxlength="10">
					</div>
					
					<div class="form-group">
						<label for="email">*Birth Date :</label>
						<input type="text" class="form-control" id="bdate" name="bdate">
					</div>
					
					<div class="form-group">
						<label for="email">Anniversary Date :</label>
						<input type="text" class="form-control" id="adate"  name="adate">
					</div>
				</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Save" name="savefriend">
			</div>
			</form>
		</div> 
	</div> 
</div> 



<?php include('settings.php'); ?>
 
<script src="js/demo-skin-changer.js"></script>  
<script src="js/jquery.nanoscroller.min.js"></script>
<script src="js/demo.js"></script>  
<script src="js/scripts.js"></script>
<script src="js/pace.min.js"></script>
<script src="js/modalEffects.js"></script>
<script src="js/classie.js"></script>
<script src="js/modernizr.custom.js"></script>
 <script type="text/javascript" src="js/zebra_datepicker.js"></script>
<script type="text/javascript" src="js/core.js"></script>
</body>
</html>