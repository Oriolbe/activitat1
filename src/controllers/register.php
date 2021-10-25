<?php
    session_start();
    require APP.'/lib/render.php';
    //renders login
    echo render('register',[]);