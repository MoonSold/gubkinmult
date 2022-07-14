<?php 

use App\service\AuthUserClass;

if(isset($_POST["name"]) && isset($_POST["password"]))
    AuthUserClass::doAuthUser($_POST["name"],$_POST["password"]);
    
?>


