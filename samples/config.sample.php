<?php
    \Paynl\Config::setApiToken('123456789012345678901234567890');
    \Paynl\Config::setServiceId('SL-0123-4567');
    \Paynl\Config::setTokenCode('AT-0123-4567');

    //optional: you can download it on https://curl.haxx.se/ca/cacert.pem
    //\Paynl\Config::setCAInfoLocation('path/to/cacert.pem');
    // Or you can skip verifyPeer
    //\Paynl\Config::setVerifyPeer(false);