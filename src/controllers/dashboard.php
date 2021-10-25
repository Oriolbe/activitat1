<?php

    session_start();
    require APP.'/lib/render.php';

    //comprobar si el usuario está logueado y si no lo está, redirigirlo al login
    if (isset($_SESSION['uname']) || $_SESSION['email']) {
        
    }else{
        header('location:?url=login');
    }
    echo render('dashboard',['title'=>'Dashboard '.$user]);