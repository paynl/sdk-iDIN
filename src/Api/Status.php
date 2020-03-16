<?php

namespace Paynl\Idin\Api;

use Paynl\Error\Required;
use Paynl\Config;
class Status extends Api
{    
    /**
     * @var string Token with iDIN rights
     */
    protected $token;
    /**
     * @var string Our iDIN transaction ID (returned from auth-call)
     */
    protected $trxid; 
    

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }
    /**
     * @param string $trxid
     */
    public function setTrxid($trxid)
    {
        $this->trxid = $trxid;
    }
    
    protected function getData()
    {
        $this->data['token'] = Config::getTokenCode();

        if(empty($this->trxid)){
            throw new Required('trxid');
        } 
        $this->data['trxid'] = $this->trxid;             

        return parent::getData();
    }


    public function doRequest($endpoint = null, $version = null)
    {
        return parent::doRequest('IDIN/status');
    }
}