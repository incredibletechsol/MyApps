<?php
include('phpmailer/class.phpmailer.php');
include('classes/crud.php');
include('sms.php');
include('createzip.php');
$db = new Database();
$db->connect();
	
//Save
if(isset($_POST['savedocument']))
{
						
	$docname=$_POST['docname'];
	
	if(isset($_POST['savedocument']) && $_FILES['imgfile']['size'] > 0)
		{
		$fileName = $_FILES['imgfile']['name'];
		$tmpName  = $_FILES['imgfile']['tmp_name'];
		$fileSize = $_FILES['imgfile']['size'];
		$fileType = $_FILES['imgfile']['type'];
		}

	$target_path="myimgdocs/";
	$target_path=$target_path.basename($_FILES['imgfile']['name']);
	if(move_uploaded_file($_FILES['imgfile']['tmp_name'],$target_path))
		{
		$db->insert("tbl_myimgdocs",array('docname'=>$docname,'filename'=>$fileName));  
		$mess="IMG Document ".$fileName."  Uploaded Successfully...";
		//sendSms($mess);
		echo "<script> window.location='myimgdocs.php?msg=save'</script>";
		}
}



// Delete and Sendmail
if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "deleteimgdoc")
	{
	include('conn.php');
	$id=$_GET['id'];
	$query1="select id,filename from tbl_myimgdocs where id='$id' ";
	$rs=mysqli_query($conn,$query1);
	$row=mysqli_fetch_array($rs);
	$utemp="myimgdocs/".$row[1];
	unlink($utemp);
	$db->delete("tbl_myimgdocs","id='$id'"); 
	$mess="IMG Document ".$row[1]."  Deleted Successfully...";
//	sendSms($mess);
	echo "<script> window.location='myimgdocs.php?msg=delete'</script>";
	}
	
	if($param  == "sendonemail")
	{
	$attachmentName=$_GET['name'];
	$file="myimgdocs/".$attachmentName;
	sendMail($file,$attachmentName);
	}
	
	
	if($param == "sendzip")
	{
	 create_zip('/home/siddhesh/public_html/MyApps/mydocs/myimgdocs','myimgdocs.zip');
     sendZipMail('My Image Documents','My Image Documents','/home/siddhesh/public_html/MyApps/mydocs/myimgdocs.zip','myimgdocs.zip');
	}
}

	
function sendMail($file,$attachmentName)
       {
        $email = new PHPMailer();
        $email->From      = 'siddhesh@siddheshwargroup.co.in';
        $email->FromName  = 'Amit Bhalerao';
        $email->Subject   = "Your Document ".$attachmentName;
        $email->Body      = "Your Document ".$attachmentName;
        $email->AddAddress( 'amitbaramatimca@gmail.com' );
        $email->AddAttachment( $file, $attachmentName );
        $b=$email->Send();
        
	if($b == "true") 
	    { 	
	    $mess="IMG Document ".$attachmentName."  sent on your email.";
	  //  sendSms($mess);
	    echo "<script> window.location='myimgdocs.php?msg=sent'</script>";
	    }
	 else
	    echo "Failed"."<br>"; 
	}
	
function sendZipMail($content,$subject,$file,$attachmentName)
       {
        $email = new PHPMailer();
        $email->From      = 'siddhesh@siddheshwargroup.co.in';
        $email->FromName  = 'Amit Bhalerao';
        $email->Subject   = $subject;
        $email->Body      = $content;
        $email->AddAddress( 'amitbaramatimca@gmail.com' );
        $email->AddAttachment( $file, $attachmentName );
        $b=$email->Send();
        
	if($b == "true") 
	    { 	
	    //sendSms($subject.' Backup Done Successfully...');
	    echo $subject.' Backup Done Successfully...';
	    unlink($file);
	    echo "<script> window.location='myimgdocs.php?msg=sentzip'</script>";
	    }
	 else
	    echo "Failed"."<br>"; 
	}	



?>