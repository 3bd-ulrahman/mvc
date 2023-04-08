<?php

namespace App;

class DB
{
    public static ?DB $instatnce = null;

    private function __construct(public array $config) {
        
    }

    public static function getInstance(array $config)
    {
        if (self::$instatnce === null) {
            self::$instatnce = new DB($config);
        }

        return self::$instatnce;
    }
}