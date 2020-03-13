<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 13-1-2016
 * Time: 16:45
 */

namespace Paynl\Idin\Result\Issuer;


use Paynl\Result\Result;

class GetList extends Result
{
    /**
     * @return Issuer[]
     */
    public function getIssuers()
    {
        $arrResult = array();
        foreach ($this->data['issuers'] as $arrIssuer) {
            $issuer = new Issuer($arrIssuer);
            array_push($arrResult, $issuer);
        }
        return $arrResult;
    }
}