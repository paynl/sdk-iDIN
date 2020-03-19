<?php

namespace Paynl\Idin\Result\Status;

use Paynl\Result\Result;

class Status extends Result
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

    public function getData()
    {       
        return (isset($this->data['data'])) ? $this->data['data'] : array();
    }

    public function getTrxid()
    {        
        return (isset($this->data['data']['trxid'])) ? $this->data['data']['trxid'] : '';
    }   

    public function getStatus()
    {
        return (isset($this->data['data']['state'])) ? $this->data['data']['state'] : '';
    }

    public function getStatusMessage()
    {
        return $this->data['data']['statusMessage'];
    }

    public function getReference()
    {
        return $this->data['data']['reference'];
    }

    public function getId()
    {
        return (isset($this->data['data']['id'])) ? $this->data['data']['id'] : '';
    }

    public function getName()
    {
        return (isset($this->data['data']['name'])) ? $this->data['data']['name'] : array();
    }

    public function getPrefLastName()
    {
        return (isset($this->data['data']['name']['prefLastName'])) ? $this->data['data']['name']['prefLastName'] : '';
    }

    public function getPrefLastNamePrefix()
    {
        return (isset($this->data['data']['name']['prefLastNamePrefix'])) ? $this->data['data']['name']['prefLastNamePrefix'] : '';
    }

    public function getLegalLastName()
    {
        return (isset($this->data['data']['name']['legalLastName'])) ? $this->data['data']['name']['legalLastName'] : '';
    }

    public function getLegalLastNamePrefix()
    {
        return (isset($this->data['data']['name']['legalLastNamePrefix'])) ? $this->data['data']['name']['legalLastNamePrefix'] : '';
    }

    public function getPartnerLastName()
    {
        return (isset($this->data['data']['name']['partnerLastName'])) ? $this->data['data']['name']['partnerLastName'] : '';
    }

    public function getPartnerLastNamePrefix()
    {
        return (isset($this->data['data']['name']['partnerLastNamePrefix'])) ? $this->data['data']['name']['partnerLastNamePrefix'] : '';
    }

    public function getInitials()
    {
        return (isset($this->data['data']['name']['initials'])) ? $this->data['data']['name']['initials'] : '';
    }

    public function getFirstName()
    {
        return (isset($this->data['data']['name']['firstName'])) ? $this->data['data']['name']['firstName'] : '';
    }

    public function getAddress()
    {
        return (isset($this->data['data']['address'])) ? $this->data['data']['address'] : array();
    }

    public function getStreet()
    {
        return (isset($this->data['data']['address']['street'])) ? $this->data['data']['address']['street'] : '';
    }

    public function getHouseNo()
    {
        return (isset($this->data['data']['address']['houseNo'])) ? $this->data['data']['address']['houseNo'] : '';
    }

    public function getHouseNoSuf()
    {
        return (isset($this->data['data']['address']['houseNoSuf'])) ? $this->data['data']['address']['houseNoSuf'] : '';
    }

    public function getPostalCode()
    {
        return (isset($this->data['data']['address']['postalCode'])) ? $this->data['data']['address']['postalCode'] : '';
    }

    public function getCity()
    {
        return (isset($this->data['data']['address']['city'])) ? $this->data['data']['address']['city'] : '';
    }

    public function getCountry()
    {
        return (isset($this->data['data']['address']['country'])) ? $this->data['data']['address']['country'] : '';
    }

    public function getAddressExtra()
    {
        return (isset($this->data['data']['address']['addressExtra'])) ? $this->data['data']['address']['addressExtra'] : '';
    }

    public function getIntAddressLine()
    {
        return (isset($this->data['data']['address']['intAddressLine'])) ? $this->data['data']['address']['intAddressLine'] : '';
    }

    public function getDateOfBirth()
    {
        return (isset($this->data['data']['dateOfBirth'])) ? $this->data['data']['dateOfBirth'] : '';
    }

    public function getGender()
    {
        return (isset($this->data['data']['gender'])) ? $this->data['data']['gender'] : '';
    }

    public function getPhone()
    {
        return (isset($this->data['data']['phone'])) ? $this->data['data']['phone'] : '';
    }

    public function getEmail()
    {
        return (isset($this->data['data']['email'])) ? $this->data['data']['email'] : '';
    }

    public function isEighteenOrOlder()
    {
        return (isset($this->data['data']['isEighteen'])) ? filter_var($this->data['data']['isEighteen'], FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) : NULL;
    }    
}
