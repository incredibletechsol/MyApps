<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata'); 
include('classes/crud.php');

$db = new Database();
$db->connect();
	
//Save
if(isset($_POST['savefriend']))
{
	$name=$_POST['name'];
	$emailid=$_POST['UserName'];
	$contact=$_POST['contact'];
	$birthdate=$_POST['bdate'];
	$annvdate=$_POST['adate'];
	
	$db->insert("tbl_friends",array('name'=>$name,'mobileno'=>$contact,'emailid'=>$emailid,'birthdate'=>$birthdate,'annvdate'=>$annvdate));  
	echo "<script> window.location='myfriends.php?msg=save'</script>";
}


//Update
if(isset($_POST['updatefriend']))
{
	$id = $_POST['id'];
	$name=$_POST['name1'];
	$emailid=$_POST['UserName1'];
	$contact=$_POST['contact1'];
	$birthdate=$_POST['bdate1'];
	$annvdate=$_POST['adate1'];
	$isSpecial =$_POST['isSpecial'];
	
	$db->update("tbl_friends",array('name'=>$name,'mobileno'=>$contact,'emailid'=>$emailid,'birthdate'=>$birthdate,'annvdate'=>$annvdate,'isSpecial'=>$isSpecial),"id='$id'");  
	echo "<script> window.location='myfriends.php?msg=update'</script>";
}


// Delete
if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "deletefriend")
	{
	$id=$_GET['id'];
	$db->delete("tbl_friends","id='$id'"); 
	echo "<script> window.location='myfriends.php?msg=delete'</script>";
	}
	 
if($param == "special") {
    $mobno=$_GET['mobileno'];
    for($i=1;$i<=5;$i++) {
        $mess = "";
        $mess=getBirthdayMessage();       
        $mess=str_replace("Kasturi Collection","Amit Bhalerao",$mess);
		sendSpecialSms($mess,$mobno);
        }
    echo "<script> window.location='myfriends.php?msg=special'</script>";    
    }
}

function sendSms($message,$mobile) 
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

function sendSpecialSms($message,$mobile) 
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

function getBirthdayMessage()
{
include('conn.php');

$day=rand(1,31);
		
$query="SELECT message FROM tbl_birthday_messages_kasturi where id='$day'";

$message="";

$rs=mysqli_query($conn,$query);


while($row=mysqli_fetch_array($rs))
	{
	$message=$row[0];
	}
 return $message;
}

function getAnnvMessage()
{
include('conn.php');

$day=rand(1,33);
		
$query="SELECT message FROM tbl_anniversary_messages where id='$day'";
				
$rs=mysqli_query($conn,$query);

$message="";

while($row=mysqli_fetch_array($rs)){
	$message=$row[0];
	}
 return $message;
}





?>