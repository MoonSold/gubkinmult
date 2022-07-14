<?php

namespace App\service;

use App\service\DataBaseConnectClass;

class AuthUserClass
{
    public static function doAuthUser($email,$password)
    {
        $password = md5($password);
        $queryBuilder = DataBaseConnectClass::dataBaseConnect();
        // $queryBuilder->select(array('user'))
        // ->from('users', 'user')
        // ->were('user.email = $email');
        // echo 'all ok';
    }
}
?>