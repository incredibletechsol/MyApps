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

	$target_path="otherspdfdocs/";
	$target_path=$target_path.basename($_FILES['pdffile']['name']);
	if(move_uploaded_file($_FILES['pdffile']['tmp_name'],$target_path))
		{
		$db->insert("tbl_otherspdfdocs",array('docname'=>$docname,'pdffilename'=>$fileName));  
		$mess="PDF Document ".$fileName."  Uploaded Successfully...";
	//	sendSms($mess);
		echo "<script> window.location='otherspdfdocs.php?msg=save'</script>";
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
	$query1="select id,pdffilename from tbl_otherspdfdocs where id='$id' ";
	$rs=mysqli_query($conn,$query1);
	$row=mysqli_fetch_array($rs);
	$utemp="otherspdfdocs/".$row[1];
	unlink($utemp);
	$db->delete("tbl_otherspdfdocs","id='$id'"); 
	$mess="PDF Document ".$row[1]."  Deleted Successfully...";
	//sendSms($mess);
	echo "<script> window.location='otherspdfdocs.php?msg=delete'</script>";
	}
	
	if($param  == "sendonemail")
	{
	$attachmentName=$_GET['name'];
	$file="otherspdfdocs/".$attachmentName;
	sendMail($file,$attachmentName);
	}
	
	if($param == "sendzip")
	{
	 create_zip('/home2/dkkkpmba/public_html/MyApps/mydocs/otherspdfdocs','otherspdfdocs.zip');
     sendZipMail('Other PDF Documents','Other PDF Documents','/home2/dkkkpmba/public_html/MyApps/mydocs/otherspdfdocs.zip','otherspdfdocs.zip');
	}
}

	
function sendMail($file,$attachmentName)
       {
        $email = new PHPMailer();
        $email->From      = 'amitbaramatimca@gmail.com';
        $email->FromName  = 'Amit Bhalerao';
        $email->Subject   = "Your Document ".$attachmentName;
        $email->Body      = "Your Document ".$attachmentName;
        $email->AddAddress( 'amitbaramatimca@gmail.com' );
        $email->AddAttachment( $file, $attachmentName );
        $b=$email->Send();
        
	if($b == "true") 
	    { 	
	    $mess="PDF Document ".$attachmentName."  sent on your email.";
	   // sendSms($mess);
	    echo "<script> window.location='otherspdfdocs.php?msg=sent'</script>";
	    }
	 else
	    echo "Failed"."<br>"; 
	}

function sendZipMail($content,$subject,$file,$attachmentName)
       {
        $email = new PHPMailer();
        $email->From      = 'amitbaramatimca@gmail.com';
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
	    echo "<script> window.location='otherspdfdocs.php?msg=sentzip'</script>";
	    }
	 else
	    echo "Failed"."<br>"; 
	}
	
	



?>