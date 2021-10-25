<?php

    //establecer errores
    //ini_set('display_errors','On');
    
    session_start();
    require 'config.php';
    //require 'lib/conn.php';
    //require 'lib/render.php';
    require 'src/router.php';
    
    //get controller
    $controller=getRoute();

    require APP.'/src/controllers/'.$controller.'.php';