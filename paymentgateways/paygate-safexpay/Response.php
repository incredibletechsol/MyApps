<?php 
$aggregator_id = "paygate";
if(isset($_POST) && isset($_POST['txn_response']) && !empty($_POST['txn_response']))
{
    
    $post = $_POST;
	//$merchant_key = "of9Tf7/31lOqPKEIQe1gFCM+ARcsDEGKD5XmXgLeFDM=";
      // $merchant_key = "P576odg1RtpCI/QoPFycFZlIP7M+u+bvRBZydF7Iju0=";
	 //$merchant_key = "UJQJKssJ8w5weqzF3aitGZsuIjybBJpi1OxmECPSwjE=";
	   //$merchant_key = "T6N+PuDykyGgN1fQe06KNa6NzaifTHSNx7ZnBUwJX8g=";
	  $merchant_key = "oqUl4D0LqA4plZw4reAX/K3UKJoQdet0k/N6X6K4Y5k=";
	   //$merchant_key = "MqnhFBPKjpiRUUEcuIfkm+geimjpTMpu5YZCuJA5fSI=";
	  //$merchant_key = "4sSJBIJJOlTswJ0ftpw1f9p8TgaJjakeoPeL64SHxok";
	 
	$return_elements = array();
	
	//Transaction Response
	$post['txn_response']				= isset($post['txn_response']) ? $post['txn_response'] : '';
	$txn_response 						= decrypt($post['txn_response'], $merchant_key, 256);
        
        print_r($txn_response);die;
	$txn_response_arr					= explode('|', $txn_response);
	$return_elements['txn_response']['ag_id'] 			= isset($txn_response_arr[0]) ? $txn_response_arr[0] : '';
	$return_elements['txn_response']['me_id'] 			= isset($txn_response_arr[1]) ? $txn_response_arr[1] : '';
	$return_elements['txn_response']['order_no'] 		= isset($txn_response_arr[2]) ? $txn_response_arr[2] : '';
	$return_elements['txn_response']['amount'] 			= isset($txn_response_arr[3]) ? $txn_response_arr[3] : '';
        
       
	$return_elements['txn_response']['country'] 		= isset($txn_response_arr[4]) ? $txn_response_arr[4] : '';
	$return_elements['txn_response']['currency'] 		= isset($txn_response_arr[5]) ? $txn_response_arr[5] : '';
	$return_elements['txn_response']['txn_date'] 		= isset($txn_response_arr[6]) ? $txn_response_arr[6] : '';
	$return_elements['txn_response']['txn_time'] 		= isset($txn_response_arr[7]) ? $txn_response_arr[7] : '';
	$return_elements['txn_response']['ag_ref'] 			= isset($txn_response_arr[8]) ? $txn_response_arr[8] : '';
	$return_elements['txn_response']['pg_ref'] 			= isset($txn_response_arr[9]) ? $txn_response_arr[9] : '';
	$return_elements['txn_response']['status'] 			= isset($txn_response_arr[10]) ? $txn_response_arr[10] : '';
	//$return_elements['txn_response']['txn_type'] 		= isset($txn_response_arr[11]) ? $txn_response_arr[11] : '';
	$return_elements['txn_response']['res_code'] 		= isset($txn_response_arr[11]) ? $txn_response_arr[11] : '';
	$return_elements['txn_response']['res_message'] 	= isset($txn_response_arr[12]) ? $txn_response_arr[12] : '';
	
	//Payment Gateway Details
	$post['pg_details']					= isset($post['pg_details']) ? $post['pg_details'] : '';
	$pg_details 						= decrypt($post['pg_details'], $merchant_key, 256);
	$pg_details_arr						= explode('|', $pg_details);
	$return_elements['pg_details']['pg_id'] 			= isset($pg_details_arr[0]) ? $pg_details_arr[0] : '';
	$return_elements['pg_details']['pg_name'] 			= isset($pg_details_arr[1]) ? $pg_details_arr[1] : '';
	$return_elements['pg_details']['paymode'] 			= isset($pg_details_arr[2]) ? $pg_details_arr[2] : '';
	$return_elements['pg_details']['emi_months'] 		= isset($pg_details_arr[3]) ? $pg_details_arr[3] : '';

	//Fraud Details
	$post['fraud_details']				= isset($post['fraud_details']) ? $post['fraud_details'] : '';
	$fraud_details 						= decrypt($post['fraud_details'], $merchant_key, 256);
	$fraud_details_arr					= explode('|', $fraud_details);
	$return_elements['fraud_details']['fraud_action'] 	= isset($fraud_details_arr[0]) ? $fraud_details_arr[0] : '';
	$return_elements['fraud_details']['fraud_message'] 	= isset($fraud_details_arr[1]) ? $fraud_details_arr[1] : '';
	$return_elements['fraud_details']['score'] 			= isset($fraud_details_arr[2]) ? $fraud_details_arr[2] : '';

	//Other Details
	$post['other_details']				= isset($post['other_details']) ? $post['other_details'] : '';
	$other_details 						= decrypt($post['other_details'], $merchant_key, 256);
	$other_details_arr					= explode('|', $other_details);
	$return_elements['other_details']['udf_1'] 			= isset($other_details_arr[0]) ? $other_details_arr[0] : '';
	$return_elements['other_details']['udf_2'] 			= isset($other_details_arr[1]) ? $other_details_arr[1] : '';
	$return_elements['other_details']['udf_3'] 			= isset($other_details_arr[2]) ? $other_details_arr[2] : '';
	$return_elements['other_details']['udf_4'] 			= isset($other_details_arr[3]) ? $other_details_arr[3] : '';
	$return_elements['other_details']['udf_5'] 			= isset($other_details_arr[4]) ? $other_details_arr[4] : '';
        
        //echo "</pre>";
        //print_r($return_elements);die;
}
else
{
	header("Location: ".$base_url); exit;
}
function decrypt($crypt, $key, $type)
	{
   
$enc = MCRYPT_RIJNDAEL_128;
$mode = MCRYPT_MODE_CBC;
$iv = "0123456789abcdef";
	$crypt = base64_decode($crypt);
	$padtext = mcrypt_decrypt($enc, base64_decode($key) , $crypt, $mode, $iv);
	$pad = ord($padtext
		{
		strlen($padtext) - 1});
		if ($pad > strlen($padtext)) return false;
		if (strspn($padtext, $padtext
			{
			strlen($padtext) - 1}, strlen($padtext) - $pad) != $pad)
				{
				$text = "Error";
				}

			$text = substr($padtext, 0, -1 * $pad);
			return $text;
			}

