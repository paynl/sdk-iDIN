<?php

namespace Paynl\Idin\Result\Authenticate;

use Paynl\Result\Result;
class Authenticate extends Result
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

    public function getTrxid()
    {
        return $this->data['trxid'];
    }

    public function getEntranceCode()
    {
        return $this->data['ec'];
    }  

    public function getIssuerUrl()
    {
        return $this->data['issuerUrl'];
    }  
    
}