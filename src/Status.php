<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 4-3-2016
 * Time: 16:20
 */

namespace Paynl\Idin;


use Paynl\Error\Required;

class Status
{
    /**  
     * Options array    
     * token - Token with iDIN rights
     * trxid - Our iDIN transaction ID (returned from auth-call)
     *    
     * @param array $options See above
     * @throws Required
     */
    public static function get($options = array()){
        $api = new Api\Status();

        if(empty($options['token'])){
            throw new Required('token');
        } else {
            $api->setToken($options['token']);
        }    
        
        if(empty($options['trxid'])){
            throw new Required('trxid');
        } else {
            $api->setTrxid($options['trxid']);
        }        

        $result = $api->doRequest();
        return new Result\Status\Status($result);
    }

}