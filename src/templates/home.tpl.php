<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>home</title>
</head>

<body>
    <?php
    include 'header.tpl.php';
    ?>
    <aside>

    </aside>
    <main>
        <input type="checkbox" id="close_cookie"></input>
        <div id="cookie_consent_popup">
            <h1>Cookies</h1>
            <label for="close_cookie" id="close_cookie_box">X</label>
            <p>Esta página utiliza cookies para almacenar datos. Aprende más sobre las cookies o deshabilitalas en nuestra <a href="?url=cookies">página de cookies</a>. Al clicar en Ok o cerrar esta pestaña aceptarás su uso</p>
            <label for="close_cookie" id="ok_cookie_box">OK</label>
        </div>
    </main>
</body>

</html>