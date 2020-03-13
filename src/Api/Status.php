<?php
/**
 * Created by PhpStorm.
 * User: PAY.
 * Date: 13-1-2016
 * Time: 19:34
 */

namespace Paynl\Idin\Api;


use Paynl\Error\Required;

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
        if(empty($this->token)){
            throw new Required('token');
        } else {
            $this->data['token'] = $this->token;
        }

        if(empty($this->trxid)){
            throw new Required('trxid');
        } else {
            $this->data['trxid'] = $this->trxid;
        }        

        return parent::getData();
    }


    public function doRequest($endpoint = null, $version = null)
    {
        return parent::doRequest('IDIN/status');
    }
}