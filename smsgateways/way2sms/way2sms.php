<?php
error_reporting(0);
$username = "9970446416";

$key = "amitb8lwPNraYZvSROjoG";

$password = "123456";

$mobile = $_POST['recipient'];

$message = $_POST['message'];

$ch = curl_init("https://smsapi.engineeringtgr.com/send/?Mobile=$username&Password=$password&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=$key"); 
$result = curl_exec($ch);
$character = json_decode($result);
echo $character->status;

if ($character->status==="1") 
 {
     echo $character->msg;
  // echo "<script>window.location.href = 'index.php?msg=success';</script>";
}
else
{
     echo $character->msg;
  // echo "<script>window.location.href = 'index.php?msg=failure';</script>";
}
curl_close($ch);


?>