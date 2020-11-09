<?php
require_once('fonepaisa.php');

function verify_confirmpayment(){
/*Code for verifying the confirmation*/
	$retval=fonepaisa_verifymsg(array(
			'invoice'=>$_POST["invoice"],
			'payment_reference'=>$_POST["payment_reference"],
			'sign' => $_POST["sign"],
			'public_key' => 'file://fonepaisa.pub'
		));
	if ($retval == true) {
		echo "Message is verified";
	}
	else {
		echo "Message is un verified";
	}
	
}
exit
?>
