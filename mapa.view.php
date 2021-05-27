<!DOCTYPE html>
<!-- Página que ve el usuario -->
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Enmascarados | Mapa Web</title>

    <!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
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
    <div class="container">
        <br><br><br><br>
        <main>
            <H1> Mapa Web </H1> <!-- Titulo de la web -->
            <br><br><br><br>
            <div class="mapa-web">
                <a href="index.php" style="text-decoration:none">Portada</a><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<a href="tienda.view.php" style="text-decoration:none">Tienda</a><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<a href="contacto.view.php" style="text-decoration:none">Contacto</a><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.login.view.php" style="text-decoration:none">Login administrador</a><br><br>
            </div><br><br><br><br><br><br><br><br><br><br>
    </div>
    </main>

    <footer>
        <map>
            <a href="index.php" style="text-decoration:none">Volver a Portada</a>
        </map>
        <div>Enmascarados | Mapa Web</div>
        <section class="social">
            <a href="admin.login.view.php" style="text-decoration:none">Administrador</a>
        </section>
    </footer>

</body>