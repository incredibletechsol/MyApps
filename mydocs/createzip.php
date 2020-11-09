<?php


/* creates a compressed zip file */
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

?>