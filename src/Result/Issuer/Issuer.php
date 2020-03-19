<?php

namespace Paynl\Idin\Result\Issuer;

use Paynl\Result\Result;

class Issuer extends Result
{

    public function getRequest()
    {
        return $this->data['request'];
    }

    public function hasResults()
    {
        return (isset($this->data['request']['result'])) ? filter_var($this->data['request']['result'], FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) : NULL;
    } 

    public function getErrorCode()
    {
        return (isset($this->data['request']['errorCode'])) ? $this->data['request']['errorCode'] : '';
    }

    public function getErrorMessage()
    {
        return (isset($this->data['request']['errorMessage'])) ? $this->data['request']['errorMessage'] : '';
    }

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