<?php
require_once('fonepaisa.php');

/*Code for verifying the confirmation*/
$response=fonepaisa_cancelpay(array(
		'invoice'=>$_POST["invoice"],
		'payment_reference'=>$_POST["payment_reference"],
		'sign' => $_POST["sign"],
		'public_key' => 'file://fonepaisa.pub'
	));
if ($response == true) {
	echo $response;
}
else {
	echo $response;
}
	
exit
?>
