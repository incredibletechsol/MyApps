<?php
require_once('fonepaisa.php');

/*Code for verifying the confirmation*/
$response=fonepaisa_inquirepay(array(
		'id'=>'FPTEST',
		'merchant_id'=>'FPTEST',
		'invoice'=>'ORDER100',
		'api_key'=>'08Z1782051U62BY9OUGW4XM67GF2004',
		'private_key' => 'file://priv.pem'
	));
if ($response == true) {
	echo $response;
}
else {
	echo $response;
}
	
exit
?>
