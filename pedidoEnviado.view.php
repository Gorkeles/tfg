<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enmascarados | Contacto</title>

    <!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="validar.js"></script>
</head>

<body>
    <!-- Barra de navegación con los enlaces a distintas páginas de la web -->
    <nav>
        <a href="index.php"><img src="img/logo.jpg" alt="logo" class="logo"></a>
        <div class="nav-item">
            <a href="contacto.view.php" style="text-decoration:none">Contacto</a>
        </div>
        <div class="nav-item">
            <a href="tienda.view.php" style="text-decoration:none">Tienda</a>
        </div>
        <div class="nav-item">
            <a href="index.php" style="text-decoration:none">Portada</a>
        </div>
    </nav>
    <!-- Imagen de cabecera, subtítulo y descripción -->
    <div class="container">
            <header>
                <div class="image">
                    <img src="img/paquete.jpg"/>
                </div>
            </header>
            <main>
                <h1>¡ENHORABUENA!</h1><br>
                <h2>Tu pedido se ha realizado con éxito</h2>
                <h3>¡Recuerda que deberás realizar tu pago contra reembolso!</h3>
                <h4><br>

                    <b>Ahora puedes saber el tiempo de envío estimado</b><br><br>
                    <button onclick="document.getElementById('peninsula').innerHTML='Recibirás tu envio en un periodo de 3 dias'">Península</button><br>
                    <br><p id="peninsula"></p><br><br>
                    <button onclick="document.getElementById('islas').innerHTML='Recibirás tu envio en un periodo de 7 dias'">Islas Canarias o Baleares</button><br>
                    <br><p id="islas"></p><br><br>

                </h4>
    </div>
    <footer>
        <address>
            Siempre protegido

        </address>
        <div>Enmascarados | Contacto</div>
        <section class="social">
            <a href="admin.login.view.php" style="text-decoration:none">Administrador</a>
        </section>
    </footer>
</body>

</html>