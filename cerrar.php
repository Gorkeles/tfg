<?php

session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enmascarados | Log out</title>

    <!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Barra de navegación con los enlaces a distintas páginas de la web -->
    <nav>
        
            <a href="index.php" style="text-decoration:none">Ir a PORTADA</a>
        </div>
    </nav>
    <main>
        <div class="cerrar" href="index.php" target="_blank">
            <h2>¡Has cerrado sesión con éxito!</h2>
        </div>
    </main>

</body>

</html>