<?php
date_default_timezone_set('Asia/Kolkata'); 
include('/home/dkkkpmba/public_html/backup/projectbackup/phpmailer/class.phpmailer.php');
BirthdaySMS();


function BirthdaySMS()
{		
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
include('conn.php');
		
$query="SELECT * FROM tbl_friends";
				
$rs=mysqli_query($conn,$query);

$name="";
$mobno="";
$emailid="";
$birthdate="";

while($row=mysqli_fetch_array($rs))
	{
	$str=$row[1];
	$mobno=$row[2];	
	$emailid=$row[3];
    $birthdate=$row[4];
	$time = strtotime($birthdate);
	$tommorow = mktime(date("H"), date("i"), date("s"), date("m"), date("d")+1, date("Y"));
    $name1=explode(" ",$str);
    $name=$name1[0];
    $time = strtotime($birthdate);
    $mess = 'Happy Birthday!!! Wish you a many many happy returns of the day-Amit Bhalerao';

    if(date('m-d') == date('m-d', $time))  
       {  
       //sendEmail($name,$emailid);
       sendBirthdaySms($mobno,$mess);    
       $toamit = $toamit." ".$str;
       }
    }
    //sendEmailToMe($toamit);  
}       
       
function sendEmail($name,$emailid) 
{
date_default_timezone_set('Asia/Kolkata'); 
$nowdd= gmdate("d" , time() + 19800);
$nowmm= gmdate("m" , time() + 19800);
$nowdd2=$nowdd+40;

$mess="<b>Hi ".$name.",</b><BR><BR><h3>Happy Birthday!!! Wish you a many many happy returns of the day.May God bless you with health, wealth and prosperity in your life. </h3><BR><BR>"."<br><img src='http://dkkkpmba.com/MyApps/mydocs/birth/5.jpg'><br><br>"."<b>Thanks & Regards <BR>Amit Bhalerao<BR></b>";

if( $nowdd == 1 || $nowdd == 3  || $nowdd == 5  || $nowdd == 7  || $nowdd == 9 )  
	{ 
	$mess="<b>Hi ".$name.",</b><BR><BR><h3>Happy Birthday!!! Wish you a many many happy returns of the day.May God bless you with health, wealth and prosperity in your life. </h3><BR><BR>"."<br><img src='http://dkkkpmba.com/MyApps/mydocs/birth/1.jpg'><br><br>"."<b>Thanks & Regards <BR>Amit Bhalerao<BR></b>";
	}
else if ( $nowdd == 2 || $nowdd == 4|| $nowdd == 6 || $nowdd == 8  || $nowdd == 10 ) 
	{
   	$mess="<b>Hi ".$name.",</b><BR><BR><h3>Happy Birthday!!! Wish you a many many happy returns of the day.May God bless you with health, wealth and prosperity in your life. </h3><BR><BR>"."<br><img src='http://dkkkpmba.com/MyApps/mydocs/birth/2.jpg'><br><br>"."<b>Thanks & Regards <BR>Amit Bhalerao<BR></b>";
  	}
else if ( $nowdd == 13 || $nowdd == 15 || $nowdd == 17 || $nowdd == 19 || $nowdd == 21 || $nowdd == 23 || $nowdd == 25 || $nowdd == 27 || $nowdd == 29 || $nowdd == 31) 
	{
	$mess="<b>Hi ".$name.",</b><BR><BR><h3>Happy Birthday!!! Wish you a many many happy returns of the day.May God bless you with health, wealth and prosperity in your life. </h3><BR><BR>"."<br><img src='http://dkkkpmba.com/MyApps/mydocs/birth/3.jpg'><br><br>"."<b>Thanks & Regards <BR>Amit Bhalerao<BR></b>";
	}
else if ( $nowdd == 14 || $nowdd == 16 || $nowdd == 18 || $nowdd == 20 || $nowdd == 22 || $nowdd == 24 || $nowdd == 26 || $nowdd == 28 ) 
	{
	 $mess="<b>Hi ".$name.",</b><BR><BR><h3>Happy Birthday!!! Wish you a many many happy returns of the day.May God bless you with health, wealth and prosperity in your life. </h3><BR><BR>"."<br><img src='http://dkkkpmba.com/MyApps/mydocs/birth/4.jpg'><br><br>"."<b>Thanks & Regards <BR>Amit Bhalerao<BR></b>";
	  }
else 
	{
   $mess="Hi ".$name.",<BR><BR><h3>Happy Birthday!!! Wish you a many many happy returns of the day.May God bless you with health, wealth and prosperity in your life. </h3><BR><BR>"."<br><img src='http://dkkkpmba.com/MyApps/mydocs/birth/5.jpg'><br><br>"."<b>Thanks & Regards <BR>Amit Bhalerao<BR></b>";
   	}

$sub="Happy Birthday";
sendMail($mess,$sub,$emailid,$name);
}

function sendEmailToMe($name) 
{
$content="Hi Amit".",<BR><h3>Todays Birthday : ".$name."</h3><br><br>"."<b>Thanks & Regards <BR>Amit Bhalerao</b>";
$subject="Today's Birthday";
$emailid="amit@incredibletechsolve.com";

$email = new PHPMailer();
$email->From      = 'dkkkpmba@lin6.plreseller.com';
$email->FromName  = 'Amit Bhalerao';
$email->Subject   = $subject;
$email->Body      = $content;
$email->IsHTML(true); 
$email->AddAddress($emailid);
$b=$email->Send();
}

function sendMail($content,$subject,$emailid,$name)
       {
      
        $email = new PHPMailer();
        $email->From      = 'dkkkpmba@lin6.plreseller.com';
        $email->FromName  = 'Amit Bhalerao';
        $email->Subject   = $subject;
        $email->Body      = $content;
        $email->IsHTML(true); 
        $email->AddAddress($emailid);
        $b=$email->Send();
        
	if($b == "true") 
	    { 	
	    echo "Greetings Sent Successfully to : ".$name."<br>";
	    }
	 else
	    echo "Failed"."<br>"; 
	}
	
function sendBirthdaySms($mobno,$mess)
	{
    	    
    //Your authentication key
    $authKey = "17502A4Dd2c6LqP15f930840";
    
    //Sender ID,While using route4 sender id should be 6 characters long.
    $senderId = "INTECH";
    
    //Define route 
    $route = "4";
    //Prepare you post parameters
    $postData = array(
        'authkey' => $authKey,
        'mobiles' => $mobno,
        'message' => $mess,
        'sender' => $senderId,
        'route' => $route
    );
    
    //API URL
    $url="http://sms.hostingdesire.com/api/sendhttp.php";
    
    // init the resource
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData
        //,CURLOPT_FOLLOWLOCATION => true
    ));
    
    
    //Ignore SSL certificate verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    
    //get response
    $output = curl_exec($ch);
    
    //Print error if any
    if(curl_errno($ch))
    {
        echo 'error:' . curl_error($ch);
    }

    curl_close($ch);
	}
          


?>	