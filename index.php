<?php

namespace app;

use app\classes\paysys\PaySystem;
use app\classes\providers\RateProvider;
use \Exception;

try {
    $paySystem = new PaySystem(new RateProvider);
    $rate = $paySystem->rate();
} catch (Exception $e) {
    echo $e->getCode().': '.$e->getMessage();
}

