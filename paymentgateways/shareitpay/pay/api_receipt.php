<?php
/**
 * pay order request demo
 */

/**
 * Reference SHAREit Service Utils
 */
require_once('../tool/md5_tool.php');

/**
 * SHAREit Service address
 * TODO Switch to the right URL according to the connection environment
 */
$url = 'https://pay-gate-uat.shareitpay.in/aggregate-pay-gate/api/gateway';

//1 Assemble request parameters according to the guide
//TODO Replace them with your value
$post_data = array(
    'merchantId' => 'test_merchant',//change to your merchant Id from SHAREit pay
    'bizType' => 'createTransOrder',//default value without modify
    'version' => '2.1',//default value without modify
    'orderId' => 'test_123',//change to your own order id
    'custId' => 'test_ZNW3e',//change to the end-customer id
    'subject' => 'test_product_info',//change to your own product info
    'countryCode' => 'IN',//change to the transaction country code
    'currency' => 'INR',//change to the transaction currency code
    'totalAmount' => '88.88',//change to the transaction amount
    'frontCallBackUrl' => 'https://test1.com',//change to your own front callback url
    'usePayResultType' => '1',//default value
    'transExpireTime' => '1800',//change to your own transaction expire time
    'email' => 'user email',//change to the end-customer email address
    'mobileNo' => 'user mobile number',//change to the end-customer mobile no
    'language' => 'en',//default value
    'callbackUrl' => 'https://test2.com',//change to your own server callback url
);

//1.1 Get sign by your secret key
// Use the test environment link: secretKey needs to be secretKey for the test environment
// Use the production environment link: the secretKey needs to be secretKey for the production environment
$sign = signForMd5('test_key', $post_data);//change to your merchant secret key from SHAREit pay
$post_data['sign'] = $sign;

//2 Request SHAREit Pay
$request = json_encode($post_data);
$res = request_post($url, $request);
$response = json_decode($res, true);

//3 Process the response from SHAREit pay
$bizCode = $response['bizCode'];
if (!empty($bizCode) && '0000' == $bizCode) {
    $data = $response['data'];
    $responseSign = $data['sign'];
    if (verifyForMd5('test_key', $data, $responseSign)) {//change to your merchant secret key from SHAREit pay
        echo 'success';
        //TODO Replace with your own logic
    } else {
        echo 'sign error';
    }
} else {
    echo 'response is failure';
}

echo "\n";
echo $res;

