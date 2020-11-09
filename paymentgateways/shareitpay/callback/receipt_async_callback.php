<?php
/**
 * payCallback Api demo
 */

/**
 * Reference SHAREit Service Utils
 */
require_once('../tool/md5_tool.php');

header('Content-Type:application/json');

function payCallBackIndex()
{
    //mock for requestBody from shareitPay, don't copy the $payCallbackVO
    $payCallbackVO = array(
        'merchantId' => 'test_merchant',
        'tradeOrderNo' => 'TRADE20190415060455960905821',
        'orderId' => 'test_123',
        'status' => '2',
        'currencyCode' => 'IN',
        'countryCode' => 'INR',
        'payAmount' => '100.00',
        'errorCode' => '9999',
        'errorMsg' => 'Execute exception',
        'sign' => '246B49C12EAA96407A7BE96D80F10F29',
    );

    //verify your sign
    $sign = $payCallbackVO['sign'];
    // Use the test environment link: secretKey needs to be secretKey for the test environment
    // Use the production environment link: the secretKey needs to be secretKey for the production environment
    if (verifyForMd5('test_key', $payCallbackVO, $sign)) {//change to your merchant secret key from SHAREit pay
        //Process the notify from SHAREit pay with your own logic
        if (true) {
            //default response format without modify
            $successResponse = array(
                'result_code' => 200,
                'message' => 'success',
            );
            return json_encode($successResponse, true);
        } else {
            //Exception
            //default response format without modify
            $failureResponse = array(
                'result_code' => 500,
                'message' => 'failure',
            );
            return json_encode($failureResponse, true);
        }
    } else {
        echo 'sign error';
        //default response format without modify
        $failureResponse = array(
            'result_code' => 500,
            'message' => 'failure',
        );
        return json_encode($failureResponse, true);
    }

}