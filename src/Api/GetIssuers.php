<?php

namespace Paynl\Idin\Api;

use Paynl\Error;
use Paynl\Helper;

class GetIssuers extends Api
{ 
    protected function processResult($result)
    {
        $output = Helper::objectToArray($result);

        if (isset($output['status']) && $output['status'] == 'FALSE') {
            throw new Error\Api($output['error']);
        }

        return parent::processResult($result);
    }

    public function doRequest($endpoint = null, $version = null)
    {
        return parent::doRequest('IDIN/getIssuers');
    }
}