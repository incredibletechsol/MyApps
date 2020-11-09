<?php
date_default_timezone_set('Asia/Kolkata'); 
$currentDate=date('Y-m-d h:i:s');
$day = date("l");
if($day == "Friday" || $day == "Monday")
	{
	echo "<link rel='stylesheet' href='assets/css/brown.css' type='text/css' />";
	}
else if($day == "Saturday" || $day == "Tuesday")
	{
	echo "<link rel='stylesheet' href='assets/css/green.css' type='text/css' />";
	}	
else if($day == "Thursday" || $day == "Sunday")
	{
	echo "<link rel='stylesheet' href='assets/css/red.css' type='text/css' />";
	}	
else if($day == "Wednesday")
	{
	echo "<link rel='stylesheet' href='assets/css/violet.css' type='text/css' />";
	}
else
	{
	echo "<link rel='stylesheet' href='assets/css/style.css' type='text/css' />";
	}
	
?>