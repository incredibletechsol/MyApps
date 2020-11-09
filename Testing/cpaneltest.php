<?php
// PHP script to allow periodic cPanel backups automatically, optionally to a remote FTP server. 
// This script contains passwords. It is important to keep access to this file secure (we would ask you to place it in your home directory, not public_html) 
// You need create 'backups' folder in your home directory ( or any other folder that you would like to store your backups in ). 
// ********* THE FOLLOWING ITEMS NEED TO BE CONFIGURED ********* 
// Information required for cPanel access 
$cpuser = "phadta12"; // Username used to login to cPanel 
$cppass = "Avaniamey@#$"; // Password used to login to cPanel. NB! you could face some issues with the "$#&/" chars in the password, so if script does not work, please try to change the password. 
$domain = "phadtarefabtech.com";// Your main domain name 
$skin = "x"; // Set to cPanel skin you use (script will not work if it does not match). Most people run the default "x" theme or "x3" theme 
// Information required for FTP host 
$ftpuser = "phadta12"; // Username for FTP account 
$ftppass = 'Avaniamey@#$'; // Password for FTP account NB! you could face some issues with the "$#&/" chars in the password, so if script does not work, please try to change the password.
$ftphost = "103.220.42.147"; // IP address of your hosting account 
$ftpmode = "passiveftp"; // FTP mode 
// Notification information $notifyemail = "any@example.com"; // Email address to send results  
// Secure or non-secure mode $secure = 0; // Set to 1 for SSL (requires SSL support), otherwise will use standard HTTP 
// Set to 1 to have web page result appear in your cron log $debug = 0; 
// *********** NO CONFIGURATION ITEMS BELOW THIS LINE ********* 
$ftpport = "21"; 
$ftpdir = "/backups/"; // Directory where backups stored (make it in your /home/ directory). Or you can change 'backups' to the name of any other folder created for the backups; 
if ($secure) { 
$url = "ssl://".$domain; 
$port = 2083; 
} else { 
$url = $domain; 
$port = 2082; 
} 
$socket = fsockopen($url,$port); 
if (!$socket) { echo "Failed to open socket connection... Bailing out!n"; exit; } 
// Encode authentication string 
$authstr = $cpuser.":".$cppass; 
$pass = base64_encode($authstr); 
$params = "dest=$ftpmode&email=$notifyemail&server=$ftphost&user=$ftpuser&pass=$ftppass&port=$ftpport&rdir=$ftpdir&submit=Generate Backup"; 
// Make POST to cPanel 
fputs($socket,"POST /frontend/".$skin."/backup/dofullbackup.html?".$params." HTTP/1.0\r\n"); 
fputs($socket,"Host: $domain\r\n"); 
fputs($socket,"Authorization: Basic $pass\r\n"); 
fputs($socket,"Connection: Close\r\n"); 
fputs($socket,"\r\n"); 
// Grab response even if we do not do anything with it. 
while (!feof($socket)) { 
$response = fgets($socket,4096); if ($debug) echo $response; 
} 
fclose($socket); 
?> 