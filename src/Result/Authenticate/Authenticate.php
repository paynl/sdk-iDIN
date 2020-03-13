<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 13-1-2016
 * Time: 19:01
 */

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

    public function getEc()
    {
        return $this->data['ec'];
    }  

    public function getIssuerUrl()
    {
        return $this->data['issuerUrl'];
    }  
    
}