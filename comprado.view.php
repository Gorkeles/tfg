<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enmascarados | Compra</title>

    <!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Barra de navegación con los enlaces a distintas páginas de la web -->
    <nav>
    <img src="img/logo.jpg" alt="logo" class="logo">
        <div class="nav-item" href="index.php" target="_blank">
            <a href="tienda.view.php" style="text-decoration:none">Volver a TIENDA</a>
        </div>
    </nav>

    <!-- Imagen de cabecera, subtítulo y descripción -->
    <div class="container">
        <header>
            <div class="image">
                <img src="img/comprado.jpeg" height=500 />
            </div>
        </header>
        <main>
            <h1>¡ENHORABUENA!</h1><br>
            <h2>Tu pago se ha completado con éxito</h2><br>
            <h5>

                <b>Ahora puedes saber el tiempo de envío estimado</b><br><br>
                <button onclick="document.getElementById('peninsula').innerHTML='Recibirás tu envio en un periodo de 3 dias'">Península</button><br>
                <p id="peninsula"></p><br>
                <button onclick="document.getElementById('islas').innerHTML='Recibirás tu envio en un periodo de 7 dias'">Islas Canarias o Baleares</button><br>
                <p id="islas"></p>

            </h5>
    </div>
    </main>

</body>

</html>