<?php
require_once '../vendor/autoload.php';
require_once 'config.php';

try {
    $result = Paynl\Idin\Status::get(array(
        // Required      
        'trxid' => 'DA-1234-5678-9012'       
    ));
} catch (\Exception $e){
    echo "Error occurred: ".$e->getMessage();
}
