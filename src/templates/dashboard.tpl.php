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
       <h1 style="color: white;">Hello, <strong><?php echo $_SESSION['uname']; ?></strong></h1>
       <p><a style="color: white;" href="?url=logout">Cerrar sesión</a></p>
    </aside>
    <main>

    </main>
</body>
</html>