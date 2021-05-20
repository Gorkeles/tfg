<?php

include('login.view.php');
session_start();

if (isset($_POST['loguear'])) {

    $email = $_POST['emailog'];
    $pass = $_POST['passlog'];

    $query = $connect->prepare("SELECT * FROM practica5 WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo "<script type='text/javascript'>
        		alert(¡ERROR! Has introducido mal tu E-mail o contraseña);
        		window.location.href='admin.php';
        		</script>";
    } else {
        if (password_verify($pass, $result['pass'])) {
            $_SESSION['user_id'] = $result['id'];
            echo "<script type='text/javascript'>
            alert(¡ENHORABUENA! Te has logueado satisfactoriamente);
            window.location.href='admin.php';
            </script>";
        } else {
            echo "<script type='text/javascript'>
        		alert(¡ERROR! Has introducido mal tu E-mail o contraseña);
        		window.location.href='admin.php';
        		</script>";
        }
    }
}
