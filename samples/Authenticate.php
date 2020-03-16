<?php
require_once '../vendor/autoload.php';
require_once 'config.php';


try {
    $result = Paynl\Idin\Authenticate::start(array(
        // Required     
        'reference' => 'MER.REF.1234.5678', 
        'issuerId' => 'ABNANL2A',
        'data' => array(
            'name' => '1',
            'address' => '1',
            'isEighteen' => '1',
            'dateOfBirth' => '1',
            'gender' => '1',
            'email' => '1',
            'phone' => '1',
            'iban' => '1'
        ),
        'language' => 'nl',
        'returnUrl' => 'https://www.pay.nl',
        'exchangeUrl' => 'https://www.pay.nl'        
    ));
} catch (\Exception $e){
    echo "Error occurred: ".$e->getMessage();
}

