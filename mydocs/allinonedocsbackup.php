<?php
include('/home/dkkkpmba/public_html/MyApps/mydocs/phpmailer/class.phpmailer.php');
include('sms.php');

function create_zip($realPath,$fileName) {
	

// Get real path for our folder
$rootPath = realpath($realPath);

// Initialize archive object
$zip = new ZipArchive();
$zip->open($fileName, ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
     
	    if (!$file->isDir())
	    {
	        // Get real and relative path for current file
	        $filePath = $file->getRealPath();
	       
	        $relativePath = substr($filePath, strlen($rootPath) + 1);
	                
	        $zip->addFile($filePath, $relativePath);
	     }
   
}

// Zip archive will be created only after closing object
$zip->close();
}



create_zip('/home/dkkkpmba/public_html/MyApps/mydocs/payslips','payslips.zip');

sendMail('My Payslips','My Payslips','/home/dkkkpmba/payslips.zip','payslips.zip');

create_zip('/home/dkkkpmba/public_html/MyApps/mydocs/myletters','myletters.zip');

sendMail('My Letters','My Letters','/home/dkkkpmba/myletters.zip','myletters.zip');
 
/*create_zip('/home/dkkkpmba/public_html/MyApps/mydocs/myimgdocs','myimgdocs.zip');

sendMail('My Image Documents','My Image Documents','/home/dkkkpmba/myimgdocs.zip','myimgdocs.zip');

create_zip('/home/dkkkpmba/public_html/MyApps/mydocs/mypdfdocs','mypdfdocs.zip');

sendMail('My PDF Documents','My PDF Documents','/home/dkkkpmba/public_html/MyApps/mydocs/mypdfdocs.zip','mypdfdocs.zip');*/


function sendMail($content,$subject,$file,$attachmentName)
       {
        $email = new PHPMailer();
        $email->From      = 'dkkkpmba@lin6.plreseller.com';
        $email->FromName  = 'Amit Bhalerao';
        $email->Subject   = $subject;
        $email->Body      = $content;
        $email->AddAddress( 'amitbaramatimca@gmail.com' );
        $email->AddAttachment( $file, $attachmentName );
        $b=$email->Send();
        
	if($b == "true") 
	    { 	
	    //sendWay2Sms($subject.' Backup Done Successfully...');
	    echo $subject.' Backup Done Successfully...';
	    unlink($file);
	    }
	 else
	    echo "Failed"."<br>"; 
	}
?>