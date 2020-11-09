<?php

$url = "http://cannyinfotech.in/api/mt/GetBalance?User=Bachat&Password=123456";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For HTTPS
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // For HTTPS
$response =  curl_exec($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Returns 200 if everything went well
if($statusCode==200)
{
    $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $header = substr($response, 0, $header_size);
    $body = substr($response, $header_size);
  // echo $response;
    $json_a = json_decode($response, true);

   foreach ($json_a as $key => $value){
       if($key == "Balance"){
           $balance = substr($value, 14);
           echo "Balance =".$balance;
       }
           
    }

}
else
{ 
    echo "<br>Not Working";
}

curl_close($ch);

?>