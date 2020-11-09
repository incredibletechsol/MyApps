<?php

$mobno ='8796154725';
$mess="Testmsg";
sendSms($mobno,$mess);

	function sendSms($mobno,$mess)
	{
	    $username="Bachat";
		$api_password="123456";
		$sender="BACHAT";
		$domain="http://cannyinfotech.in/api/mt/SendSMS?";
		$mobile=$mobno;
		$message=$mess;
		
		$username=urlencode($username);
		$password=urlencode($api_password);
		$sender=urlencode($sender);
		$message=urlencode($message);
		
		$parameters="user=$username&password=$api_password&senderid=$sender&channel=TRANS&DCS=8&flashsms=0&number=$mobile&text=$message&route=2";
		
		$url=$domain.$parameters;
		
		echo $url;
    
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
			    echo "SMS Sending Failed.";
			}
        
        curl_close($ch);
	}
?>