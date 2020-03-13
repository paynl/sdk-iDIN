<?php


namespace Paynl\Idin;

use Paynl\Error\Error;
use Paynl\Error\Required;

class Issuers
{

    /**
     * @param $options
     * @return Result\Issuer\Get
     */
    public static function get()
    {
        $api = new Api\GetIssuers();     
        $result = $api->doRequest();
        return new Result\Issuer\GetList($result);
    }    
    
}