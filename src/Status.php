<?php

namespace Paynl\Idin;

use Paynl\Error\Required;
use Paynl\Config;

class Status
{
    protected $apiTokenRequired = true;

    /**  
     * Options array        
     * trxid - Our iDIN transaction ID (returned from auth-call)
     *    
     * @param array $options See above
     * @throws Required
     */
    public static function get($options = array()){
        $api = new Api\Status();      

        $api->setToken(Config::getTokenCode());          
        
        if(empty($options['trxid'])){
            throw new Required('trxid');
        } 
            
        $api->setTrxid($options['trxid']);                

        $result = $api->doRequest();
        return new Result\Status\Status($result);
    }

}