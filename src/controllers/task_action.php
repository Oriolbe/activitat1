<?php
//accion task
session_start();
require APP . '/src/database.php';
require APP . '/config.php';
require APP . '/lib/conn.php';

//crear tarea
if (isset($_POST['submit-task'])) {
    if (
        isset($_POST['task'])){

        $task = filter_input(INPUT_POST, 'task', FILTER_SANITIZE_STRING);
        $user = $_SESSION['uid'];
        $conn = getConnection($dsn, $dbuser, $dbpasswd);

        if (addTask($conn, $task, $user)) {
            $_SESSION['task-status'] = "Tarea creada con éxito";
            header('location:?url=dashboard');
        }
    }
}

//borrar tarea
if (isset($_POST['delete-task'])) {
    if (
        isset($_POST['id_task'])){
        $idtask = filter_input(INPUT_POST, 'id_task', FILTER_SANITIZE_NUMBER_INT);
        $conn = getConnection($dsn, $dbuser, $dbpasswd);

        if (deleteTask($conn, $idtask)) {
            $_SESSION['task-status'] = "Tarea eliminada con éxito";
            header('location:?url=dashboard');
        }
}
}

//editar tarea
if (isset($_POST['edit-task'])) {
    if (
        isset($_POST['id_task']) &&
        isset($_POST['task'])){
        $idtask = filter_input(INPUT_POST, 'id_task', FILTER_SANITIZE_NUMBER_INT);
        $task = filter_input(INPUT_POST, 'task', FILTER_SANITIZE_STRING);
        $conn = getConnection($dsn, $dbuser, $dbpasswd);

        if (editTask($conn, $idtask, $task)) {
            $_SESSION['task-status'] = "Tarea editada con éxito";
            header('location:?url=dashboard');
        }
}
}