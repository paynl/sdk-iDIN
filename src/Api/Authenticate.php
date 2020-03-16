<?php
/**
 * Created by PhpStorm.
 * User: PAY.
 * Date: 13-1-2016
 * Time: 19:34
 */

namespace Paynl\Idin\Api;


use Paynl\Error\Required;
use Paynl\Config;

class Authenticate extends Api
{

    protected $apiTokenRequired = true;
    protected $serviceIdRequired = true;

    /**
     * @var string Token with iDIN rights
     */
    protected $token;
    /**
     * @var string Service ID
     */
    protected $serviceId;
    /**
     * @var string Merchant's unique transaction identifier
     */
    protected $reference;
    /**
     * @var string Unique ID of the issuer (see issuer list)
     */
    protected $issuerId;
    /**
     * @var array Array of the requested consumer attributes. Possible values: 0 = do not include data, 1 = request this data consumer
     */
    protected $data;
    /**
     * @var string Consumer’s preferred language (e.g. ‘en’ for English, ‘nl’ for Dutch is used)
     */
    protected $language;
     /**
    * @var string URL the consumer is forwarded to after completing the authentication
    */
    protected $returnUrl;
    /**
    * @var string Merchant's URL the data of consumer is posted to
    */
    protected $exchangeUrl;   

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }
    /**
     * @param string $serviceId
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
    }
    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }
    /**
     * @param string $issuerId
     */
    public function setIssuerId($issuerId)
    {
        $this->issuerId = $issuerId;
    }
    /**
     * @param array $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }
    /**
     * @param string $returnUrl
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
    }
    /**
     * @param string $exchangeUrl
     */
    public function setExchangeUrl($exchangeUrl)
    {
        $this->exchangeUrl = $exchangeUrl;
    }

    protected function getData()
    {
        
        $this->data['token'] = Config::getTokenCode();  
        $this->data['serviceId'] = Config::getServiceId();        

        if(empty($this->reference)){
            throw new Required('reference');
        } else {
            $this->data['reference'] = $this->reference;
        }

        if(empty($this->issuerId)){
            throw new Required('issuerId');
        } else {
            $this->data['issuerId'] = $this->issuerId;
        }

        if(empty($this->data)){
            throw new Required('data');
        } else {
            $this->data['data'] = $this->data;
        }

        if(isset($this->language)){
            $this->data['language'] = $this->language;
        }

        if(empty($this->returnUrl)){
            throw new Required('returnUrl');
        } else {
            $this->data['returnUrl'] = $this->returnUrl;
        }

        if(isset($this->exchangeUrl)){
            $this->data['exchangeUrl'] = $this->exchangeUrl;
        }

        return parent::getData();
    }


    public function doRequest($endpoint = null, $version = null)
    {
        return parent::doRequest('IDIN/authenticate');
    }
}