<?php
error_reporting(0);
ob_implicit_flush(true);

function sendWay2Sms($mobile,$message) 
{
    $username = "9970446416";
    $key = "amitb8lwPNraYZvSROjoG";
    $password = "123456";
    
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
}

function sendWay2Sms1($mobile,$message) 
{
    $username = "8796154725";
    $key = "amitbWHRZQ0x4NSCiaBwkO96KUfyP";
    $password = "123456";
    
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

}

?>
