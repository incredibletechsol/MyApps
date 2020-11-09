<?php

$mobno ='8796154725';
$mess="Test message from PHP API again-Amit";

sendSms($mobno,$mess);

function sendSms($mobno,$mess)
{
   $apiKey="yp15ACppGI0dnNrs";
$senderid="UPDATE";
$domain="http://msg.itext360.com/V2/http-api.php?";


$parameters="apikey=$apiKey&senderid=$senderid&number=$mobno&message=$mess&format=json";

$url=$domain.$parameters;

        $ch = curl_init($URL);
       
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
       
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
       
        curl_setopt($ch, CURLOPT_POST, 1);
       
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
       
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       
        $output = curl_exec($ch);
        
        echo $output;
       
        curl_close($ch);

}
?>