<?php
/**
 * Created by PhpStorm.
 * User: PAY.
 * Date: 4-3-2016
 * Time: 16:20
 */

namespace Paynl\Idin;

use Paynl\Error\Required;
use Paynl\Config;

class Authenticate
{

    protected $apiTokenRequired = true;
    protected $serviceIdRequired = true;

    /**    
     * Options array    
     * token - Token with iDIN rights
     * serviceId - Service ID
     * reference - Merchant's unique transaction identifier
     * issuerId - Unique ID of the issuer (see issuer list)
     * data - Array of the requested consumer attributes. Possible values: 0 = do not include data, 1 = request this data consumer
     * language - Consumer’s preferred language (e.g. ‘en’ for English, ‘nl’ for Dutch is used)
     * returnUrl - URL the consumer is forwarded to after completing the authentication
     * exchangeUrl - Merchant's URL the data of consumer is posted to
     *    
     * @param array $options See above
     * @throws Required
     */
    public static function start($options = array()){
        $api = new Api\Authenticate();
        
        $api->setToken(Config::getTokenCode());        
        $api->setServiceId(Config::getServiceId());
        
        if(empty($options['reference'])){
            throw new Required('reference');
        } else {
            $api->setReference($options['reference']);
        } 

        if(empty($options['issuerId'])){
            throw new Required('issuerId');
        } else {
            $api->setIssuerId($options['issuerId']);
        } 

        //Default data array
        $data_array = array(
            'name' => '0',
            'address' => '0',
            'isEighteen' => '0',
            'dateOfBirth' => '0',
            'gender' => '0',
            'email' => '0',
            'phone' => '0',
            'iban' => '0'
        );

        if(isset($options['data']) && is_array($options['data'])){
            foreach ($data_array as $key => $item) {
               if(isset($options['data'][$key])){
                    $data_array[$key] = $options['data'][$key];
               }
            }            
        } 
        $api->setData($data_array);

        if (isset($options['language'])) {
            $api->setLanguage($options['language']);
        }

        if(empty($options['returnUrl'])){
            throw new Required('returnUrl');
        } else {
            $api->setReturnUrl($options['returnUrl']);
        } 

        if (isset($options['exchangeUrl'])) {
            $api->setExchangeUrl($options['exchangeUrl']);
        }

        $result = $api->doRequest();
        return new Result\Authenticate\Authenticate($result);
    }

}