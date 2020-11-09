<?php
date_default_timezone_set('Asia/Kolkata'); 
include('classes/crud.php');

$db = new Database();
$db->connect();
	
//Save
if(isset($_POST['savecmpny']))
{
	$name=$_POST['name'];
	$cmpny_area_location=$_POST['area'];
	$cmpny_address=$_POST['address'];
	$cmpny_website=$_POST['website'];
	$cmpny_emailid=$_POST['UserName'];
	$cmpny_contactno=$_POST['contact'];
	$cmpny_technologies=$_POST['technolgies'];
	$cmpny_domain_areas=$_POST['domains'];
	$cmpny_type=$_POST['type'];
	
	
	$db->insert("tbl_pune_it_companies",array('cmpny_name'=>$name,'cmpny_area_location'=>$cmpny_area_location,'cmpny_address'=>$cmpny_address,'cmpny_website'=>$cmpny_website,'cmpny_emailid'=>$cmpny_emailid,'cmpny_contactno'=>$cmpny_contactno,'cmpny_technologies'=>$cmpny_technologies,'cmpny_domain_areas'=>$cmpny_domain_areas,'cmpny_type'=>$cmpny_type));  
	echo "<script> window.location='companies.php?msg=save'</script>";
}

//Update
if(isset($_POST['updatecmpny']))
{
	$id = $_POST['id'];
	$name=$_POST['name'];
	$cmpny_area_location=$_POST['area'];
	$cmpny_address=$_POST['address'];
	$cmpny_website=$_POST['website'];
	$cmpny_emailid=$_POST['UserName'];
	$cmpny_contactno=$_POST['contact'];
	$cmpny_technologies=$_POST['technolgies'];
	$cmpny_domain_areas=$_POST['domains'];
	$cmpny_type=$_POST['type'];
	
	$db->update("tbl_pune_it_companies",array('cmpny_name'=>$name,'cmpny_area_location'=>$cmpny_area_location,'cmpny_address'=>$cmpny_address,'cmpny_website'=>$cmpny_website,'cmpny_emailid'=>$cmpny_emailid,'cmpny_contactno'=>$cmpny_contactno,'cmpny_technologies'=>$cmpny_technologies,'cmpny_domain_areas'=>$cmpny_domain_areas,'cmpny_type'=>$cmpny_type),"cmpny_id='$id'");  
	echo "<script> window.location='companies.php?msg=update'</script>";
}


// Delete
if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "deletecmpny")
	{
	$id=$_GET['id'];
	$db->delete("tbl_pune_it_companies","cmpny_id='$id'"); 
	echo "<script> window.location='companies.php?msg=delete'</script>";
	}
}


?>