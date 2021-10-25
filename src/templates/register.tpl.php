<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>register</title>
</head>
<body>
<?php
        include 'header.tpl.php';
   ?>
    <aside>
       
    </aside>
    <main>
        <h2 style="color: white; text-align:center; margin-left: -280px; margin-top:5%;">Registro</h2>
        <form action="?url=register_action" method="post">
            <input type="email" name="email" placeholder="Correo">
            <input type="text" name="uname" placeholder="Usuario">
            <div>
            <label>
            <input type="radio" name="role" value="1" required>
            <span style="color: white; font-size: 17px; margin: 15px;">Alumno</span>
            </label>
            <label>
            <input type="radio" name="role" value="2" required>
            <span style="color: white; font-size: 17px; margin: 15px;">Profesor</span>
            </label>
            </div>
            <input type="password" name="passwd" placeholder="Contraseña">
            <input type="password" name="passwd2" placeholder="Repite la contraseña">
            <button type="submit" name="submit-register">Registrarse</button>
        </form>
        <?php
        if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
        ?>
    </main>
</body>
</html>