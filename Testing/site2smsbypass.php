<?php
/***
 * #@author DarK_ShaDow
 * #@Copyright EthicalHavoc.net
 */

if(!is_dir("Cookies"))
{
	mkdir("Cookies");
}

$url1 = "http://site2sms.com/auth.asp";
$url2 = "http://site2sms.com/user/dashboard.asp";
$mobnum = "8796154725"; // enter your number
$pass = "123456"; // enter your password
$cookiefile = rand(1, 9999).'.txt';
$cookies = str_replace('\\', '/', dirname(__FILE__).'/Cookies/'.$cookiefile);
$useragent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.26 Safari/537.36";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "username=$mobnum&Password=$pass&Submit=Login");
curl_exec($ch);
curl_setopt($ch, CURLOPT_URL, $url1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIE, "s2s%5Fcaptcha=54993");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "txtSource=captcha&txtCaptchaCode=797");
curl_exec($ch);
$html = file_get_contents('./Cookies/'.$cookiefile);
preg_match("/s2s%5Fsession(.*)/i", $html,$sessioncookies);
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_REFERER, "http://site2sms.com/verification.asp?source=login");
curl_setopt($ch, CURLOPT_COOKIE, "s2s%5Fsession=$sessioncookies[1]");
echo curl_exec($ch);
curl_close($ch); 

// Now you can do what ever you want in site2sms with the $sessioncookies[1]
?>