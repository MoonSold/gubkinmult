<?php 
use App\service\Router;

Router::page($url='/',$page_name='main');
Router::page($url='/film',$page_name='film');
Router::page($url='/login',$page_name='login');
Router::page($url='/register',$page_name='register');
Router::enable();