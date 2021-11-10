<?php

    //returns url route
    function getRoute():string{
        if(isset($_REQUEST['url'])){
            $url=$_REQUEST['url'];
        }else{
            $url='home';
        }
        switch($url){
            case 'login':
                return 'login';
            case 'register':
                return 'register';
            case 'login_action':
                return 'login_action';
            case 'register_action':
                return 'register_action';
            case 'logout':
                return 'logout';
            case 'dashboard':
                return 'dashboard';
            case 'cookies':
                return 'cookies';
            case 'profile':
                return 'profile';
            case 'task_action':
                return 'task_action';
            default:
                return 'home';
        }
        //return $url;
    }