<?php

$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];

require "controller\animeController.php";

switch($rota){
    case "/": 
        require "View\galeria.php";
        break;
    case "/novo":
        if ($metodo == "GET") require "view\cadastrar.php";
        if ($metodo == "POST"){
            $controller = new animeController();
            $controller ->save($_REQUEST);
        };
        break;
    default:
        require "404.php";
        break;
}





?>