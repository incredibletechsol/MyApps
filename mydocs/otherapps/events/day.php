<?php
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
date_default_timezone_set('Asia/Kolkata'); 
include('conn.php');
$query="SELECT eventdescription,date,message,imagename FROM `events` WHERE DAYOFYEAR(curdate()) <= dayofyear(`date`) AND DAYOFYEAR(curdate()) +25 >= dayofyear(`date`) order by MONTH(date) asc,DAY(date) asc LIMIT 30  ";
$rs=mysqli_query($con,$query);

$eventname="";
$date="";
$message="";

while($row=mysqli_fetch_array($rs))
{
	$eventname=$row[0];
	$date=$row[1];	
	$message=$row[2];
	$imagename=$row[3];
	
	$time = strtotime($date);
	$tommorow = mktime(date("H"), date("i"), date("s"), date("m"), date("d")+1, date("Y"));
	date_default_timezone_set('Asia/Kolkata'); 
	if(date('m-d') == date('m-d', $time)) 
		{ 
		$sub=$eventname;
		$query1="SELECT * FROM friends";
				
		$rs1=mysqli_query($con,$query1);

		$name="";
		$mobno="";
		$emailid="";
		while($row1=mysqli_fetch_array($rs1))
				{
				$str=$row1[1];
				$emailid=$row1[3];
				$name1=explode(" ",$str);
				$name=$name1[0];
				$mess="<h3>Hi ".$name."</h3><br><br>$message<br><br><img src='http://phadtarefabtech.com/MyApps/friendsbook/events/eventpics/$imagename'><br><br>"."<b>Thanks & Regards <BR>Amit Bhalerao<BR></b>";
				
				sendEmail($name,$emailid,$headers,$sub,$mess);
				}
		}	
}



function sendEmail($name,$emailid,$headers,$sub,$mess) 
{
$r="-f"."amit.bhalerao87@gmail.com";
mail($emailid,$sub,$mess,$headers,$r);
}
	
?>