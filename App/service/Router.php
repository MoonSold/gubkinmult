<?php
namespace App\service;
class Router{
    private static $list = [];
    public static function page($url,$page_name){
        self::$list[] = ['url'=>$url,'page'=>$page_name];
    }
    public static function enable(){
        $query = $_GET['q'];
        foreach (self::$list as $url){
            if ( strcmp($url['url'],'/'.$query)==0){
                require_once "Views/".$url["page"].".php";
                die();
            }
        }
        require_once "Views/error.php";

    }
}