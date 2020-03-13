<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 13-1-2016
 * Time: 16:45
 */

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
}