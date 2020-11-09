<?php
	include('conn.php');
	session_start();
	if (!isset($_SESSION['user_id'])){
	header('location:index.php');
	}
	?>﻿
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
    <script type="text/javascript">

	function setColor(el, bg) 
	{
	  if (el.style) el.style.backgroundColor = bg;
	}
		
	function checkInput(form) 
	{
	  var bgBad = "lightyellow";
	  var bgGood = "white";
	  var valid = true;
	  var errmsg="";
	  
		/* Date  validation */ 		  
	 if (form.date.value == "" || form.date.value.trim().length==0) {
		valid = false;
		setColor(form.date, bgBad);
	  
	  } else {
		setColor(form.date, bgGood);
	  }
			
	  /* Event Name validation */ 
	  if (form.eventname.value == "" || form.eventname.value.trim().length==0) {
		valid = false;
		setColor(form.eventname , bgBad);
	  
	  } else {
		setColor(form.eventname , bgGood);
	  }
		  
	  /* Message validation*/ 
	  if (form.message.value == "" || form.message .value.trim().length==0) {
		valid = false;
		setColor(form.message , bgBad);
	  
	  } else {
		setColor(form.message , bgGood);
	  }
	  
		 
	  errmsg=errmsg+"\n\nPlease enter the fields marked with * ";
					
	return valid;
	}
	
	function checkPassword(form) 
	{
	  var bgBad = "lightyellow";
	  var bgGood = "white";
	  var valid = true;
	  var errmsg="";
	  
		/* Password  validation */ 		  
	 if (form.password.value == "" || form.password.value.trim().length==0) {
		valid = false;
		setColor(form.password, bgBad);
	  
	  } else {
		setColor(form.password, bgGood);
	  }
				
	  errmsg=errmsg+"\n\nPlease enter the your New Password ";
	 return valid;
	}
	
	
	function CheckPhotoExt()
	{
		var fup = document.getElementById('photo');
		var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "jpg" || ext == "png" || ext == "gif" || ext == "bmp" || ext == "JPG" || ext == "PNG" || ext == "GIF" || ext == "BMP")
			{
			return true;
			} 
		else
		{
			fileName="";
			error_photo.innerHTML="<font color='red'><b>Upload .jpg,.png,.gif,.bmp files only.</b></font>";
			document.getElementById('photo').value="";
			fup.focus();
			return false;
		}
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
	
	<link rel="stylesheet" type="text/css" media="all" href="assets/css/jsDatePick_ltr.min.css" />
	<script type="text/javascript" src="assets/js/jsDatePick.min.1.3.js"></script>
	<script type="text/javascript">
		window.onload = function(){
			new JsDatePick({
				useMode:2,
				target:"date",
				dateFormat:"%Y-%m-%d"
			});
		};
	</script>

	<style type="text/css">
		
	#mask {
	  position:absolute;
	  left:0;
	  top:0;
	  z-index:99998;
	  background-color: #4D4D4D;
	  display:none;
	  
	}  
	#boxes .window {
	  position:absolute;
	  left:0;
	  top:0;
	  width:600px;
	  height:750px;
	  display:none;
	  z-index:99999;
	  padding:10px;
	  -moz-border-radius: 10px;
	  -webkit-border-radius: 10px;
	  border-radius: 10px;
	  border: 4px solid #333333;
	  
	  -moz-box-shadow:4px 4px 30px #130507;
		-webkit-box-shadow:4px 4px 30px #130507;
	  box-shadow:4px 4px 30px #130507;
		-moz-transition:top 800ms;
		-o-transition:top 800ms;
		-webkit-transition:top 800ms;
	  transition:top 800ms;
	  margin-left : 0px;
	}
	#boxes #dialog {
	  width:520px; 
	  height:550px;
	  padding:0px;
	  background-color: #FFFFFF;
	}

	#boxes1 .window {
	  position:absolute;
	  left:0;
	  top:0;
	  width:200px;
	  height:100px;
	  display:none;
	  z-index:99999;
	  padding:10px;
	  -moz-border-radius: 10px;
	  -webkit-border-radius: 10px;
	  border-radius: 10px;
	  border: 4px solid #333333;
	  
	  -moz-box-shadow:4px 4px 30px #130507;
		-webkit-box-shadow:4px 4px 30px #130507;
	  box-shadow:4px 4px 30px #130507;
		-moz-transition:top 800ms;
		-o-transition:top 800ms;
		-webkit-transition:top 800ms;
	  transition:top 800ms;
	  margin-left : 0px;
	}
	#boxes1 #dialog1 {
	  width:260px; 
	  height:80px;
	  padding:0px;
	  background-color: #FFFFFF;
	}
	
	#boxes2 .window {
	  position:absolute;
	  left:0;
	  top:0;
	  width:200px;
	  height:100px;
	  display:none;
	  z-index:99999;
	  padding:10px;
	  -moz-border-radius: 10px;
	  -webkit-border-radius: 10px;
	  border-radius: 10px;
	  border: 4px solid #333333;
	  
	  -moz-box-shadow:4px 4px 30px #130507;
		-webkit-box-shadow:4px 4px 30px #130507;
	  box-shadow:4px 4px 30px #130507;
		-moz-transition:top 800ms;
		-o-transition:top 800ms;
		-webkit-transition:top 800ms;
	  transition:top 800ms;
	  margin-left : 0px;
	}
	#boxes2 #dialog2 {
	  width:300px; 
	  height:250px;
	  padding:0px;
	  background-color: #FFFFFF;
	}
	
	.img-500 {
		height : 100px;
		width  : 120px;
		}
		
	table {
	   table-layout: fixed;
	   word-break: break-all;
	   word-wrap: break-word;
	}
	</style>
	<script src="assets/plugins/jquery.min.js" type="text/javascript"></script> 
	</head>
	<body class="cbp-spmenu-push">
	
	

	<?php
	//Code To Save the News and Events 
	if(isset($_POST['save']))
	{
		include('conn.php');
		$date=$_POST['date'];
		$shortdescription=$_POST['eventname'];
		$longdescription=$_POST['message'];
		$fileSize=$_FILES['photo']['size'];
		if($fileSize <= 0)
		{
			$photo='noimg.gif';
		}
		else
		{
			$photo = $_FILES['photo']['name'];
			$target_path="eventpics/";
			$target_path=$target_path.basename($photo);
			move_uploaded_file($_FILES['photo']['tmp_name'],$target_path);
		}
		
		$query = "INSERT INTO events(date,eventdescription,message,imagename) "."VALUES ('$date','$shortdescription','$longdescription','$photo')";
		mysqli_query($con,$query) or die(mysql_error());
		
	?>
	 <script type="text/javascript">
	$(document).ready(function() {	
	
		var id = '#dialog1';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(800);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
			  
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2 -50);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(500); 	
		
		//if close button is clicked
		$('.window .close').click(function (e) {
			//Cancel the link behavior
			e.preventDefault();
			
			$('#mask').hide();
			$('.window').hide();
		});		
		
		//if mask is clicked
		$('#mask').click(function () {
			$(this).preventDefault();
			$(this).hide();
			$('.window').hide();
		});		
		
	});
	
	</script>
	<div id="boxes1">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog1" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
				<a href='mainpage.php'><img src='assets/images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
			    <img src="images/right1.gif" border="0">&nbsp;Event Saved Successfully!!!!
			</div>
		</div>
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>
	<?php 		
	}
	//Code To Update the News and Events 
    if(isset($_POST['update']))
		{
		include('conn.php');
        $id=$_POST['id'];
		
		$fetch_photodetails="select imagename from events where id='$id'";
		$fetch_photodetails_rs=mysqli_query($con,$fetch_photodetails) or die(mysql_error());
		
		while($fetchphoto_row=mysqli_fetch_array($fetch_photodetails_rs))
			{
			$dbphoto=$fetchphoto_row[0];
			}
		$fileSize=$_FILES['photo']['size'];
		if($fileSize <= 0)
		{
			$photo=$dbphoto;
		}
		else
		{
			$utemp="eventpics/".$dbphoto;
			unlink($utemp);
			$photo = $_FILES['photo']['name'];
			$target_path="eventpics/";
			$target_path=$target_path.basename($photo);
			move_uploaded_file($_FILES['photo']['tmp_name'],$target_path);
		}
				
		$date=$_POST['date'];
		$shortdescription=$_POST['eventname'];
		$longdescription=$_POST['message'];
				
		$query = "UPDATE events SET date='$date',eventdescription='$shortdescription',message='$longdescription',imagename='$photo' where id='$id'";
		
		mysqli_query($con,$query) or die(mysql_error());
  		
    ?>
	 <script type="text/javascript">
	$(document).ready(function() {	
	
		var id = '#dialog1';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(800);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
			  
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2 -50);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(500); 	
		
		//if close button is clicked
		$('.window .close').click(function (e) {
			//Cancel the link behavior
			e.preventDefault();
			
			$('#mask').hide();
			$('.window').hide();
		});		
		
		//if mask is clicked
		$('#mask').click(function () {
			$(this).preventDefault();
			$(this).hide();
			$('.window').hide();
		});		
		
	});
	
	</script>
	<div id="boxes1">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog1" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
				<a href='mainpage.php'><img src='assets/images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>
			</div>
			<div align="center" style="margin:5px 0 5px 0;">
			    <img src="images/right1.gif" border="0">&nbsp;Event Updated Successfully!!!!
			</div>
		</div>
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>

	<?php
	}
	//Code To Delete the News and Events 
        if(isset($_GET['msg'])) 
        {
          $param=$_GET['msg'];
   
           if($param=="del")
			{
			include('conn.php');
			$id=$_GET['id'];
			
			$query2="select id,imagename from events where id='$id'";
			$rs=mysqli_query($con,$query2);
			$row=mysqli_fetch_array($rs);
			$utemp="eventpics/".$row[1];
			
			unlink($utemp);	
			$query = "DELETE from events where id='$id'";
		
			mysqli_query($con,$query) or die(mysql_error());
	?>
	 <script type="text/javascript">
	$(document).ready(function() {	
	
		var id = '#dialog1';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(800);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
			  
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2 -50);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(500); 	
		
		//if close button is clicked
		$('.window .close').click(function (e) {
			//Cancel the link behavior
			e.preventDefault();
			
			$('#mask').hide();
			$('.window').hide();
		});		
		
		//if mask is clicked
		$('#mask').click(function () {
			$(this).preventDefault();
			$(this).hide();
			$('.window').hide();
		});		
		
	});
	
	</script>
	<div id="boxes1">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog1" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
			
			<a href='mainpage.php'><img src='assets/images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>
			
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
			     <img src="images/right1.gif" border="0">&nbsp;Event Deleted Successfully!!!!
			</div>
			
		</div>
		
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>
	 <?php 
		}
	} 
	
	?>
	
	
    <!-- MAIN HEADING-->
    <div class="color-bg-one" id="main-sec">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <h3 class="pad-adjust">Event System</h3>
                </div>
            </div>
        </div>
    </div>
    <!--END MAIN HEADING-->
	
    <!--LEFT SLIDE MENU-->
    <?php include('leftmenu.php'); ?>
    <!--END LEFT SLIDE MENU-->
	
	<?php
	//Code To Display the News and Events Add Popup
	if(isset($_GET['msg']))
		{
		$param=$_GET['msg'];
		if($param == "addevents")
			{
	?>
	<script type="text/javascript">
	$(document).ready(function() {	
	
			var id = '#dialog';
		
			//Get the screen height and width
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();
		
			//Set heigth and width to mask to fill up the whole screen
			$('#mask').css({'width':maskWidth,'height':maskHeight});
			
			//transition effect		
			$('#mask').fadeIn(800);	
			$('#mask').fadeTo("slow",0.8);	
		
			//Get the window height and width
			var winH = $(window).height();
			var winW = $(window).width();
				  
			//Set the popup window to center
			$(id).css('top',  winH/2-$(id).height()/2 -50);
			$(id).css('left', winW/2-$(id).width()/2);
		
			//transition effect
			$(id).fadeIn(500); 	
		
		//if close button is clicked
		$('.window .close').click(function (e) {
			//Cancel the link behavior
			e.preventDefault();
			
			$('#mask').hide();
			$('.window').hide();
		});		
		
		//if mask is clicked
		$('#mask').click(function () {
			$(this).preventDefault();
			$(this).hide();
			$('.window').hide();
		});		
		
	});
	
	</script>
	<div id="boxes">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
				<a href='mainpage.php'><img src='assets/images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
                <center><h3><a href="#" id="addevents">Add Events</a> </h3></center><hr>
					<form name="login" method="post" action="actionpage.php" onSubmit="return checkInput(this)" enctype="multipart/form-data">
						<fieldset>
							<table cellpadding="0" cellspacing="0" width="313" height="200" align=center>
								<tr>
									<td height="38" width="146"><font face="calibri"><b>Date </b></font></td>
									<td height="38" width="121"><input type="text" name="date" onkeydown= "return isAlpha(event.keyCode);" class="form_input1" id="date" readonly></td>
								</tr>
								
								<tr>
									<td height="49" width="146"><font face="calibri"><b>Event Name</b></font></td>
									<td height="49" width="121"><input type="text" name="eventname" class="form_input1" onkeydown= "return isAlpha(event.keyCode);"></td>
								</tr>
								
								<tr>
									<td height="49" width="146"><font face="calibri"><b>Message</b></font></td>
									<td height="49" width="121"><textarea name="message" class="form_input2" rows="6" cols="30" maxlength="500"></textarea></td>
								</tr>
																			
								<tr>
									<td height="32" width="146"><font face="calibri"><b>Photo </b></font></td>
									<td height="32" width="121">
									<input name="photo" type="file" id="photo" onchange="return CheckPhotoExt();"/>
									<div id="error_photo"></div>
									</td>
								</tr>
											
								<tr>
									<td colspan=2 align="center"><input type="submit" name="save" value="Save" class="form_submit"/></td>
								</tr>
							</table>
						</fieldset>
					</form>
			</div>
		</div>
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>
    <?php 
		}
	} 
	?>
	<?php
	//Code To display the News and Events Update Pop up
	if(isset($_GET['msg']))
		{
		$param=$_GET['msg'];
		if($param == "edit")
			{
            $id=$_GET['id'];
			include('conn.php');
			$fetch_details="select * from events where id='$id'";	
		    $details_rs= mysqli_query($con,$fetch_details);

			while($details_row = mysqli_fetch_array($details_rs))
			{
				$id=$details_row[0]; 
				$date=$details_row[1];  
				$shortdesc=$details_row[2];   
				$longdesc=$details_row[3]; 
				$photo=$details_row[4];
            }

	?>
	<script type="text/javascript">
	$(document).ready(function() {	
	
			var id = '#dialog';
		
			//Get the screen height and width
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();
		
			//Set heigth and width to mask to fill up the whole screen
			$('#mask').css({'width':maskWidth,'height':maskHeight});
			
			//transition effect		
			$('#mask').fadeIn(800);	
			$('#mask').fadeTo("slow",0.8);	
		
			//Get the window height and width
			var winH = $(window).height();
			var winW = $(window).width();
				  
			//Set the popup window to center
			$(id).css('top',  winH/2-$(id).height()/2 -50);
			$(id).css('left', winW/2-$(id).width()/2);
		
			//transition effect
			$(id).fadeIn(500); 	
		
		//if close button is clicked
		$('.window .close').click(function (e) {
			//Cancel the link behavior
			e.preventDefault();
			
			$('#mask').hide();
			$('.window').hide();
		});		
		
		//if mask is clicked
		$('#mask').click(function () {
			$(this).preventDefault();
			$(this).hide();
			$('.window').hide();
		});		
		
	});
	
	</script>
	<div id="boxes">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
				<a href='mainpage.php'><img src='assets/images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
                <center><h3><a href="#">Update Events</a></h3></center><hr>
			    <form name="login" method="post" action="actionpage.php" onSubmit="return checkInput(this)" enctype="multipart/form-data">
					<fieldset>
						<table cellpadding="0" cellspacing="0" width="313" height="200" align=center>
						<input type="hidden" name="id" value="<?php echo $id; ?>">
							<tr>
								<td height="38" width="146"><font face="calibri"><b>Date </b></font></td>
								<td height="38" width="121"><input type="text" name="date" onkeydown= "return isAlpha(event.keyCode);" class="form_input1" value="<?php echo $date; ?>" id="date" readonly></td>
							</tr>
							
							<tr>
								<td height="49" width="146"><font face="calibri"><b>Event Name</b></font></td>
								<td height="49" width="121"><input type="text" name="eventname" class="form_input1" value="<?php echo $shortdesc; ?>" onkeydown= "return isAlpha(event.keyCode);"></td>
							</tr>
							
							<tr>
								<td height="49" width="146"><font face="calibri"><b>Message</b></font></td>
								<td height="49" width="121"><textarea name="message" class="form_input2" rows="6" cols="30" maxlength="500"><?php echo $longdesc; ?></textarea></td>
							</tr>
																		
							<tr>
								<td height="32" width="146"><font face="calibri"><b>Photo </b></font></td>
								<td height="32" width="121">
								<input name="photo" type="file" id="photo" onchange="return CheckPhotoExt();"/>
								<br><div id="error_photo"></div>
								</td>
							</tr>
							<tr>
								<td align="left">
								
								<?php
								 if($photo=="noimg.gif")
									{
									echo "<img src='images/noimg.gif' border='0' class='img-500'>";
									}
								else
									{	
									echo "<img src='eventpics/$photo' border='0' class='img-500'>";
									}
								?>
								</td>
								<td colspan=2 align="center" valign="middle"><input type="submit" name="update" value="Update" class="form_submit"/></td>	
							</tr>
						</table>
					</fieldset>
				</form>
			</div>
		</div>
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>
    <?php 
		}
	} 
	
	//Code To Display Change Password 
        if(isset($_GET['msg'])) 
        {
          $param=$_GET['msg'];
   
           if($param=="chgpwd")
			{
	?>
	 <script type="text/javascript">
	$(document).ready(function() {	
	
		var id = '#dialog2';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(800);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
			  
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2 -50);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(500); 	
		
		//if close button is clicked
		$('.window .close').click(function (e) {
			//Cancel the link behavior
			e.preventDefault();
			
			$('#mask').hide();
			$('.window').hide();
		});		
		
		//if mask is clicked
		$('#mask').click(function () {
			$(this).preventDefault();
			$(this).hide();
			$('.window').hide();
		});		
		
	});
	
	</script>
	<div id="boxes2">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog2" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
				<a href='mainpage.php'><img src='assets/images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
			 <center><h3><a href="#">Change Password</a></h3></center><hr>
				<form name="login" method="post" action="actionpage.php" onSubmit="return checkPassword(this)">
					<table>
						<tr>
							<td>New Password : </td>
							<td><input type="password" name="password" class="form_input1"></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><br><input type="submit" name="chgpwd" class="form_submit" value="Update"></td>
						</tr>
					</table>
				</form>	
			</div>
		</div>
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>
	<?php
		}	
	}	
	
	//Code To Update the Password
        if(isset($_POST['chgpwd'])) 
        {
			$password=$_POST['password'];
			$userid=$_SESSION['user_id'];
			$query="UPDATE tbl_login SET Password='$password' where member_id='$userid'";	
			mysqli_query($con,$query) or die(mysql_error());
	?>
	 <script type="text/javascript">
	$(document).ready(function() {	
	
		var id = '#dialog1';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(800);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
			  
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2 -50);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(500); 	
		
		//if close button is clicked
		$('.window .close').click(function (e) {
			//Cancel the link behavior
			e.preventDefault();
			
			$('#mask').hide();
			$('.window').hide();
		});		
		
		//if mask is clicked
		$('#mask').click(function () {
			$(this).preventDefault();
			$(this).hide();
			$('.window').hide();
		});		
		
	});
	
	</script>
	<div id="boxes1">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog1" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
			
			<a href='mainpage.php'><img src='assets/images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>
			
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
			     <img src="images/right1.gif" border="0">&nbsp;Password Changed Successfully!!!!
			</div>
			
		</div>
		
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>
	 <?php 
		}
	?>
   
 
   
    
    <!--FOOTER SECTION -->
    <div class="for-full-back color-bg-one" id="footer">
        Copyright @ 2015 Designed & Developed by <a href="http://www.incredibletechsolve.com" target="_blank">Incredible Tech Solutions</a>
    </div>
	
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