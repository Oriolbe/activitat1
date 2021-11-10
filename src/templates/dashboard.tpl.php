<?php

require APP . '/lib/conn.php';
require APP . '/config.php';

try {
    $conn = getConnection($dsn, $dbuser, $dbpasswd);
    $sql = "SELECT * FROM tasks WHERE user='{$_SESSION['uid']}'";
    $result = $conn->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    return false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Dashboard</title>
</head>

<body>
    <?php
    include 'header.tpl.php';
    ?>
    <aside>

    </aside>
    <main>
        <div class="container-todo">
            <div class="task-form">
                <form action="?url=task_action" method="post">
                    <input type="text" name="task" placeholder="Tarea">
                    <button type="submit" name="submit-task">Añadir Tarea</button>
                </form>
                <form action="?url=task_action" method="post">
                    <input type="text" name="id_task" placeholder="Id de la tarea">
                    <button type="submit" name="delete-task">Eliminar Tarea</button>
                </form>
                <form action="?url=task_action" method="post">
                    <input type="text" name="id_task" placeholder="Id de la tarea">
                    <input type="text" name="task" placeholder="Tarea">
                    <button type="submit" name="edit-task">Editar Tarea</button>
                </form>
                <div class="task-status">
                    <?php
                    if (isset($_SESSION['task-status'])) {
                        echo $_SESSION['task-status'];
                        unset($_SESSION['task-status']);
                    }
                    ?>
                </div>
            </div>
            <div class="container-table">
                <table class="table-tasks">
                    <thead>
                        <tr>
                            <th style="width: 15%;">ID</th>
                            <th style="width: 85%;">Tarea</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row=$result->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['task']); ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>