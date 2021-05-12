

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enmascarados | Tienda</title>

    <!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos.css" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">




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

    <!-- Imagen de cabecera, subtítulo y descripción -->
    <div class="container">
        <header>
            <div class="image">
                <img src="img/tienda.jpg" height=500 />
            </div>
        </header>
        <main>
            <h1>Bienvenidos a la tienda</h1><br>

            <section class="rutasMoto">

                <div>
                    En nuestra tienda tienes una original seleción de merchandising que no encontrarás en otras páginas y con envío gratuito
                </div>


            </section>

            <!-- Introducimos una serie de apartados para organizar el contenido de la web -->
            <h2>Muestrario</h2>
            <div class="cards">
                <div class="card">
                    <a title="Mascarilla" href="login.view.php"><img src="img/mascarilla-negra.jpg" alt="Mascarilla negra" /></a>
                    <h3>Mascarillas</h3>
                </div>
                <div class="card">
                    <a title="Filtros" href="login.view.php"><img src="img/filtros.jpg" alt="Filtros de mascatilla" /></a>
                    <h3>Filtros</h3>
                </div>
                <div class="card">
                    <a title="Estuche" href="login.view.php"><img src="img/estuche.jpg" alt="Estuche portamascarillas" /></a>
                    <h3>Portamascarillas</h3>
                </div>
            </div>
    </div>



<!-- Imagen de cabecera, subtítulo y descripción -->
<div class="container">
        <main>
            <h1>Buscador de mascarillas</h1><br>

            <section class="rutasMoto">

                <div>
                    En éste apartado te mostraremos las mejores rutas disponibles, catalogamos las rutas por longitud y niveles de dificultad, para adaptarse a tus necesidades.
                </div><br>


            </section>

            <!-- Buscador de rutas que busca en la base de datos según el datos que elijas
            y a continuación escribir que quieres buscar dentro de ese campo seleccionado -->
            <section>
                <h2>Buscador de rutas</h2>
                <br>
                <div class="motos">
                    <form action="rutas.php" name="rutas" method="post">
                        Aquí puedes buscar todas las rutas por el criterio que elijas
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
                        Ahora escribe que quieres buscar
                        <br>
                        <br>
                        <input type="text" placeholder="¿Qué ruta quieres buscar?" name="provincia" id="provincia" require="required">
                        <br>
                        <br>
                        <input type="submit" name="buscarRutas" class="btn btn-primary" value="Enviar">
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


            <section>
                <h2>Introduce tu ruta</h2>
                <br>
                <div class="rutas">
                    <!-- contenedor -->

                    <form action="rutas.php" name="rutas" method="post">
                        <!-- Usamos el método post para recoger lo que seleccione el usuario en unas variables -->

                        <!-- Placeholder es lo que le aparece al usuario en la web, name es como se llama la variable que recogeremos con post y type el tipo de datos que introduce el usuario -->

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
                        <input type="submit" name="rutas" class="btn btn-primary" value="Enviar">
                    </form>


                </div>


            </section>

    </div>




    </main>
    <footer>
        <address>
            Siempre protegido

        </address>
        <div>Enmascarados | Tienda</div>
        <section class="social">
            <a href="mapa.view.php" style="text-decoration:none">Mapa WEB</a>
        </section>
    </footer>
</body>

</html>