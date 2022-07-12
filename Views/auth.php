<?php 
use App\service\auth;
if(isset($_POST["name"]) && isset($_POST["pas"]));
    auth::get_post($_POST["name"],$_POST["pas"]);
?>


