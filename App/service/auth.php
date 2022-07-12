<?php
namespace App\service;

class auth{

    public static function get_post($name,$password){
        $name = $name;
        $password = hash('md5', $password);
        // $user =  $entityManager->find('src\users',1);
        // echo $user;

    }
}
?>