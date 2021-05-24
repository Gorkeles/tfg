<?php

include 'funciones.php';

if(isset($_POST['email'])) {

    // correo de la dueña al que se enviaran los emails y su asunto
    $email_to = "olga.cobo@ezzing.com";
    $email_subject = "Pedido";

    // validacion de los datos recogidos por el formulario
    if(!isset($_POST['nombre']) ||
    !isset($_POST['phone']) ||
    !isset($_POST['email']) ||
    !isset($_POST['pedido']) ||
    !isset($_POST['direction'])) {
        echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
        die();
    }
    $pedido = strtr($_POST['pedido'], '"', " ");
    $pedido = strtr($pedido, "[", " ");
    $pedido = strtr($pedido, "{", " ");
    $pedido = strtr($pedido, "}", "\n");
    $pedido = strtr($pedido, "]", " ");

    $email_message = "Detalles del pedido:\n\n";
    $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
    $email_message .= "E-mail: " . $_POST['email'] . "\n";
    $email_message .= "Telefono: " . $_POST['phone'] . "\n";
    $email_message .= "Direccion: " . $_POST['direction'] . "\n\n";
    $email_message .= "Pedido: \n" . $pedido . "\n\n";

   // die();
    if(mail($email_to, $email_subject, $email_message)){
        include 'pedidoEnviado.view.php';
        die();
    }else{
        echo "Por favor, vuelva atrás y verifique la información ingresada";
    };
}


require 'datosPedido.view.php';
//llamamos al índice en HTML