<?php

    session_start();

    //comprobar si el usuario está logueado y redirigirlo al dashboard
    if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true) {
        header('location:?url=dashboard');
        exit;
    }