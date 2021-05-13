<?php
    if(isset($_POST['email'])) {

    // correo de la dueña al que se enviaran los emails y su asunto
    $email_to = "n.mascarados@gmail.com";
    $email_subject = "Contacto desde el sitio web";

    // validacion de los datos recogidos por el formulario
    if(!isset($_POST['nombre']) ||
    !isset($_POST['phone']) ||
    !isset($_POST['email']) ||
    !isset($_POST['consulta'])) {


    echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
    echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
    die();
    }

    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
    $email_message .= "E-mail: " . $_POST['email'] . "\n";
    $email_message .= "Teléfono: " . $_POST['phone'] . "\n";
    $email_message .= "Comentarios: " . $_POST['consulta'] . "\n\n";

    $email_from = $_POST['email'];

    // Ahora se envía el e-mail usando la función mail() de PHP
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);

    echo "¡Su consulta se ha enviado con éxito!";
    }
?>