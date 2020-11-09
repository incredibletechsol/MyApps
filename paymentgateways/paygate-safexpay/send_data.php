<?php

$base_url = "http://localhost/php_test/";
// for AvanthGarde pament base url
$avanthgarde_payment_url = "https://test.avantgardepayments.com/agcore/payment";
//$avanthgarde_payment_url = "https://sandbox.avantgardepayments.com:8082/agcore/payment";  // sandbox
//$avanthgarde_payment_url = "https://www.avantgardepayments.com/agcore/payment";
// for Merchant key
$merchant_key=$_POST['merchant_key'];
//$merchant_key="xyRPsqUqIzE0khQwldNBrPZCykr0G3xo1zLFL/mRWm0=";
// for Merchant id
$merchant_id = $_POST['merchant_id'];
//$merchant_id ='201701240002';
// for Aggregator id
$aggregator_id = "paygate";


$post = $_POST;
$return_elements = array();
$return_elements['me_id'] = $merchant_id;
$txn_details = $aggregator_id . '|' . $merchant_id . '|' . $post['order_no'] . '|' . $post['amount'] . '|' . $post['country'] . '|' . $post['currency'] . '|' . $post['txn_type'] . '|' . $post['success_url'] . '|' . $post['failure_url'] . '|' . $post['channel'];
//print_r($txn_details); die;
$return_elements['txn_details'] = encrypt($txn_details, $merchant_key, 256);
$pg_details = $post['pg_id'] . '|' . $post['paymode'] . '|' . $post['scheme'] . '|' . $post['emi_months'];

$return_elements['pg_details'] = encrypt($pg_details, $merchant_key, 256);
$card_details = $post['card_no'] . '|' . $post['exp_month'] . '|' . $post['exp_year'] . '|' . $post['cvv2'] . '|' . $post['card_name'];
$return_elements['card_details'] = encrypt($card_details, $merchant_key, 256);
$cust_details = $post['cust_name'] . '|' . $post['email_id'] . '|' . $post['mobile_no'] . '|' . $post['unique_id'] . '|' . $post['is_logged_in'];
$return_elements['cust_details'] = encrypt($cust_details, $merchant_key, 256);
$bill_details = $post['bill_address'] . '|' . $post['bill_city'] . '|' . $post['bill_state'] . '|' . $post['bill_country'] . '|' . $post['bill_zip'];
$return_elements['bill_details'] = encrypt($bill_details, $merchant_key, 256);
$ship_details = $post['ship_address'] . '|' . $post['ship_city'] . '|' . $post['ship_state'] . '|' . $post['ship_country'] . '|' . $post['ship_zip'] . '|' . $post['ship_days'] . '|' . $post['address_count'];
$return_elements['ship_details'] = encrypt($ship_details, $merchant_key, 256);
$item_details = $post['item_count'] . '|' . $post['item_value'] . '|' . $post['item_category'];
$return_elements['item_details'] = encrypt($item_details, $merchant_key, 256);
$other_details = $post['udf_1'] . '|' . $post['udf_2'] . '|' . $post['udf_3'] . '|' . $post['udf_4'] . '|' . $post['udf_5'];
$return_elements['other_details'] = encrypt($other_details, $merchant_key, 256);
//echo "<pre>";
//print_r($return_elements);die;
// html post page
if (isset($return_elements))
	{
	echo '<HTML>
<HEAD>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
<script type="text/javascript" src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
<script type="text/javascript" src="http://formvalidation.io/vendor/jquery.steps/js/jquery.steps.min.js"></script><?php */?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" />
<link href="http://formvalidation.io/vendor/jquery.steps/css/jquery.steps.css" rel="stylesheet" />
<link href="http://formvalidation.io/vendor/formvalidation/css/formValidation.min.css" rel="stylesheet" /><?php */?>
<script type="text/javascript" src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/aes.js"></script><?php */?>
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
<form class="form-horizontal" id="avanthgarde_payment_form" action="'.$avanthgarde_payment_url.'" method="POST">

<input type="hidden" class="form-control" name="me_id" id="" value="' . $return_elements['me_id'] . '" />
                  <input type="hidden" class="form-control" name="txn_details" id="" value="' . $return_elements['txn_details'] . '" />
                  <input type="hidden" class="form-control" name="pg_details" id="" value="' . $return_elements['pg_details'] . '" />
                  <input type="hidden" class="form-control" name="card_details" id="" value="' . $return_elements['card_details'] . '" />
                  <input type="hidden" class="form-control" name="cust_details" id="" value="' . $return_elements['cust_details'] . '" />
                  <input type="hidden" class="form-control" name="bill_details" id="" value="' . $return_elements['bill_details'] . '" />
                  <input type="hidden" class="form-control" name="ship_details" id="" value="' . $return_elements['ship_details'] . '" />
                  <input type="hidden" class="form-control" name="item_details" id="" value="' . $return_elements['item_details'] . '" />
                  <input type="hidden" class="form-control" name="other_details" id="" value="' . $return_elements['other_details'] . '" />

  <div class="container cs-border-light-blue"> 
    
    <!-- first line -->
    <div class="row pad-top"></div>
    <!-- end first line -->
    
    <div class="equalheight row" style="padding-top: 10px;">
      <div id="cs-main-body" class="cs-text-size-default pad-bottom">
        <div class="col-sm-9  equalheight-col pad-top">
          <div style="padding-bottom: 50px;">
            <h1>Initiating your payment process</h1>
            <div class="row">
              <div class="col-sm-12">
                <legend>Your payment is being processed, Please wait for a moment.</legend>
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
</HTML>
<script type="text/javascript">
$(document).ready(function(e) {
   $("#avanthgarde_payment_form").submit();
});
</script>';
	}
  else
	{
	echo "no data found";
	}

        //decrypt function use for encryption
function encrypt($text, $key, $type)
	{
	$enc = MCRYPT_RIJNDAEL_128;
	$mode = MCRYPT_MODE_CBC;
	$iv = "0123456789abcdef";
	$size = mcrypt_get_block_size($enc, $mode);
	$pad = $size - (strlen($text) % $size);
	$padtext = $text . str_repeat(chr($pad) , $pad);
	$crypt = mcrypt_encrypt($enc, base64_decode($key) , $padtext, $mode, $iv);
	return base64_encode($crypt);
	}

?>