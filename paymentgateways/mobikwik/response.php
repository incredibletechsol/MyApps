<?php
/*
Template Name: Zaakpay Response Page
*/
?>
<?php include('checksum.php'); ?>
<?php
	// Please insert your own secret key here
	$secret = 'fa3b29ad1ae44d2eb970cbb269030d94';

	$recd_checksum = $_POST['checksum'];
	$all = Checksum::getAllResponseParams();
	error_log("AllParams:".$all);
	error_log("Secret Key : ".$secret);
	$checksum_check = Checksum::verifyChecksum($recd_checksum, $all, $secret);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zaakpay</title>
</head>
<body>

<center>
<table width="500px;">
	<?php Checksum::outputResponse($checksum_check);
	?>
</table>


</center>



</body>
</html>
