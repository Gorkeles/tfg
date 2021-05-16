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

    <!-- Script para la cookie inicial -->
    <script>
        function galletas() {
            if (confirm("¿Aceptas todos nuestros terminos y condiciones de privacidad?")) {
                document.cookie = "expiration_time";
                var expiration_time = new Date();
                // Cambio formato fecha para poner la expiracion de cookies por dias
                expiration_time.setTime(expiration_time.getTime() + expiration * 24 * 60 * 60 * 1000);
                var expiration = "expires=" + d.toUTCString();
                document.cookie = nombre + "=" + valor + ";" + expiracion + ";path=/";
                console.log(document.cookie);
            } else {
                window.open("sinCookies.php");
            }
        }

        // Introducimos cookies si ya las teniamos

        document.getElementById("confirm").addEventListener("click", confirm);

        function confirmEvent(e) {
            if (!e) e = window.event;
            if (e.target.id == "confirm")
                document.cookie = "nombre = Gorka";
        }

        // Función para obtener los datos de una cookie
        function getGalletas(nombre) {
            var nom = nombre + "=";
            // Creamos un array alacene los datos de las cookies y los valla recorriendo 1 a 1
            //hasta llegar al espacio (fin de la cadena)
            var array = document.cookie.split(";");
            for (var i = 0; i < array.length; i++) {
                var c = array[i];
                while (c.charAt(0) == " ") {
                    c = c.substring(1);
                }
                if (c.indexOf(nombre) == 0) {
                    // Comprobamos si aparece la palabra nombre+"="
                    return c.substring(nom.length, c.length);
                    // Pasamos 2 paramentro para comprobar la longitud del nombre

                }
            }
            // Si no devuelve nada
            return "";
        }
    </script>

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
                    En tu web de mascarillas queremos que te sientas protegido pero a gusto y por eso asdfsgbwsfvswrtsdfdvsgbdfgbx
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
                <img src="img/galeria-mascarilla.jpg" />
                <img src="img/galeria-mascarilla.jpg" />
                <img src="img/galeria-mascarilla.jpg" />
                <img src="img/galeria-mascarilla.jpg" />
                <img src="img/galeria-mascarilla.jpg" />

            </section>
    </div>
    </main>
    <footer>
        <address>
            Siempre protegido

        </address>
        <div>Enmascarados | Portada</div>

        <section class="social">
            <a href="admin.view.php" style="text-decoration:none">Administrador</a>
        </section>
    </footer>
</body>

</html>