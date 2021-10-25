<?php

    session_start();

    //destruir session
    if(session_destroy()){
        //redirigir al login
        header('location:?url=login');
        exit;
    }