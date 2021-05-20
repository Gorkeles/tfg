<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enmascarados | Tienda</title>

    <!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Barra de navegación con los enlaces a distintas páginas de la web -->
    <nav>
        <a href="index.php"><img src="img/logo.jpg" alt="logo" class="logo"></a>
        <div class="nav-item">
            <a href="cerrar.php" style="text-decoration:none" class="social">Cerrar sesión</a>
        </div>
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
        <main>
            <h1>Bienvenido Administrador</h1>
            Busca las mascarillas que quieras insertar, modificar o eliminar
            <br>
            <br>

            <!-- Buscador de rutas que busca en la base de datos según el datos que elijas
            y a continuación escribir que quieres buscar dentro de ese campo seleccionado -->
            <section>
                <h2>Buscador de mascarillas</h2>
                <br>
                <div class="contacto">
                    <form action="rutas.php" name="rutas" method="post">
                        ¿No encuentras tu mascarilla? Aquí podrás buscarlas y futúramente modificarlas o eliminarlas
                        <br>
                        <br>
                        <select name="tipoBusquedaRuta" id="tipoBusquedaRuta">
                            <option value="PROVINCIA">Provincia</option>
                            <option value="NIVEL">Nivel</option>
                            <option value="DISTANCIA">Distancia</option>
                            <option value="DESCRIPCION">Descripción</option>
                            <option value="ADAPTADA">Adaptada a tu moto (cc³)</option>
                        </select>
                        <br>
                        <br>
                        Ahora escribe que quieres buscar:
                        <br>
                        <input type="text" placeholder="¿Qué ruta quieres buscar?" name="provincia" id="provincia" require="required">
                        <br>
                        <br>
                        <input type="submit" name="buscarRutas" class="button button-primary" value="Enviar"><br>
                        <br>
                    </form>
                </div>
            </section>

            <!-- Aquí mostramos el resultado obtenido del SELECT de la anterior búsqueda
            Y con el foreach recorremos todos los datos pra que muestre los resultados -->
            <div class="resultado">
                <?php if (!empty($arrayRutas)) { ?>
                    <center>
                        <table>
                            <thead>
                                <tr>
                                    <th><b><u>Provincia</u></b></th>
                                    <th><b><u>Nivel</u></b></th>
                                    <th><b><u>Distancia</u></b></th>
                                    <th><b><u>Descripción</u></b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($arrayRutas as $ruta => $rutas) : ?>
                                    <tr>
                                        <td><?= $rutas["provincia"]; ?></td>
                                        <td><?= $rutas["nivel"]; ?></td>
                                        <td><?= $rutas["distancia"]; ?></td>
                                        <td><?= $rutas["descripcion"]; ?></td>
                                    </tr>
                            </tbody>
                        <?php endforeach; ?>
                        </table>
                    </center>
                <?php } ?>
            </div>
            <br>
            <br>
            <section>
                <h2>Introducción de mascarillas</h2>
                <br>
                <div class="contacto">
                    <!-- contenedor -->

                    <form action="rutas.php" name="rutas" method="post">
                        ¿Nuevas mascarillas? Aquí puedes añadirlas
                        <!-- Usamos el método post para recoger lo que seleccione el usuario en unas variables -->
                        <br>
                        <!-- Placeholder es lo que le aparece al usuario en la web, name es como se llama la variable que recogeremos con post y type el tipo de datos que introduce el usuario -->
                        <br>
                        Provincia: <br>
                        <input type="text" placeholder="¿Donde es la ruta?" name="provincia" id="provincia" required>
                        <br>
                        <br>
                        Dificultad: <br>
                        <input type="text" placeholder="¿Fácil, media o dificil?" name="nivel" id="nivel" required>
                        <br>
                        <br>
                        Distancia: <br>
                        <input type="text" placeholder="¿Cuantos kilómetros tiene?" name="distancia" id="distancia" required>
                        <br>
                        <br>
                        Descripción: <br>
                        <input type="text" placeholder="Describe la ruta brevemente" name="descripcion" id="descripcion" required>
                        <br>
                        <br>
                        <!-- boton para enviar los datos -->
                        <input type="submit" name="rutas" class="button button-primary" value="Enviar"><br><br>
                    </form>
                    <br>
                    <br>
                </div>
            </section>
    </div>
    </main>
    <footer>
        <address>
            Siempre protegido

        </address>
        <div>Enmascarados | Administrador</div>
        <section class="social">
            <a href="index.php" style="text-decoration:none">Volver a Portada</a>
        </section>
    </footer>
</body>

</html>