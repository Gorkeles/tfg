<?php

//Index de nuestra página
session_start(); //Iniciamos una sesión del cliente
// session_destroy();

$_SESSION['nombre'] = 'Gorka'; //Sesión iniciada con Gorka

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enmascarados | Portada</title>

    <!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos.css" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body onload="galletas()">

    <script type="text/javascript">
        /* Creamos una coookie: nombre; fecha de expiración (UTC); edad máxima; ruta; dominio
    document.cookie = "usuario = Gorka; expires=Thu, 04 Feb 2021 12:00:00 UTC;";
    document.cookie = "sexo = hombre;";

    // Leer una cookie
    var miCookie = document.cookie;
    alert(miCookie);

    // Modificamos una cookie
    document.cookie = "sexo = mujer;";
    alert(document.cookie);

    // Elimicar cookie (fecha anterior)
    document.cookie = "usuario=; expires=Thu, 01 Jan 1970 00:00:01 GMT";
    document.cookie = "SEXO=; expires=Thu, 01 Jan 1970 00:00:01 GMT";
    alert(document.cookie); */
    </script>


    <!-- Barra de navegación con los enlaces a distintas páginas de la web -->
    <nav>
        <div class="nav-item" href="index.php" target="_blank">
            <a href="index.php" style="text-decoration:none">Portada</a>
        </div>
        <div class="nav-item">
            <a href="tienda.view.php" style="text-decoration:none">Tienda</a>
        </div>
        <div class="nav-item">
            <a href="contacto.view.php" style="text-decoration:none">Contacto</a>
        </div>
        <section class="social">
            <a href="cerrar.php" style="text-decoration:none">Cerrar sesión</a>
        </section>

    </nav>


    <!-- Imagen de cabecera, subtítulo y descripción -->
    <div class="container">
        <header>
            <div class="image">
                <img src="img/mascarillas.jpg" height=500 />
            </div>
        </header>
        <main>
            <h1>Tu web de mascarillas</h1>

            <section class="bottle">
                <img src="img/persona-mascarilla.jpg" />
                <div>
                    En tu web de mascarillas queremos que te sientas protegido pero agusto y por eso asdfsgbwsfvswrtsdfdvsgbdfgbx
                    fdgbsdbs
                    dba_closesdfbsdfb
                </div>
                <div>
                    TROLOOLOLOOOOOLO e blallalfbsrhrh eyh weg h ertg
                    sh etyj wehw rej sdfb erth
                </div>
                <div>
                    Con todo ello, nuestra finalidad es dfghdfgbsd bsd gsd bsd s ghsdfsdghdf hsd fg dhf dfh sdfh sdgh s
                    dfh sdfh s dh sdfg hsdf hs dghs dfh s
                </div>
            </section>

            <!-- Galería de fotos -->
            <h2>Galería</h2>
            <section class="gallery">
                <img src="img/galeria-mascarilla.jpg"/>
                <img src="img/galeria-mascarilla.jpg"/>
                <img src="img/galeria-mascarilla.jpg"/>
                <img src="img/galeria-mascarilla.jpg"/>
                <img src="img/galeria-mascarilla.jpg"/>

            </section>
    </div>
    </main>
    <footer>
        <address>
            <p>Siempre protegido </p>

        </address>
        <div>Enmascarados | Portada</div>

        <!-- AQUI PONER UN ENLACE QUE PPONGA ADMINISTRADOR QUE LLEVE A UNA PAGINA DE LOGIN -->
        <section class="social">
            <p><a href="mapa.view.php" style="text-decoration:none">Mapa WEB</a></p>
        </section>
    </footer>
</body>

</html>