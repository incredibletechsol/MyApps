<?php
error_reporting(0);
include('/home/dkkkpmba/public_html/MyApps/mydocs/classes/crud.php');


$db = new Database();
$db->connect();
$db->sql("SELECT * FROM events");
$res = $db->getResult();

foreach($res as $x) 
	{
	$date = $x['date'];	
	$eventdescription= $x['eventdescription'];
	$message= $x['message'];
	$imagename= $x['imagename'];
	$time = strtotime($date);
	$emailid='amit@incredibletechsolve.com';
    $mobno='8796154725';
    if(date('m-d') == date('m-d', $time))
    	{  
    	$mess="<h3><center>".$message."</center></h3><br><img src='http://dkkkpmba.com/MyApps/mydocs/events/eventpics/$imagename'><br><br>"."<b>Thanks & Regards <BR>Amit Bhalerao<BR></b>";
  	  //  sendMail($mess,$eventdescription,$emailid);
  	    sendSms($mobno,$message);
     	} 
	}

function sendMail($content,$subject,$emailid)
       {
        include('/home/dkkkpmba/public_html/backup/projectbackup/phpmailer/class.phpmailer.php');
        $email = new PHPMailer();
        $email->From      = 'dkkkpmba@lin6.plreseller.com';
        $email->FromName  = 'Amit Bhalerao';
        $email->Subject   = $subject;
        $email->Body      = $content;
        $email->IsHTML(true); 
        $email->AddAddress($emailid);
        $b=$email->Send();
        
	if($b == "true") 
	    { 	
	    echo "Greetings Sent Successfully";
	    }
	 else
	    echo "Failed"."<br>"; 
	}	
	
function sendSms($mobno,$mess)
	{
	    $username="incrsms";
		$api_password="can@789";
		$sender="INCSMS";
		$domain="http://cannyinfotech.in/api/mt/SendSMS?";
		$mobile=$mobno;
		$message=$mess;
		
		$username=urlencode($username);
		$password=urlencode($api_password);
		$sender=urlencode($sender);
		$message=urlencode($message);
		
		$parameters="user=$username&password=$api_password&senderid=$sender&channel=TRANS&DCS=0&flashsms=0&number=$mobile&text=$message&route=2";
		
		$url=$domain.$parameters;
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For HTTPS
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // For HTTPS
        curl_exec($ch);
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Returns 200 if everything went well
        if($statusCode==200)
        {
            echo "";
        }
        else
        { 
            echo "<br>SMS Sending Failed.";
        }
        
        curl_close($ch);
	}	
	





?>