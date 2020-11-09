<?php
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<parent>
<child>
<user>incredi</user>
<key>058793c2fbXX</key>
<mobile>9970446416</mobile>
<message>कस्तुरी अमित भाले</message>
<accusage>1</accusage>
<senderid>INFOTP</senderid>
<unicode>1</unicode>
</child>
</parent>
";

sendSms($myXMLData,'9860960529','Hello Abhijit');
sendSms($myXMLData,'8796154725','Hello Amit');


function sendSms($myXMLData,$mobileno,$message){

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");

$mobilechanges = $xml->xpath("//*[starts-with(local-name(), 'mobile')]");

foreach ($mobilechanges as $change) 
    $change[0] = $mobileno;
    
$messagechanges = $xml->xpath("//*[starts-with(local-name(), 'message')]");

foreach ($messagechanges as $change) 
    $change[0] = $message;    
    
$myXMLData = $xml->asXML();    

$URL = "http://mobicomm.dove-sms.com//submitsms.jsp?";

$ch = curl_init($URL);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));

curl_setopt($ch, CURLOPT_POSTFIELDS, "$myXMLData");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$output = curl_exec($ch);

curl_close($ch);

print_r($output);

}
 

                        
?>   