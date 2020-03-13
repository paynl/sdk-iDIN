<?php
require_once '../vendor/autoload.php';
require_once 'config.php';

try {
    //Array of issuers
    $issuers = Paynl\Idin\Issuers::get();    
} catch (Exception $e) {
    echo "Error occurred: " . $e->getMessage();
}


