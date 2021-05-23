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
        <link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
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
        // Creamos una coookie: nombre; fecha de expiración (UTC); edad máxima; ruta; dominio
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
        alert(document.cookie);
        </script>


        <!-- Barra de navegación con los enlaces a distintas páginas de la web -->
        <nav>
            <a href="index.php"><img src="img/logo.jpg" alt="logo" class="logo"></a>
            <div class="nav-item">
                <a href="tienda.view.php" style="text-decoration:none">Tienda</a>
            </div>
            <div class="nav-item">
                <a href="contacto.view.php" style="text-decoration:none">Contacto</a>
            </div>
            <div class="nav-item">
                <a href="index.php" style="text-decoration:none">Portada</a>
            </div>
        </nav>


        <!-- Imagen de cabecera, subtítulo y descripción -->
        <div class="container">
            <header>
                <div class="image">
                    <img src="img/portada.jpg" height=500 alt="foto portada de mascarillas" />
                </div>
            </header>
            <main>
                <h1>Tu web de mascarillas <br></h1>

            <div class="container1">
    
                <ul class="slider">
                    <li id="slide1">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3947459/car.jpg" alt=""/>
                    </li>
                    <li id="slide2">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3947459/sunset.jpg" alt=""/>
                    </li>
                    <li id="slide3">
                    <h1>Ejemplo con otros elementos</h1>
                    <p>Esto es un párrafo de ejemplo para comprobar que podemos meter cualquier tipo de elementos en el slider</p>
                    <a href="tienda.view.php" alt="">¡Corre a mirar nuestros productos!</a>
                    </li>
                </ul>
            
                <ul class="menu">
                    <li>
                    <a href="#slide1" alt="1">1</a>
                    </li>
                    <li>
                    <a href="#slide2" alt="2">2</a>
                    </li>
                    <li>
                    <a href="#slide3" alt="3">3</a>
                    </li>
                </ul>
            
            </div>
        
        </main>
        <div class="infoPortada">
            <div class="bloque1">
                <div class="titulos">
                    <h2>MAYOR SUJECCIÓN</h2>
                </div>
                <div class="textos">
                    <p>Sujección baja que evita rozaduras y molestias en la zona de las orejas <br><br><br><br></p>
                </div>
            </div>
            <div class="bloque2">
                <div class="titulos">
                    <h2>EL DISEÑO QUE MEJOR SE ADAPTA A TI</h2>
                </div>
                <div class="textos">
                    <p>Sujección baja que evita rozaduras y molestias en la zona de las orejas</p>
                </div>
            </div>
            <div class="bloque3">
                <div class="titulos">
                    <h2>MODA SEGURA</h2>
                </div>
                <div class="textos">
                    <p>Sujección baja que evita rozaduras y molestias en la zona de las orejas</p>
                </div>
            </div>
        </div>
        </div>
        <footer>
            <address>
            Siempre protegido
            </address>
            <div>Enmascarados | Portada</div>
            <section class="social">
                <a href="admin.login.view.php" style="text-decoration:none">Administrador</a>
            </section>
        </footer>
    </body>
</html>