<?php

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