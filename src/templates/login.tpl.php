<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>login</title>
</head>
<body>
<?php
        include 'header.tpl.php';
   ?>
    <aside>
       
    </aside>
    <main>
        <div class="container-login">
            <form action="?url=login_action" method="post" class="login-register">
            <h2 style="color: white;">Login</h2>
            <input class="input-login-register" type="email" name="email" placeholder="Correo" value="<?php if(isset($_COOKIE["recuerda_correo"])) { echo $_COOKIE["recuerda_correo"]; } ?>">
            <input class="input-login-register" type="password" name="passwd" placeholder="Contraseña" value="<?php if(isset($_COOKIE["recuerda_contraseña"])) { echo $_COOKIE["recuerda_contraseña"]; } ?>">
            <div>
            <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["recuerda_correo"])) { ?> checked <?php } ?> >
		    <label style="color:white;" for="remember">Recuérdame</label>
            </div>
            <button class="button-login-register" type="submit" name="submit-login">Login</button>
            </form>
            <div class="login-message">
            <?php
                if(isset($_SESSION['registro'])){
                    echo $_SESSION['registro'];
                    unset($_SESSION['registro']);
                }
            ?>
            </div>
        </div>
    </main>
</body>
</html>