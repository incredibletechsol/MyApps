<?php
include('conn.php');

if (isset($_POST['submit'])) 
{
	$UserName=$_POST['UserName'];
	$Password=$_POST['password'];
	$result=mysqli_query($con,"select * from tbl_login where UserName='$UserName' and Password='$Password'")or die (mysql_error()); 
			
	$count=mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
			
			if ($count > 0)
				{
				session_start();
				$_SESSION['user_id']=$row['member_id'];
				header('location:mainpage.php');
				}
			else
				{
				header('location:index.php?msg=error');
				}
}
?>

