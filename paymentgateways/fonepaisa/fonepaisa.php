<?php

function fonepaisa_forward($input){
	$islive = strtoupper($input["is_live_env"]) == "Y" ? 'https://secure.fonepaisa.com/pg/pay' : 'https://test.fonepaisa.com/pg/pay';
	
	$hashinput=$input["api_key"]."#".$input["id"]."#".$input["merchant_id"]."#".$input["invoice"]."#".$input["invoice_amt"]."#";
	
	$pkeyid = openssl_pkey_get_private($input["private_key"]);
	
	// compute signature
	openssl_sign($hashinput, $signature, $pkeyid,"sha512");

	// free the key from memory
	openssl_free_key($pkeyid);
	$hexsign=bin2hex ($signature);

	$html_response= '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
	$html_response.='<html>';
	$html_response.='<head>';
	$html_response.='<script>';
	$html_response.='window.onload = function () {';
	$html_response.='         var act = function(){document.forwardPG.submit()};';
	$html_response.='         window.setTimeout(act,50);';
	$html_response.='  };';
	$html_response.='</script>';
	$html_response.='</head>';
	$html_response.='<form action="'.$islive.'" method="post" name="forwardPG">';
	$html_response.='<input type="hidden" name="msg_name" value="request_payment">';
	$html_response.='<input type="hidden" name="id" value="'.$input["id"].'">';
	$html_response.='<input type="hidden" name="merchant_id" value="'.$input["merchant_id"].'">';
	$html_response.='<input type="hidden" name="merchant_display" value="'.$input["merchant_display"].'">';
	$html_response.='<input type="hidden" name="invoice_amt" value="'.$input["invoice_amt"].'">';
	$html_response.='<input type="hidden" name="amount" value="'.$input["amount"].'">';
	$html_response.='<input type="hidden" name="email" value="'.$input["email"].'">';
	$html_response.='<input type="hidden" name="mobile_no" value="'.$input["mobile_no"].'">';
	$html_response.='<input type="hidden" name="callback_url" value="'.$input["callback_url"].'">';
	$html_response.='<input type="hidden" name="callback_failure_url" value="'.$input["callback_failure_url"].'">';
	$html_response.='<input type="hidden" name="invoice" value="'.$input["invoice"].'">';
	$html_response.='<input type="hidden" name="sign" value="'.$hexsign.'">';
	$html_response.='</form>';
	$html_response.='<body>';
	$html_response.='</body>';
	echo $html_response;
}
function fonepaisa_verifymsg($input){
	$hashinput="#".$input["invoice"]."#".$input["payment_reference"]."#";
	$signature=hex2bin($input["sign"]);
	$pubkeyid = openssl_pkey_get_public($input["public_key"]);
	// state whether signature is okay or not
	$retval=false;
	$ok = openssl_verify($hashinput, $signature, $pubkeyid,"sha512WithRSAEncryption");
	if ($ok == 1) {
		$retval=true;
	}
	// free the key from memory
	openssl_free_key($pubkeyid);
	return $retval;
}
function fonepaisa_inquirepay($input){
	$hashinput=$input["api_key"]."#".$input["id"]."#".$input["merchant_id"]."#".$input["invoice"]."#";
	$pkeyid = openssl_pkey_get_private($input["private_key"]);
	
	// compute signature
	openssl_sign($hashinput, $signature, $pkeyid,"sha512");

	// free the key from memory
	openssl_free_key($pkeyid);
	$hexsign=bin2hex ($signature);
	$postData = array(
		"id"=>$input["id"], 
        	"merchant_id"=>$input["merchant_id"], 
		"sign"=>$hexsign, 
        	"invoice"=>$input["invoice"]
	);

	// Setup cURL
	$ch = curl_init('https://test.fonepaisa.com/portal/payment/inquire');
		curl_setopt_array($ch, array(
    		CURLOPT_POST => TRUE,
    		CURLOPT_RETURNTRANSFER => TRUE,
    		CURLOPT_HTTPHEADER => array(
       		'Content-Type: application/json'
    	),
    	CURLOPT_POSTFIELDS => json_encode($postData)
	));

	// Send the request
	$response = curl_exec($ch);
	// Check for errors
	echo $response;
	if($response === FALSE){
   		 die(curl_error($ch));
		return $response;
	}

	// Decode the response
	$responseData = json_decode($response, TRUE);

	// Print the date from the response
	return $responseData;
		
}
function fonepaisa_cancelpay($input){
	$hashinput=$input["api_key"]."#".$input["id"]."#".$input["merchant_id"]."#".$input["invoice"]."#";
	$pkeyid = openssl_pkey_get_private($input["private_key"]);
	
	// compute signature
	openssl_sign($hashinput, $signature, $pkeyid,"sha512");

	// free the key from memory
	openssl_free_key($pkeyid);
	$hexsign=bin2hex ($signature);
	$postData = array(
		"id"=>$input["id"], 
        	"merchant_id"=>$input["merchant_id"], 
		"sign"=>$hexsign, 
        	"invoice"=>$input["invoice"]
	);

	// Setup cURL
	$ch = curl_init('https://test.fonepaisa.com/portal/payment/cancel');
		curl_setopt_array($ch, array(
    		CURLOPT_POST => TRUE,
    		CURLOPT_RETURNTRANSFER => TRUE,
    		CURLOPT_HTTPHEADER => array(
       		'Content-Type: application/json'
    	),
    	CURLOPT_POSTFIELDS => json_encode($postData)
	));

	// Send the request
	$response = curl_exec($ch);
	// Check for errors
	echo $response;
	if($response === FALSE){
   		 die(curl_error($ch));
		return $response;
	}

	// Decode the response
	$responseData = json_decode($response, TRUE);

	// Print the date from the response
	return $responseData;
		
}
