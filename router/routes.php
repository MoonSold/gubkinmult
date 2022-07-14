<?php 
use App\service\RouterClass;

RouterClass::page($url='/',$page_name='main');
RouterClass::page($url='/film',$page_name='film');
RouterClass::page($url='/login',$page_name='login');
RouterClass::page($url='/register',$page_name='register');
RouterClass::page($url='/newuser',$page_name='newuser');
RouterClass::page($url='/auth',$page_name='auth');
RouterClass::enable();