<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enmascarados | Proceso de compra</title>

    <!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos/tienda.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    
</head>

<body>
    <!-- Barra de navegación con los enlaces a distintas páginas de la web -->
    <nav>
        <a href="index.php"><img src="img/logo.jpg" alt="Logotipo de enmascarados" class="logo"></a>
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

    <!-- formulario de pedido -->
    <section class="container">
        <br><br><br><br>
        <div class="modal" id="modal">
            <!-- valido formulario -->
            <form action="datosPedido.php" name="formulario" method="POST" onsubmit="return validar();">
                <br>
                <h3>Datos para el envío:</h3>
                <br>
                <!-- El nombre es tipo text -->
                Nombre: <br><br>
                <input type="text" placeholder="Introduzca su nombre y apellido" name="nombre" id="name" required>
                <br>
                <br>
                <!-- El telefono es tipo tel -->
                Teléfono: <br><br>
                <input type="tel" placeholder="Introduzca su teléfono" name="phone" id="phone" required>
                <br>
                <br>
                <!-- El correo es tipo text -->
                Correo electrónico: <br><br>
                <input type="email" placeholder="Introduzca su email" name="email" id="email" required>
                <br>
                <br>
                <!-- La direccion es tipo text-->
                Dirección: <br><br>
                <input type="text" placeholder="Introduzca su dirección" name="direction" id="direction" required>
                <br>
                <br>
                <input type="hidden" name="pedido" id="pedido" value='<?php echo $pedido ?>'>

                <!-- boton para enviar los datos -->
                <input type="submit" class="button" id="form" value="Enviar"><br><br>
            </form>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </section>


    <!-- importo script de validacion y de tienda -->
    <script src="./tienda.js"></script>
    <script src="validar.js"></script>

    <footer>
        <map>
            <a href="mapa.view.php" style="text-decoration:none">Mapa Web</a>

        </map>
        <div>Enmascarados | Proceso de compra</div>
        <section class="social">
            <a href="admin.login.view.php" style="text-decoration:none">Administrador</a>
        </section>
    </footer>
</body>

</html>