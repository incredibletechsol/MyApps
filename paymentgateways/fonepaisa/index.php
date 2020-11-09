<?php
require_once('fonepaisa.php');

/* IMPORTANT NOTE: The below set of values will work for sandbox integration with fonePaisa payment gateway.
 * To move to live environment, the following values are to be changed:
   1. id : Merchant id
   2. merchant_id : Merchant id
   3. merchant_display : Merchant Display name
   4. invoice_amt : The amount should always be in 2 decimal format.
   5. amount : The amount should always be in 2 decimal format.
   6. callback_url: URL that will show the payment success page
   7. callback_failure_url : URL that will show the payment failure page
   8. is_live_env : Change the value to 'Y'
*/

fonepaisa_forward(array(
			'id'=>'FPTEST',
			'merchant_id'=>'FPTEST',
			'merchant_display'=>'fonePaisa Test Merchant',
			'invoice_amt' => '10.00',
			'amount' => '10.00',
			'email'=> '',
			'mobile_no'=> '',
			'callback_url'=>'https://test.fonepaisa.com/pgt/cfm.jsp',
			'callback_failure_url'=>'https://test.fonepaisa.com/pgt/fail.jsp',
			'invoice'=>'FPORDER'.rand(1,100000000),
			'api_key'=>'08Z1782051U62BY9OUGW4XM67GF2004',
			'private_key'=>'file://priv.pem',
			'public_key'=>'',
			'is_live_env'=>'N' //The value should be changed to 'Y' when one wants to move to production
		));
exit
?>
