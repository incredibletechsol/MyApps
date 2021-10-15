<?php
include('phpmailer/class.phpmailer.php');
include('classes/crud.php');

include('createzip.php');
$db = new Database();
$db->connect();
	
//Save
if(isset($_POST['savedocument']))
{
						
	$docname=$_POST['docname'];
	
	if(isset($_POST['savedocument']) && $_FILES['pdffile']['size'] > 0)
		{
		$fileName = $_FILES['pdffile']['name'];
		$tmpName  = $_FILES['pdffile']['tmp_name'];
		$fileSize = $_FILES['pdffile']['size'];
		$fileType = $_FILES['pdffile']['type'];
		}

	$target_path="mypdfdocs/";
	$target_path=$target_path.basename($_FILES['pdffile']['name']);
	if(move_uploaded_file($_FILES['pdffile']['tmp_name'],$target_path))
		{
		$db->insert("tbl_mypdfdocs",array('docname'=>$docname,'pdffilename'=>$fileName));  
		$mess="PDF Document ".$fileName."  Uploaded Successfully...";
		//sendSms($mess);
		echo "<script> window.location='mypdfdocs.php?msg=save'</script>";
		}
}



// Delete and Sendmail
if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "deletepdfdoc")
	{
	include('conn.php');
	$id=$_GET['id'];
	$query1="select id,pdffilename from tbl_mypdfdocs where id='$id' ";
	$rs=mysqli_query($conn,$query1);
	$row=mysqli_fetch_array($rs);
	$utemp="mypdfdocs/".$row[1];
	unlink($utemp);
	$db->delete("tbl_mypdfdocs","id='$id'"); 
	$mess="PDF Document ".$row[1]."  Deleted Successfully...";
//	sendSms($mess);
	echo "<script> window.location='mypdfdocs.php?msg=delete'</script>";
	}
	
	if($param  == "sendonemail")
	{
	$attachmentName=$_GET['name'];
	$file="mypdfdocs/".$attachmentName;
	sendMail($file,$attachmentName);
	}
	
	if($param == "sendzip")
	{
	 create_zip('/home/siddhesh/public_html/MyApps/mydocs/mypdfdocs','mypdfdocs.zip');
         sendZipMail('My PDF Documents','My PDF Documents','/home/siddhesh/public_html/MyApps/mydocs/mypdfdocs.zip','mypdfdocs.zip');
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
	    $mess="PDF Document ".$attachmentName."  sent on your email.";
	    //sendSms($mess);
	    echo "<script> window.location='mypdfdocs.php?msg=sent'</script>";
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
	    echo "<script> window.location='mypdfdocs.php?msg=sentzip'</script>";
	    }
	 else
	    echo "Failed"."<br>"; 
	}
	



?>