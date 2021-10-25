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
        <h2 style="color: white; text-align:center; margin-left: -315px; margin-top:5%;">Login</h2>
        <form action="?url=login_action" method="post">
            <input type="email" name="email" placeholder="Correo" value="<?php if(isset($_COOKIE["recuerda_correo"])) { echo $_COOKIE["recuerda_correo"]; } ?>">
            <input type="password" name="passwd" placeholder="Contraseña" value="<?php if(isset($_COOKIE["recuerda_contraseña"])) { echo $_COOKIE["recuerda_contraseña"]; } ?>">
            <div>
            <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["recuerda_correo"])) { ?> checked <?php } ?> />
		    <label style="color:white;" for="remember">Recuerdame</label>
            </div>
            <button type="submit" name="submit-login">Login</button>
        </form>
        <?php
            if(isset($_SESSION['registro'])){
                echo $_SESSION['registro'];
                unset($_SESSION['registro']);
            }
        ?>
    </main>
</body>
</html>