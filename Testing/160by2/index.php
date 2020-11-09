<?php
//Use gateway of way2sms.com or 160by2.com
error_reporting(E_ALL);
ob_implicit_flush(true);

//If you get Fatal error: Call to undefined function curl_init() , Then you need to enable the curl extension in php.ini

include_once "class.curl.php";
include_once "class.sms.php";

$smsapp=new sms();
$smsapp->setGateway('160BY2'); // you can set gateway to be '160by2' to use your 160by2 account or way2sms to use your way2sms.com account;

$mobile_no = '8796154725'; //Mobile no (Username)
$pass = 'rahman12'; //Password
$send_to_no = '9970446416'; //Your friend's mobile no
$msg = 'Hi Dear, How r u';

echo "Logging in  ... ";
$smsapp->login($mobile_no,$pass);

echo "Sending SMS ... ";
$result=$smsapp->send($send_to_no,$msg);

if($result=='true')
{
	echo "Message sent";
}
else
{	
	echo "Error encountered : ".$smsapp->getLastError();
}

?>