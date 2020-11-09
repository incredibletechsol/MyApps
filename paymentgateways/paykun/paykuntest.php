<?php

require 'src/Payment.php';
require 'src/Validator.php';
require 'src/Crypto.php';

/**
 *  Parameters requires to initialize an object of Payment are as follow.
 *  mid => Merchant Id provided by Paykun
 *  accessToken => Access Token provided by Paykun
 *  encKey =>  Encryption provided by Paykun
 *  isLive => Set true for production environment and false for sandbox or testing mode
 *  isCustomTemplate => Set true for non composer projects, will disable twig template
 */

$obj = new \Paykun\Checkout\Payment('<merchantId>', '<accessToken>', '<encryptionKey>', true, true);

// Initializing Order
$obj->initOrder('<orderId>', '<Purpose or ProductName>', "<amount>", '<successUrl.example.com>',  '<failUrl.example.com>');

// Add Customer
$obj->addCustomer('<customerName>', '<customerEmail>', '<customerContactNo>');

// Add Shipping address
$obj->addShippingAddress('<country>', '<state>', '<city>', '<postalCode>', '<fullAddress>');

// Add Billing Address
$obj->addBillingAddress('<country>', '<state>', '<city>', '<postalCode>', '<fullAddress>);

//Render template and submit the form
echo $obj->submit();

/* Check for transaction status
 * Once your success or failed url called then create an instance of Payment same as above and then call getTransactionInfo like below
 *  $obj = new Payment('merchantUId', 'accessToken', 'encryptionKey');
 *  $transactionData = $obj->getTransactionInfo(Get payment-id from the success or failed url);
 *  Process $transactionData as per your requirement
 *
 * */

?>