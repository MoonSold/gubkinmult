<?php
namespace App\service;

class register{

    public static function do_register($email,$password,$username){
        $password = hash('md5', $password);
        echo $username.' '.$password;

    }
}
?>