echo'<HTML>
   <HEAD>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
      <?php /*?><script type="text/javascript" src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script type="text/javascript" src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
      <script type="text/javascript" src="http://formvalidation.io/vendor/jquery.steps/js/jquery.steps.min.js"></script><?php */?>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" rel="stylesheet" />
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" />
      <?php /*?>
      <link href="http://formvalidation.io/vendor/jquery.steps/css/jquery.steps.css" rel="stylesheet" />
      <link href="http://formvalidation.io/vendor/formvalidation/css/formValidation.min.css" rel="stylesheet" />
      <?php */?>
      <?php /*?><script type="text/javascript" src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/aes.js"></script><?php */?>
      <meta charset="utf-8" />
      <title>Payment Service Provider | Merchant Accounts</title>
      <style>
         .has-success .form-control, .has-success .control-label, .has-success .radio, .has-success .checkbox, .has-success .radio-inline, .has-success .checkbox-inline {
         color: #1cb78c !important;
         }
         .has-success .help-block {
         color: #1cb78c !important;
         border-color: #1cb78c !important;
         box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #1cb78c;
         }
         .has-error .form-control, .has-error .help-block, .has-error .control-label, .has-error .radio, .has-error .checkbox, .has-error .radio-inline, .has-error .checkbox-inline {
         color: #f0334d;
         border-color: #f0334d;
         box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #f0334d;
         }
         table {
         color: #333; /* Lighten up font color */
         font-family: "Raleway", Helvetica, Arial, sans-serif;
         font-weight: bold;
         width: 640px;
         border-collapse: collapse;
         border-spacing: 0;
         }
         td, th {
         border: 1px solid #CCC;
         height: 30px;
         } /* Make cells a bit taller */
         th {
         background: #F3F3F3; /* Light grey background */
         font-weight: bold; /* Make sure theyre bold */
         font-color: #1cb78c !important;
         }
         td {
         background: #FAFAFA; /* Lighter grey background */
         text-align: left;
         padding: 2px;/* Center our text */
         }
         label {
         font-weight: normal;
         display: block;
         }
      </style>
   </HEAD>
   <BODY>
      <div class="container cs-border-light-blue">
         <!-- first line -->
         <div class="row pad-top"></div>
         <!-- end first line -->
         <div class="equalheight row" style="padding-top: 10px;">
            <div id="cs-main-body" class="cs-text-size-default pad-bottom">
               <div class="col-sm-9  equalheight-col pad-top">
                  <div style="padding-bottom: 50px;">
                     <h1>Thank you!</h1>
                     <div class="row">
                        <div class="col-sm-12">
                           <legend>Your payment is '.$return_elements['txn_response']['res_message'].' Here is the details for it</legend>
                        </div>
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <label class="control-label col-sm-4">Order Number</label>
                                 <div class="col-sm-8">
                                    <legend>'.$return_elements['txn_response']['order_no'].'</legend>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <label class="control-label col-sm-4">Amount</label>
                                 <div class="col-sm-8">
                                    <legend>'.$return_elements['txn_response']['amount'].'</legend>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="control-label col-sm-4">Transaction AG REF</label>
                                    <div class="col-sm-8">
                                       <legend>'.$return_elements['txn_response']['ag_ref'].'</legend>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="control-label col-sm-4">Transaction PG REF</label>
                                    <div class="col-sm-8">
                                       <legend>'.$return_elements['txn_response']['pg_ref'].'</legend>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="control-label col-sm-4">Transaction Status</label>
                                    <div class="col-sm-8">
                                       <legend>'.$return_elements['txn_response']['status'].'</legend>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="control-label col-sm-4">Transaction Date and Time</label>
                                    <div class="col-sm-8">
                                       <legend>'.$return_elements['txn_response']['txn_date'].' '.$return_elements['txn_response']['txn_time'].'</legend>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </form>
   </BODY>
</HTML>';
?>