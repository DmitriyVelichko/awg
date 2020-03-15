<?php

namespace app\classes\providers;

use app\classes\data\Cache;
use app\classes\data\DataBase;
use app\classes\data\Api;

class RateProvider
{
    private $cache;
    private $db;
    private $api;

    public function __construct
    (
        Cache $cache,
        DataBase $db,
        Api $api
    )
    {
        $this->cache = $cache;
        $this->db = $db;
        $this->api = $api;
    }

    /**
     * @return Api|Cache|DataBase|null
     */
    public function getProvider()
    {
        //Ищем в Кэше
        if ($this->cache->getRate() == null) {
            //Ищем в Базе
            if ($this->db->getRate() == null) {
                //Ищем в Api
                if($this->api->getRate() != null){
                    $this->db->addRate($this->api->getRate());
                    $this->cache->addRate($this->api->getRate());
                    return $this->api;
                }
            } else {
                $this->cache->addRate($this->db->getRate());
                return $this->db;
            }
        } else {
            return $this->cache;
        }

        return null;
    }
}