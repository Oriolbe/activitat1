<?php

function login($conn, $email, $passwd): bool
{
    try {
        //preparem sentència
        $stmt = $conn->prepare('SELECT * FROM users WHERE email=:email LIMIT 1');
        $stmt->execute([':email' => $email]);
        $count = $stmt->rowCount();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // ha trobat incidència
        if ($count == 1) {
            $user = $row[0];
            $res = password_verify($passwd, $user['passwd']);
            if($user){
                if(!empty($_POST["remember"])){
                    setcookie("recuerda_correo", $_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));
                    setcookie("recuerda_contraseña", $_POST["passwd"],time()+ (10 * 365 * 24 * 60 * 60));
                }else{
                    if(isset($_COOKIE["recuerda_correo"])){
                        setcookie("recuerda_correo", "");
                    }
                    if(isset($_COOKIE["recuerda_contraseña"])){
                        setcookie("recuerda_contraseña", "");
                    }
                }
            if ($res) {
                // establim sessió
                $_SESSION['uname'] = $user['uname'];
                $_SESSION['email'] = $user['email'];
                // retornem true
                return true;
            } else {
                return false;
            }
        }
        } else {
            return false;
        }
    } catch (PDOException $e) {
        return false;
    }
    //}
    //}
}

function register($conn, $email, $username, $role, $hashedpassword): bool
{
    if (isset($_POST['submit-register'])) {
        if (
            isset($_POST['email']) &&
            isset($_POST['uname']) &&
            isset($_POST['role']) &&
            isset($_POST['passwd'])&&
            isset($_POST['passwd2'])
        ) {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $username = filter_input(INPUT_POST, 'uname', FILTER_SANITIZE_STRING);
            $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_NUMBER_INT);
            $password = filter_input(INPUT_POST, 'passwd', FILTER_SANITIZE_STRING);
            $password2 = filter_input(INPUT_POST, 'passwd2', FILTER_SANITIZE_STRING);
            $hashedpassword = password_hash($password, PASSWORD_BCRYPT);

            if($password == $password2){

            try {

                $stmt = $conn->prepare('SELECT email FROM users WHERE email = ? LIMIT 1');
                $stmt->execute([$email]);
                $count = $stmt->rowCount();

                if ($count == 0) {
                    //$stmt->close();
                    $stmt = $conn->prepare('INSERT INTO users(email, uname, passwd, role) values(?, ?, ?, ?)');

                    if ($stmt->execute([$email, $username, $hashedpassword, $role])) {
                        return true;
                    } else {
                        echo $stmt->error;
                    }
                } else {
                    $_SESSION['error'] = "Este correo ya está registrado";
                    header('location:?url=register');
                }
            } catch (PDOException $e) {
                return false;
            }
            }
            else{
                $_SESSION['error'] = "Las contraseñas no coinciden";
                header('location:?url=register');
            }
        } else {
            $_SESSION['error'] = "Debes rellenar todos los campos";
            header('location:?url=register');
        }
    } else {
        $_SESSION['error'] = "El botón submit no está configurado";
        header('location:?url=register');
    }
}