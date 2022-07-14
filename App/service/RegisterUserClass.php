<?php

namespace App\service;

use App\service\DataBaseConnectClass;

class RegisterUserClass
{
    public static function doRegisterUser($email,$password,$username)
    {
        $password = md5($password);
        $queryBuilder = DataBaseConnectClass::dataBaseConnect();
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