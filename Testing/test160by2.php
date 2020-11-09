<!DOCTYPE html>
<html>
    <head>
        <title>One-Day Bus Pass Form</title>
    </head>
    <body>
<?php
                           

$username="8796154725";
$password="rahman12"; 

$recipitant="8796154725";
$message = rawurlencode("Hello Amit !!!!!");


    $post_data = "username=".$username."&password=".$password."&button=Login";
    $url = "http://www.160by2.com/re-login";
    $cookie = tempnam ("/tmp", "CURLCOOKIE");
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_USERAGENT,"User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0" );
    curl_setopt( $ch, CURLOPT_URL, $url );
    curl_setopt ($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/x-www-form-urlencoded","Accept: */*"));
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt( $ch, CURLOPT_COOKIEJAR, $cookie );
    //curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
    curl_setopt( $ch, CURLOPT_ENCODING, "" );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch, CURLOPT_MAXREDIRS, 10 );
    curl_setopt($ch,CURLOPT_REFERER,"http://www.160by2.com/index.html");
    $content = curl_exec( $ch );
    
    if(strstr($content,"Unauthorized Login"))
    {
           $cont="Invalid Username or Password";
    }
    
    else
    {

    
        $post_data1 = "hid_exists=no&action1=sa65sdf656fdfd&mobile1=".$recipitant."&msg1=".$message."&btnsendsms=Send Now";
        $url = "http://www.160by2.com/SendSMSAction";
        curl_setopt( $ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.5) Gecko/2008120122 Firefox/3.0.5" );
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt ($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/x-www-form-urlencoded","Accept: */*"));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data1);
        curl_setopt( $ch, CURLOPT_COOKIEJAR, $cookie );
        //curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt( $ch, CURLOPT_ENCODING, "" );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
            curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch, CURLOPT_MAXREDIRS, 10 );
        curl_setopt($ch,CURLOPT_REFERER,"http://www.160by2.com/SendSMS.action");
        $content = curl_exec( $ch );
        if(strstr($content,"Invalid Mobile number"))
         {
                  $cont="Invalid Mobile Number or Message. Check the entered mobile no.";
                }
              else
            {
               //echo $content;
               $cont="Your One-Day Bus Pass has been SMSed to ".$recipitant . ". Please show the same if asked when travelling.";
            } 
    }
    
    echo $cont;
    

?>
    </body>
</html>
