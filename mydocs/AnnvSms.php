<?php
date_default_timezone_set('Asia/Kolkata'); 

AnnvSMS();


function AnnvSMS()
{
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
include('conn.php');

$query="SELECT * FROM tbl_friends";
				
$rs=mysqli_query($conn,$query);

$name="";
$mobno="";
$emailid="";
$annvdate="";

while($row=mysqli_fetch_array($rs))
	{
	$str=$row[1];
	$mobno=$row[2];	
	$emailid=$row[3];
    $annvdate=$row[5];

    $name1=explode(" ",$str);
    $name=$name1[0];
   
    $time = strtotime($annvdate);

    if(date('m-d') == date('m-d', $time))  
        {
        sendAnniversarySms($mobno,"Happy Wedding Anniversary-Amit Bhalerao");
        }
	}
	
}

function sendAnniversarySms($mobno,$mess)
	{
	     	    
    //Your authentication key
    $authKey = "17502A4Dd2c6LqP15f930840";
    
    //Sender ID,While using route4 sender id should be 6 characters long.
    $senderId = "INRSMS";
    
    //Define route 
    $route = "4";
    //Prepare you post parameters
    $postData = array(
        'authkey' => $authKey,
        'mobiles' => $mobno,
        'message' => $mess,
        'sender' => $senderId,
        'route' => $route
    );
    
    //API URL
    $url="http://sms.hostingdesire.com/api/sendhttp.php";
    
    // init the resource
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData
        //,CURLOPT_FOLLOWLOCATION => true
    ));
    
    
    //Ignore SSL certificate verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    
    //get response
    $output = curl_exec($ch);
    
    //Print error if any
    if(curl_errno($ch))
    {
        echo 'error:' . curl_error($ch);
    }

    curl_close($ch);
	}



?>	