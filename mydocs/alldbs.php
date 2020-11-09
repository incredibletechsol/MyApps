<?php
 include('logincommon.php'); 
 include('classes/crud.php');
?>
	
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>All Databases</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css"/>
 
<script src="js/demo-rtl.js"></script>
 
 
<link rel="stylesheet" type="text/css" href="css/libs/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css"/>
 
<link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css"/>
 
<link rel="stylesheet" type="text/css" href="css/libs/dataTables.fixedHeader.css">
<link rel="stylesheet" type="text/css" href="css/libs/dataTables.tableTools.css">
<script type="text/javascript" src="js/customalert.js"></script>
<link rel="stylesheet" type="text/css" href="css/customalert.css" />
<link rel="stylesheet" href="css/default.css" type="text/css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<script>
setTimeout(function () {SUCCESS.innerHTML =""}, 10000);
</script>	
<div id="theme-wrapper">
<?php include('header.php'); ?>
	<div id="page-wrapper" class="container">
		<div class="row">
			<?php include('leftsidebar.php'); ?>
		</div>
		<div id="content-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<h1>All Databases</h1>
							<?php
							if(isset($_GET['msg'])) 
								{
								$param=$_GET['msg'];
								if($param=="save")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Pay Slip Uploaded Successfully</strong></div></div>";
								if($param=="delete")
									echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Pay Slip Deleted Successfully</strong></div></div>";
								if($param=="sent")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>Payslip Sent on your Email</strong></div></div>";
								if($param=="sentzip")
									 echo "<div id='SUCCESS'><div class='alert alert-success'><i class='fa fa-check-circle fa-fw fa-lg'></i><strong>All Payslips Sent on your Email</strong></div></div>";	 
								}
							?>
					
						</div>
					</div>
					

					<div class="row">
						<div class="col-lg-12">
							<div class="main-box clearfix">
								<div class="main-box-body clearfix">
									<div class="table-responsive">
										<?php
											echo "<table id='table-example-fixed' class='table table-hover'>";
											echo "<thead>";
												echo "<tr>";
													echo "<th>Send On My Email</th>";
													echo "<th>Download</th>";
												echo "</tr>";
											echo "</thead>";
											echo "<tbody>";
											echo "<tr>";  
							    		    echo  "<td><a href='alldbs.php?msg=process'><img src='img/email.png'></a></td>";
							     		    echo "<td><a class='btn' href='http://www.dkkkpmba.com/backup/allinonebackup/backups.zip'><i class='fa fa-download'></i> Download</a></td>";
											echo "</tr>"; 
											echo "</tbody>";  
											echo "</table>";
										?>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>	
			</div>
		</div>
	</div>
</div>

<?php

if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param == "process"){
     processBackup();
    }
}

