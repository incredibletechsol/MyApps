<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Event Manager</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="assets/css/loginstyle.css" />
		
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style>
		<![endif]-->
		<style>
			
			body {
				background: #563c55 url(images/b.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
		
			    <script type="text/javascript" src="assets/js/customalert.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/customalert.css" />
				
		<script type="text/javascript">

		function setColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
		function checkInput(form) 
		{
		  var bgBad = "black";
		  var bgGood = "lightyellow";
		  var valid = true;
		  var errmsg="";
		  
		  
		   /* Date validation */
		  if (form.UserName.value == "") {
		    valid = false;
		    setColor(form.UserName, bgBad);
		  
		  } else {
		    setColor(form.UserName, bgGood);
		  }
		 
		  /* District validation */
		  if (form.password.value == "") {
		    valid = false;
		    setColor(form.password, bgBad);
		  
		  } else {
		    setColor(form.password, bgGood);
		  }
		
		  
		errmsg=errmsg+"\n Please fill the fields marked with * ";
		
		if (!valid) 
			createCustomAlert(errmsg,"","Errors");
			
			
		return valid;
		}
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
		  width:200px; 
		  height:100px;
		  padding:0px;
		  background-color: #FFFFFF;
		}
		</style>
<script src="assets/plugins/jquery.min.js" type="text/javascript"></script> 
    </head>
    <body>
    <br><br><br><br><br><br>
        <div class="container">
			<section class="main">
				<form class="form-3" name="login" method="post" action="login.php" onSubmit="return checkInput(this)">
				    <p class="clearfix">
				        <label for="login">*Username</label>
				        <input type="text" name="UserName" id="UserName">
				    </p>
				    <p class="clearfix">
				        <label for="password">*Password</label>
				        <input type="password" name="password" id="password"> 
				    </p>
				    <p class="clearfix">
				    </p>
				    <p class="clearfix" align=center>
				        <input type="submit" name="submit" value="Login">
				    </p>       
				</form>
			</section>
	      </div>
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



<?php
	
        if(isset($_GET['msg'])) 
        { 
            $param=$_GET['msg'];
            if($param=="error")
	     {
?>

<div id="boxes1">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog1" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
			
			<a href='index.php'><img src='assets/images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>
			
			
			
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
			 Invalid Username / Password
			</div>
			
		</div>
		
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>
<?php

}
}
?>



    </body>
</html>