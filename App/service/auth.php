<?php
namespace App\service;
require_once dirname(__DIR__).'/config/bootstrap.php';

class auth{
    public static function get_post($name,$password){
        $password = hash('md5', $password);
        echo $name.'  '.$password;
    }
}
?>