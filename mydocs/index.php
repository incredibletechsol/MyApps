<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Amit Bhalerao - MyApps</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css"/>
 
<script src="js/demo-rtl.js"></script>
 
 
<link rel="stylesheet" type="text/css" href="css/libs/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css"/>
 
<link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css"/>
 
 
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>
 
<link type="image/x-icon" href="favicon.png" rel="shortcut icon"/>
<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body id="login-page">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div id="login-box">
<div id="login-box-holder">
<div class="row">
<div class="col-xs-12">
<header id="login-header">
<div id="login-logo">
<img src="img/logo.png" alt=""/>
</div>
</header>
<div id="login-box-inner">
<?php 
	if(isset($_GET['msg'])) 
		{ 
		$param=$_GET['msg'];
		if($param == "failed")
			{
			echo "<div class='alert alert-danger alert-dismissable'>";
			echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times; </button>";
			echo "<font face='calibri'>Invalid Username / Password</font></div>";
			}  
		if($param == "done")
			{
			echo "<div class='alert alert-danger alert-dismissable'>";
			echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times; </button>";
			echo "<font face='calibri'>SMS Sent Successfully</font></div>";
			}  	
		} 
	?>
       <form  id="loginform" action="login.php" method="post">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input class="form-control" type="text" placeholder="Username" name="username">
</div>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-key"></i></span>
<input type="password" class="form-control" placeholder="Password" name="password">
</div>

<div class="row">
<div class="col-xs-12">
<input type="submit" class="btn btn-success col-xs-12" value="Login" name="submit">
</div>
</div>

</form>
<center><h3><a href="otherapps/events/index.php">Event Manager</a></h3></center>
<center><h3><a href="otherapps/mycareer/index.php">IT Companies in Pune</a></h3></center>
<center><h3><a href="otherapps/careertodolist/index.php">My Career To Do List</a></h3></center>
<center><h3><a href="otherapps/personaltodolist/index.php">My Personal To Do List</a></h3></center>
<center><h3><a href="otherapps/Cognizant/index.php">Cognizant To Do List</a></h3></center>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>

 
<script src="js/demo-skin-changer.js"></script>  
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.nanoscroller.min.js"></script>
<script src="js/demo.js"></script>  
 
 
<script src="js/scripts.js"></script>
 
</body>
</html>