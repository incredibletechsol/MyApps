<?php

include('classes/crud.php');

include('createzip.php');
$db = new Database();
$db->connect();
	
//Save
if(isset($_POST['savepayslip']))
{
	$payid=rand(0,99999);
						
	$date=$_POST['salarydate'];
	
	if(isset($_POST['savepayslip']) && $_FILES['payslipfile']['size'] > 0)
		{
		$fileName = $_FILES['payslipfile']['name'];
		$tmpName  = $_FILES['payslipfile']['tmp_name'];
		$fileSize = $_FILES['payslipfile']['size'];
		$fileType = $_FILES['payslipfile']['type'];
		}

	$target_path="payslips/";
	$target_path=$target_path.basename($_FILES['payslipfile']['name']);
	if(move_uploaded_file($_FILES['payslipfile']['tmp_name'],$target_path))
		{
		$db->insert("tbl_mypayslips",array('id'=>$payid,'date'=>$date,'name'=>$fileName));  
		$mess="Payslip ".$fileName."  Uploaded Successfully...";
		//sendSms($mess);
		echo "<script> window.location='mypayslips.php?msg=save'</script>";
		}
}


// Delete and Sendmail
if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "deletepayslip")
	{
	include('conn.php');
	$id=$_GET['id'];
	$query1="select id,name from tbl_mypayslips where id='$id' order by date desc";
	$rs=mysqli_query($conn,$query1);
	$row=mysqli_fetch_array($rs);
	$utemp="payslips/".$row[1];
	unlink($utemp);
	$db->delete("tbl_mypayslips","id='$id'"); 
	$mess="Payslip ".$row[1]."  Deleted Successfully...";
	//sendSms($mess);
	echo "<script> window.location='mypayslips.php?msg=delete'</script>";
	}
	
	if($param  == "sendonemail")
	{
	$attachmentName=$_GET['name'];
	$file="payslips/".$attachmentName;
	sendMail($file,$attachmentName);
	}
	
	if($param == "sendzip")
	{
	 create_zip('/home/siddhesh/public_html/MyApps/mydocs/payslips','payslips.zip');
     sendZipMail('My Payslips','My Payslips','/home/siddhesh/public_html/MyApps/mydocs/payslips.zip','payslips.zip');
	}
}


function sendMail($file,$attachmentName)
       {
        include('/home/siddhesh/public_html/MyApps/mydocs/phpmailer/class.phpmailer.php');
        $email = new PHPMailer();
        $email->From      = 'siddhesh@siddheshwargroup.co.in';
        $email->FromName  = 'Amit Bhalerao';
        $email->Subject   = "Your Payslip ".$attachmentName;
        $email->Body      = "Your Payslip ".$attachmentName;
        $email->AddAddress( 'amitbaramatimca@gmail.com' );
        $email->AddAttachment( $file, $attachmentName );
        $b=$email->Send();
        
	if($b == "true") 
	    { 	
	    $mess="Payslip ".$attachmentName."  sent on your email.";
	    //sendSms($mess);
	    echo "<script> window.location='mypayslips.php?msg=sent'</script>";
	    }
	 else
	    echo "Failed"."<br>"; 
	}
	
function sendZipMail($content,$subject,$file,$attachmentName)
       {
        include('/home/siddhesh/public_html/MyApps/mydocs/phpmailer/class.phpmailer.php');
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
	    echo "<script> window.location='mypayslips.php?msg=sentzip'</script>";
	    }
	 else
	    echo "Failed"."<br>"; 
	}
	
	



?>