<?php
//accion login
session_start();
require APP . '/src/database.php';
require APP . '/config.php';
require APP . '/lib/conn.php';

if (isset($_POST['submit-login'])) {
    if (
        isset($_POST['email']) &&
        isset($_POST['passwd'])
    ) {

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $passwd = filter_input(INPUT_POST, 'passwd', FILTER_SANITIZE_STRING);
        $conn = getConnection($dsn, $dbuser, $dbpasswd);

        if (login($conn, $email, $passwd)) {
            $_SESSION['username'] = $user;
            header('location:?url=dashboard');
        }
    }
}
