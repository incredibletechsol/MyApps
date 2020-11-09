<?php
include_once __DIR__.'/bppg_helper.php';
$pg_transaction = new BPPGModule;
$valid = $pg_transaction->validateResponse($_REQUEST);
$response = array('POST' => $_POST, 'GET' => $_GET, 'IS_VALID' => $valid);
header('Content-Type: application/json');
echo json_encode($response, JSON_PRETTY_PRINT);
