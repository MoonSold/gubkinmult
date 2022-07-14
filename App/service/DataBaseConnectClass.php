<?php

namespace App\service;

use Doctrine\DBAL\DriverManager;

class DataBaseConnectClass
{
    private static $DataBaseParametr = array(
        'dbname' => 'halal',
        'driver' => 'pdo_sqlite',
        'user' => 'halal',
        'password'=>'',
        'host'=>'localhost'
    );
    
    public static function dataBaseConnect()
    {
        $queryBuilder = DriverManager::getConnection(self::$DataBaseParametr + ['path' => dirname(dirname(__DIR__)).'/config/db.sqlite']);
        return $queryBuilder;
    }
}