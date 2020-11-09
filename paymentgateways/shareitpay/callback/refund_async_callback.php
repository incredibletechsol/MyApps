<?php
/**
 * refund callback Api demo
 */

/**
 * Reference SHAREit Service Utils
 */
require_once('../tool/md5_tool.php');

header('Content-Type:application/json');

function refundCallBackIndex()
{
    //mock for requestBody from shareitPay, don't copy the $refundCallbackVO
    $refundCallbackVO = array(
        'merchantId' => 'test_merchant',
        'refundId' => 'test_456',
        'tradeNo' => 'REFTRADE20190415060401022956957',
        'orderId' => 'test_123',
        'refundAmount' => '1000',
        'currency' => 'INR',
        'status' => '1',
        'errorCode' => '',
        'errorMsg' => '',
        'sign' => '055E10F63AF852BDAC8FA174C65F2F8A',
    );

    //verify your sign
    $sign = $refundCallbackVO['sign'];
    // Use the test environment link: secretKey needs to be secretKey for the test environment
    // Use the production environment link: the secretKey needs to be secretKey for the production environment
    if (verifyForMd5('test_key', $refundCallbackVO, $sign)) {//change to your merchant secret key from SHAREit pay
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