<?php

namespace app\classes\data;

use app\ifaces\RateProviderInterface;

class Cache implements RateProviderInterface
{
    /**
     * @var string $rate
     */
    private $rate;

    /**
     * Забирает из кэша значение курса валют
     * @return string|null
     */
    public function getRate()
    {
        // get from Memcached ...
        return $this->rate;
    }

    /**
     * Добавляет в кэш значение курса валют
     * @param string $rate
     * @return void
     */
    public function addRate(string $rate)
    {
        // set from Memcached ...
    }
}