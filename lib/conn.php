<?php
    require APP . '/config.php';

    function getConnection(string $dsn,string $dbuser,string $dbpasswd){
        try{
        $gdb=new PDO($dsn,$dbuser,$dbpasswd);
        $gdb->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $gdb->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            die ($e->getMessage());
        }
        return $gdb;
    }