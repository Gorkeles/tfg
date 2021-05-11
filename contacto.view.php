<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enmascarados | Contacto</title>

    <!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos.css" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="cookies.js"></script>
    <script src="validar.js"></script>
</head>

<body>
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

    <!-- Imagen de cabecera y subtítulo -->
    <div class="container">
        <header>
            <div class="image">
                <img src="contacto.png" height=500 />
            </div>
        </header>
        <main>
            <h2>Aquí tiene tu formulario de contacto para cualquier tipo de duda, consulta con tu pedido o incidencia</h2><br>

            <div id="result">
                <!-- Aquí usaremos el DOM para mostrar el usiario y contraseña generado -->
            </div>

            </br>
            <section>
                <div class="contacto">
                    <!-- contenedor -->

                    <form action=" " name="formulario" method="post">
                        <!-- Usamos el método post para recoger lo que seleccione el usuario en unas variables -->
                        <!-- Placeholder es lo que le aparece al usuario en la web, name es como se llama la variable que recogeremos con post y type el tipo de datos que introduce el usuario -->
                        <!-- El nombre es tipo text -->
                        Nombre: <br>
                        <input type="text" placeholder="Introduce tu nombre" name="nombre" id="nombre" required>
                        <br>
                        <br>
                        <!-- El DNI es tipo text -->
                        Correo electrónico: <br>
                        <input type="email" placeholder="Introduce tu email" name="email" id="email" required>
                        <br>
                        <br>
                        <!-- La fecha es tipo text -->
                        Número de pedido: <br>
                        <input type="text" placeholder="Solo rellena si es un pedido" name="pedido" id="pedido">
                        <br>
                        <br>
                        <!-- El dni es tipo text -->
                        Comentarios: <br>
                        <input type="text" placeholder="Detallanos todas tus dudas para ponernos en contacto contigo" name="consulta" id="consulta" required>
                        <br>
                        <br>

                        <!-- boton para enviar los datos -->
                        <input type="button" name="registrar" onclick="enviarDatos();" class="btn btn-primary" id="form" value="Enviar"><br><br>
                    </form>


                </div>
            </section>

    </div>
    </main>
    <footer>
        <address>
            <p>Siempre protegido </p>

        </address>
        <div>Enmascarados | Contacto</div>
        <section class="social">
            <p><a href="mapa.view.php" style="text-decoration:none">Mapa WEB</a></p>
        </section>
    </footer>
</body>

</html>