function processBackup(){
     include('takedbbackup.php');
    $files_to_zip = array(
    	'/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_bpp.sql',
    	'/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_iti.sql',
        '/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_mba.sql',
        '/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_pkc.sql',
        '/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_spc.sql',
        '/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_svems.sql',
        '/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_myapps.sql',
        '/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_ihsdpsatara.sql',
        '/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_website_clients.sql',
        '/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_kasturicollection.sql',
        '/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_kasturicollectionmultiseller.sql',
        '/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_vinayakelec.sql'
    );


    $result = create_zip($files_to_zip,'/home/dkkkpmba/public_html/backup/allinonebackup/backups.zip');
    sendMail('DKKKP:MIM Backup','DKKKP:MIM Backup','/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_mba.sql','dkkkpmba_mba.sql','DKKKP:MIM Backup Database-Backup Done Successfully...', 'A');
    
     sendMail('DKKKP:BPP Backup','DKKKP:BPP Backup','/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_bpp.sql','dkkkpmba_bpp.sql','DKKKP:BPP Backup Database-Backup Done Successfully...', 'A');
    
     sendMail('DKKKP:ITI Backup','DKKKP:ITI Backup','/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_iti.sql','dkkkpmba_iti.sql','DKKKP:ITI Backup Database-Backup Done Successfully...', 'A');
    
    sendMail('DKKKP:SVEMS Backup','DKKKP:SVEMS Backup','/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_svems.sql','dkkkpmba_svems.sql','DKKKP:SVEMS Backup Database-Backup Done Successfully...', 'A');
    
    sendMail('DKKKP:LSPS Backup','DKKKP:LSPS Backup','/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_spc.sql','dkkkpmba_spc.sql','DKKKP:LSPS Backup Database-Backup Done Successfully...', 'A');
    
    //sendMail('IHSDPSATARA Backup','IHSDP-Backup','/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_ihsdpsatara.sql','dkkkpmba_ihsdpsatara.sql','IHSDPSATARA Database-Backup Done Successfully...','B');
    
    //sendMail('MyDocuments Backup','MyDocuments-Backup 
    //','/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_myapps.sql','dkkkpmba_myapps.sql','MyDocuments Backup Database-Backup Done Successfully...','B');
    
   //  sendMail('All Other Websites Database Backup','Clients-Backup','/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_website_clients.sql','dkkkpmba_website_clients.sql','All Other Websites Database Backup Done Successfully...','B');
    
   //  sendMail('All in One Database Backup','All in One Database Backup','/home/dkkkpmba/public_html/backup/allinonebackup/backups.zip','backups.zip','All in One Database Backup Done Successfully...', 'A');
    
    // sendMail('Kasturi Collection Database Backup','Kasturi Collection DB Backup','/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_kasturicollection.sql','dkkkpmba_kasturicollection.sql','Kasturi Collection Backup Done Successfully...','D');
    
     //sendMail('Kasturi Collection Multivendor Database Backup','Kasturi Collection Multivendor DB Backup','/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_kasturicollectionmultiseller.sql','dkkkpmba_kasturicollectionmultiseller.sql','Kasturi Collection Multivendor Backup Done Successfully...','D');
    
     //sendMail('Vinayak Electricals Database Backup','Vinayak Electricals DB Backup','/home/dkkkpmba/public_html/backup/allinonebackup/backups/dkkkpmba_vinayakelec.sql','dkkkpmba_vinayakelec.sql','Vinayak Electricals Backup Done Successfully...','D');
}

/* creates a compressed zip file */
function create_zip($files = array(),$destination = '',$overwrite = true) {
	//if the zip file already exists and overwrite is false, return false
	if(file_exists($destination) && !$overwrite) { return false; }
	//vars
	$valid_files = array();
	//if files were passed in...
	if(is_array($files)) {
		//cycle through each file
		foreach($files as $file) {
			//make sure the file exists
			if(file_exists($file)) {
				$valid_files[] = $file;
			}
		}
	}
	//if we have good files...
	if(count($valid_files)) {
		//create the archive
		$zip = new ZipArchive();
		if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
			return false;
		}
		//add the files
		foreach($valid_files as $file) {
			$zip->addFile($file,$file);
		}
		//debug
		//echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
		
		//close the zip -- done!
		$zip->close();
		
		//check to make sure the file exists
		return file_exists($destination);
	}
	else
	{
		return false;
	}
}

function sendMail($content,$subject,$file,$attachmentName,$message,$param)
{
        include('/home/dkkkpmba/public_html/backup/allinonebackup/phpmailer/class.phpmailer.php');
        $content = $content;
        $email = new PHPMailer();
        $email->From      = 'dkkkpmba@lin6.plreseller.com';
        $email->FromName  = 'Amit Bhalerao';
        $email->Subject   = $subject;
        $email->Body      = $content;
        if($param == "A")
      	  $email->AddAddress('phadtarecronmail@gmail.com');
      	else if($param == "B")
      	   $email->AddAddress('srcsyscronmail@gmail.com');
      	else if($param == "D")
      	   $email->AddAddress('kasturicollection2018@gmail.com');   
      	   
        $email->AddAttachment( $file, $attachmentName );
        
        $b=$email->Send();

}
?>


<?php include('settings.php'); ?>
  
<script src="js/demo-skin-changer.js"></script>  
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.nanoscroller.min.js"></script>
<script src="js/demo.js"></script>  
 
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.fixedHeader.js"></script>
<script src="js/dataTables.tableTools.js"></script>
<script src="js/jquery.dataTables.bootstrap.js"></script>
 
<script src="js/scripts.js"></script>
<script src="js/pace.min.js"></script>
 
<script>
$(document).ready(function() {
	
	
	var tableFixed = $('#table-example-fixed').dataTable({
		'info': false,
		'pageLength': 10
	});
	
	new $.fn.dataTable.FixedHeader( tableFixed );
});
</script>
 <script type="text/javascript" src="js/zebra_datepicker.js"></script>
<script type="text/javascript" src="js/core.js"></script>
</body>
</html>