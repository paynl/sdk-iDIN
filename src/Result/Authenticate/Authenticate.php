<?php

namespace Paynl\Idin\Result\Authenticate;

use Paynl\Result\Result;
class Authenticate extends Result
{
    public function getRequest()
    {
        return $this->data['request'];
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