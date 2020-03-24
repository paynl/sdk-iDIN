<?php
require_once '../vendor/autoload.php';
require_once 'config.php';

try {
    //Array of issuers
    $issuers = Paynl\Idin\Issuers::get();    

    /**
    *   GETTERS
    *
    *   getRequest() @var array
    *   hasResults() @var bool
    *   getErrorCode() @var string
    *   getErrorMessage() @var string
    *   getIssuers() @var array
    *   -> getIssuerId() @var string
    *   -> getIssuerName() @var string
    *   -> getCountryName() @var string
    *   -> getCountryCode() @var string
    */ 


} catch (Exception $e) {
    echo "Error occurred: " . $e->getMessage();
}


