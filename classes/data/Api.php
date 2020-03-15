<?php

namespace app\classes\data;

use app\ifaces\RateProviderInterface;

class Api implements RateProviderInterface
{
    private $rate;

    /**
     * @return string|null
     */
    public function getRate()
    {
        //get from api by SOAP
        return $this->rate;
    }
}