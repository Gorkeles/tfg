<?php

session_start();
session_destroy();

?>

<!DOCTYPE html>
<!-- Página que ve el usuario -->
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Enmascarados | Cerrar sesión</title>

    <!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Barra de navegación con los enlaces a distintas páginas de la web -->
    <nav>
        <a href="index.php"><img src="img/logo.jpg" alt="logo" class="logo" ></a>
    </nav>
    <div class="container">
        <header>
                <div class="image">
                    <img src="img/hasta pronto.jpg" alt="Fondo con cielo y nubes y en primer plano un hasta pronto en color morado" />
                </div>
            </header>
        <main>
            <br>
            <br>
            <br>
            <H1> ¡Has cerrado sesión con éxito! </H1> <!-- Titulo de la web -->
            <br>
            Esperamos verte pronto, administrador ;)
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
    </div>
    </main>
    <footer>
        <map>
            <a href="mapa.view.php" style="text-decoration:none">Mapa Web</a>

        </map>
        <div>Enmascarados | Cerrar sesión</div>
        <section class="social">
            <p><a href="index.php" style="text-decoration:none">Volver a Portada</a></p>
        </section>
    </footer>

</body>

</html>