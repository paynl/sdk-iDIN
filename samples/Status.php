<?php
require_once '../vendor/autoload.php';
require_once 'config.php';

try {
    $result = Paynl\Idin\Status::get(array(
        // Required      
        'trxid' => 'DA-1234-5678-9012'       
    ));

    /**
    *   GETTERS
    *
    *   getRequest() @var string
    *   hasResults() @var bool
    *   getErrorCode() @var int
    *   getErrorMessage() @var string
    *   getData() @var array
    *   getTrxid() @var string
    *   getStatus() @var string
    *       Possible statuses:
    *       - Init: The request is created, no iDIN status available (yet)
    *       - Open: Final result not yet known;
    *       - Pending: Transaction has not yet been completed;
    *       - Success: Positive result; the transaction is or has been executed;
    *       - Cancelled: Negative result due to cancellation by Consumer; the transaction will not be executed;
    *       - Expired: Negative result due to expiration of the transaction; the transaction will not be executed.
    *       - Failure: Negative result due to other reasons; the transaction will not be executed;
    *       - Error: Error message received from issuer.
    *   getStatusMessage() @var string
    *   getReference() @var string
    *   getId() @var string
    *   getName() @var array
    *   getPrefLastName() @var string
    *   getPrefLastNamePrefix() @var string
    *   getLegalLastName() @var string
    *   getLegalLastNamePrefix() @var string
    *   getPartnerLastName() @var string
    *   getPartnerLastNamePrefix() @var string
    *   getInitials() @var string
    *   getFirstName() @var string
    *   getAddress() @var array
    *   getStreet() @var string
    *   getHouseNo() @var string
    *   getHouseNoSuf() @var string
    *   getPostalCode() @var string
    *   getCity() @var string
    *   getCountry() @var string
    *   getAddressExtra() @var string
    *   getIntAddressLine() @var string
    *   getDateOfBirth() @var string
    *   getGender() @var string
    *   getPhone() @var string
    *   getEmail() @var string
    *   isEighteenOrOlder() @var bool
    */ 

} catch (\Exception $e){
    echo "Error occurred: ".$e->getMessage();
}
