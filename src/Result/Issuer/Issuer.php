<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 13-1-2016
 * Time: 19:01
 */

namespace Paynl\Idin\Result\Issuer;


use Paynl\Result\Result;

class Issuer extends Result
{
    public function getIssuerId()
    {
        return $this->data['issuerId'];
    }

    public function getIssuerName()
    {
        return $this->data['issuerName'];
    }

    public function getCountryName()
    {
        return $this->data['countryName'];
    }

    public function getCountryCode()
    {
        return $this->data['countryCode'];
    }

    
}