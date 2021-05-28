<?php

if(isset($_POST['email'])) {

    // correo de la dueña al que se enviaran los emails y su asunto
    $email_to = "olga.cobo@ezzing.com";
    $email_subject = "Pedido";

    // validacion de los datos recogidos por el formulario para que no esten vacios
    if(!isset($_POST['nombre']) ||
    !isset($_POST['phone']) ||
    !isset($_POST['email']) ||
    !isset($_POST['pedido']) ||
    !isset($_POST['direction'])) {
        echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
        die();
    }

    // modificacion del string pedido para eliminar signos que no queremos que salgan en el mail
    $pedido = strtr($_POST['pedido'], '"', " ");
    $pedido = str_replace("[{\ ", " ", $pedido);
    $pedido = str_replace("\ ", "  ", $pedido);
    $pedido = str_replace("},{", "\n", $pedido);
    $pedido = str_replace(" }]", " ", $pedido);

    // cuerpo del mail
    $email_message = "Detalles del pedido:\n\n";
    $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
    $email_message .= "E-mail: " . $_POST['email'] . "\n";
    $email_message .= "Telefono: " . $_POST['phone'] . "\n";
    $email_message .= "Direccion: " . $_POST['direction'] . "\n\n";
    $email_message .= "Pedido: \n" . $pedido;

    //si se envia el mail redireccionamos y sino sacamos error
    if(mail($email_to, $email_subject, $email_message)){
        include 'pedidoEnviado.view.php';
        die();
    }else{
        echo "Mail no enviado, por favor, vuelva atrás y verifique la información ingresada";
    };
}


require 'datosPedido.view.php';
//llamamos al view del php