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

	$target_path="myletters/";
	$target_path=$target_path.basename($_FILES['pdffile']['name']);
	if(move_uploaded_file($_FILES['pdffile']['tmp_name'],$target_path))
		{
		$db->insert("tbl_myletters",array('docname'=>$docname,'filename'=>$fileName));  
		$mess="Letter ".$fileName."  Uploaded Successfully...";
		echo "<script> window.location='myletters.php?msg=save'</script>";
		}
}



// Delete and Sendmail
if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "deleteletter")
	{
	include('conn.php');
	$id=$_GET['id'];
	$query1="select id,filename from tbl_myletters where id='$id' ";
	$rs=mysqli_query($conn,$query1);
	$row=mysqli_fetch_array($rs);
	$utemp="myletters/".$row[1];
	unlink($utemp);
	$db->delete("tbl_myletters","id='$id'"); 
	$mess="Letter ".$row[1]."  Deleted Successfully...";
	echo "<script> window.location='myletters.php?msg=delete'</script>";
	}
	
	if($param  == "sendonemail")
	{
	$attachmentName=$_GET['name'];
	$file="myletters/".$attachmentName;
	sendMail($file,$attachmentName);
	}
	
	if($param == "sendzip")
	{
	 create_zip('/home/siddhesh/public_html/MyApps/mydocs/myletters','myletters.zip');
     sendZipMail('My Letters','My Letters','/home/siddhesh/public_html/MyApps/mydocs/myletters.zip','myletters.zip');
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
	    $mess="Letter ".$attachmentName."  sent on your email.";
	    echo "<script> window.location='myletters.php?msg=sent'</script>";
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
	    echo $subject.' Backup Done Successfully...';
	    unlink($file);
	    echo "<script> window.location='myletters.php?msg=sentzip'</script>";
	    }
	 else
	    echo "Failed"."<br>"; 
	}	
	



?>