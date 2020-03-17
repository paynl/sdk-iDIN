<?php

namespace Paynl\Idin\Result\Status;

use Paynl\Result\Result;

class Status extends Result
{
    public function getRequest()
    {
        return $this->data['request'];
    }

    public function getData()
    {
        return $this->data['data'];
    }  

    public function getState()
    {
        return $this->data['data']['state'];
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

    public function getDateOfBirth()
    {
        return (isset($this->data['data']['dateOfBirth'])) ? $this->data['data']['dateOfBirth'] : '';
    }
}