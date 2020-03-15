<?php

namespace app\classes\paysys;

use app\classes\providers\RateProvider;

class PaySystem
{
    /**
     * @var object|null
     */
    private $rateProvider;

    public function __construct(RateProvider $rateProvider)
    {
        $this->rateProvider = $rateProvider->getProvider();
    }

    public function rate()
    {
        return $this->rateProvider->getRate();
    }
}
