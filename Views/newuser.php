<?php 

use App\service\register;
use App\service\RegisterUserClass;

if(isset($_POST["name"]) && isset($_POST["password"]))
    RegisterUserClass::doRegisterUser($_POST["email"],$_POST["password"],$_POST["username"]);
    
?>