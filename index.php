<?php

    //establecer errores
    //ini_set('display_errors','On');
    
    session_start();

    require 'vendor/autoload.php';
    //access .env
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    require_once 'config.php';

    require_once 'src/router.php';
    
    //get controller
    $controller=getRoute();

    require APP.'/src/controllers/'.$controller.'.php';