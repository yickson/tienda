<?php


namespace App\Libs;

use Transbank\Webpay\Configuration;
use Transbank\Webpay\Webpay;

class MyWebpay
{

    public static function getTransaction()
    {
        return (new Webpay(Configuration::forTestingWebpayPlusNormal()))
            ->getNormalTransaction();
    }
}