<?php

namespace app\classes\data;

use app\ifaces\RateProviderInterface;

class DataBase implements RateProviderInterface
{
    /**
     * @var string $rate
     */
    private $rate;

    /**
     * Забирает из базы значение курса валют
     * @return string|null
     */
    public function getRate()
    {
        //select rate from table
        return $this->rate;
    }

    /**
     * Добавляет в базу значение курса валют
     * @param string $rate
     * @return void
     */
    public function addRate(string $rate)
    {
        //.. insert or update in database
    }
}