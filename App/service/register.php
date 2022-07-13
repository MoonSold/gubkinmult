<?php
namespace App\service;
use Doctrine\DBAL\DriverManager;
require_once dirname(dirname(__DIR__)).'\vendor\autoload.php';

class register{
    public static function do_register($email,$password,$username){
        $password = hash('md5', $password);
        $param = array(
            'dbname' => 'halal',
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/db.sqlite',
            'user' => 'halal',
            'password'=>'',
            'host'=>'localhost'
        );
        $queryBuilder = DriverManager::getConnection($param);
        $queryBuilder
        ->insert('users',
            [
                'username' => $username,
                'passwordHash' => $password,
                'email'=>$email
            ]
        );
        echo 'all ok';
    }
}
?>