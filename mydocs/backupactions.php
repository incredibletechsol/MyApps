<?php
function create_zip($realPath,$fileName,$clgName) {
	

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


if($clgName === "MIM") {
    foreach ($files as $name => $file)
    {
        // Skip directories (they would be added automatically)
         
    	    if (!$file->isDir())
    	    {
    	        // Get real and relative path for current file
    	        $filePath = $file->getRealPath();
    	       
    	        $relativePath = substr($filePath, strlen($rootPath) + 1);
    	       	if(
    	       	strpos($relativePath , 'dkkkpbpp.com/') !== false || 
    	       	strpos($relativePath , 'dkkkpitikalamb.com/') !== false ||
    	       	strpos($relativePath , 'dkkkpjrclscikalamb.com/') !== false || 
    	       	strpos($relativePath , 'dkkkpsvems.com/') !== false ||  
    	       	strpos($relativePath , 'constroqchecklab.com/') !== false ||  
    	       	strpos($relativePath , 'ihsdpsatara.com/') !== false ||  
    	       	strpos($relativePath , 'mutilvrndor_storage/') !== false || 
    	       	strpos($relativePath , 'MyApps/') !== false || 
    	       	strpos($relativePath , 'kikaleassociates.com/') !== false ||
    	       	strpos($relativePath , 'storage1/') !== false ||
    	      	strpos($relativePath , 'kasturicollection.com/') !== false  || 
    	       	strpos($relativePath , 'vinayakelectrical.in/') !== false
    	       	) 
    			{
    			continue;
    			}
    		
    	        else {
    	           $zip->addFile($filePath, $relativePath);
    	           }
    	     }
       
    }
}
else {
     foreach ($files as $name => $file)
    {
      if (!$file->isDir())
	    {
	        // Get real and relative path for current file
	        $filePath = $file->getRealPath();
	        $relativePath = substr($filePath, strlen($rootPath) + 1);
	        $zip->addFile($filePath, $relativePath);
	    
	     }
    }
}

// Zip archive will be created only after closing object
$zip->close();
}


if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "mim")
	{
    create_zip('/home/dkkkpmba/public_html/','dkkkpmba.zip',"MIM");
    downloadFile('dkkkpmba.zip');
    deleteFile('dkkkpmba.zip');
    echo "<script> window.location='website.php?msg=done'</script>";
	}
if($param  == "bpp")
	{
    create_zip('/home/dkkkpmba/public_html/dkkkpbpp.com','dkkkpbpp.zip',"BPP");
    downloadFile('dkkkpbpp.zip');
    deleteFile('dkkkpbpp.zip');
    echo "<script> window.location='website.php?msg=done'</script>";
	}	
if($param  == "iti")
	{
    create_zip('/home/dkkkpmba/public_html/dkkkpitikalamb.com','dkkkpitikalamb.zip',"ITI");
    downloadFile('dkkkpitikalamb.zip');
    deleteFile('dkkkpitikalamb.zip');
    echo "<script> window.location='website.php?msg=done'</script>";
	}	
if($param  == "lsps")
	{
    create_zip('/home/dkkkpmba/public_html/dkkkpjrclscikalamb.com','dkkkpjrclscikalamb.zip',"ITI");
    downloadFile('dkkkpjrclscikalamb.zip');
    deleteFile('dkkkpjrclscikalamb.zip');
    echo "<script> window.location='website.php?msg=done'</script>";
	}	
if($param  == "svems")
	{
    create_zip('/home/dkkkpmba/public_html/dkkkpsvems.com','dkkkpsvems.zip',"ITI");
    downloadFile('dkkkpsvems.zip');
    deleteFile('dkkkpsvems.zip');
    echo "<script> window.location='website.php?msg=done'</script>";
	}
if($param  == "kikale")
	{
    create_zip('/home/dkkkpmba/public_html/kikaleassociates.com','kikaleassociates.zip',"KIKALE");
    downloadFile('kikaleassociates.zip');
    deleteFile('kikaleassociates.zip');
    echo "<script> window.location='website.php?msg=done'</script>";
	}	
if($param  == "ihsdp")
	{
    create_zip('/home/dkkkpmba/public_html/ihsdpsatara.com','ihsdpsatara.zip',"KIKALE");
    downloadFile('ihsdpsatara.zip');
    deleteFile('ihsdpsatara.zip');
    echo "<script> window.location='website.php?msg=done'</script>";
	}
if($param  == "constroqchecklab")
	{
    create_zip('/home/dkkkpmba/public_html/constroqchecklab.com','constroqchecklab.zip',"KIKALE");
    downloadFile('constroqchecklab.zip');
    deleteFile('constroqchecklab.zip');
    echo "<script> window.location='website.php?msg=done'</script>";
	}
if($param  == "kasturicollection")
	{
    create_zip('/home/dkkkpmba/public_html/kasturicollection.com','kasturicollection.zip',"KIKALE");
    downloadFile('kasturicollection.zip');
    deleteFile('kasturicollection.zip');
    echo "<script> window.location='website.php?msg=done'</script>";
	}
if($param  == "vinayakelec")
	{
    create_zip('/home/dkkkpmba/public_html/vinayakelectrical.in','vinayakelectrical.zip',"KIKALE");
    downloadFile('vinayakelectrical.zip');
    deleteFile('vinayakelectrical.zip');
    echo "<script> window.location='website.php?msg=done'</script>";
	}	
}	

function downloadFile($file){
  $download_path = '/home/dkkkpmba/public_html/MyApps/mydocs/'.$file;
  $file_to_download = $download_path; // file to be downloaded
  header("Expires: 0");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");  header("Content-type: application/file");
  header('Content-length: '.filesize($file_to_download));
  header('Content-disposition: attachment; filename='.basename($file_to_download));
  readfile($file_to_download);
}

function deleteFile($file){
 $delete_path = '/home/dkkkpmba/public_html/MyApps/mydocs/'.$file;
 unlink($delete_path);
}


?>