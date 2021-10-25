<?php
//accion register
session_start();
require APP . '/src/database.php';
require APP . '/lib/conn.php';

$conn = getConnection($dsn, $dbuser, $dbpasswd);

if (register($conn, $email, $username, $role, $hashedpassword)) {
    $_SESSION['registro'] = "Te has registrado correctamente";
    header('location:?url=login');
}