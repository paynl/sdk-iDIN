<?php
require_once '../vendor/autoload.php';
require_once 'config.php';

try {
    $result = Paynl\Idin\Status::get(array(
        // Required
        'token' => '123456789012345678901234567890', 
        'trxid' => 'DA-1234-5678-9012'       
    ));
} catch (\Exception $e){
    echo "Error occurred: ".$e->getMessage();
}
