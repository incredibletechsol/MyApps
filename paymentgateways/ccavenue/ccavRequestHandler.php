
<html>
<head>
<title>CCAvenue Payment</title>
</head>
<body>
<center>

<?php include('crypto.php')?>
<?php 

	error_reporting(0);
	
	$merchant_data='';
	$working_key='09FD9C7F7D32F08461A4B58656EA7B31';//Shared by CCAVENUES
	$access_code='AVMN75FA88CK34NMKC';//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>
