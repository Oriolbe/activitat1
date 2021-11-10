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
        <div class="container-register">
            <form action="?url=register_action" method="post" class="login-register">
            <h2 style="color: white;">Registro</h2>
            <input class="input-login-register" type="email" name="email" placeholder="Correo">
            <input class="input-login-register" type="text" name="uname" placeholder="Usuario">
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
            <input class="input-login-register" type="password" name="passwd" placeholder="Contraseña">
            <input class="input-login-register" type="password" name="passwd2" placeholder="Repite la contraseña">
            <button class="button-login-register" type="submit" name="submit-register">Registrarse</button>
        </form>
        <div class="register-message">
        <?php
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
        ?>
        </div>
        </div>
    </main>
</body>

</html>