<?php 
use App\service\register;
if(isset($_POST["name"]) && isset($_POST["pas"]));
    register::do_register($_POST["email"],$_POST["password"],$_POST["username"]);
?>