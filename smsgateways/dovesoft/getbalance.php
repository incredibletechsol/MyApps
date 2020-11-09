<?php

$url = "http://mobicomm.dove-sms.com//getbalance.jsp?user=incredi&key=058793c2fbXX&accusage=1";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For HTTPS
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // For HTTPS
$response =  curl_exec($ch);
echo "Balance =".$response;
curl_close($ch);

?>