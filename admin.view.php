<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enmascarados | Administrador</title>

    <!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <!-- Barra de navegación con los enlaces a distintas páginas de la web -->
    <nav>
        <a href="index.php"><img src="img/logo.jpg" alt="logo" class="logo"></a>
        <div class="nav-item">
            <a href="cerrar.php" style="text-decoration:none" class="social">Cerrar sesión</a>
        </div>
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
        <main>
            <h1>Bienvenido Administrador</h1>
            Busca las mascarillas que quieras insertar, modificar o eliminar
            <br>
            <br>
            <h2>Listado de mascarillas en la base de datos</h2>
            <?php

            //creo array vacio para guardar los productos
            $todos = array();

            //conecto con la bbdd
            $conexion = new mysqli('localhost', 'root', '', 'tfg');

            if ($conexion->connect_errno) {
                die('Lo siento, hubo un problema con el servidor');
            } else {
                // creo una query
                $query1 = 'SELECT * from products';

                // guardo los resultados de la query en una variable
                $result = $conexion->query($query1);

                // guarfdo los resultados en un array
                while ($row = $result->fetch_assoc()) {
                    array_push($todos, $row);
                }
            ?>


                <div class="resultado">
                    <?php if (!empty($todos)) { ?>
                        <center>
                            <table>
                                <thead>
                                    <tr>
                                        <th><b>ID</b></th>
                                        <th>Nombre</b></th>
                                        <th><b>Precio</b></th>
                                        <th><b>Imagen</b></th>
                                        <th><b>Descripción</b></th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($todos as $product) : ?>
                                        <tr>
                                            <td><?= $product["id_product"]; ?></td>
                                            <td><?= $product["title"]; ?></td>
                                            <td><?= $product["price"]; ?></td>
                                            <td><?= $product["img_url"]; ?></td>
                                            <td><?= $product["alt"]; ?></td>
                                            <td>
                                                <form method="post" action="admin.php" id="borracion">
                                                    <input type="hidden" name="borrar" value="<?php echo $product["id_product"]; ?>">
                                                    <input type="submit" class="button button-primary" value="Borrar">
                                                </form>
                                            </td>
                                        </tr>
                                </tbody>
                            <?php endforeach; ?>
                            </table>
                        </center>
                    <?php } ?>
                </div>
            <?php } ?>
            <!-- Buscador de rutas que busca en la base de datos según el datos que elijas
            y a continuación escribir que quieres buscar dentro de ese campo seleccionado -->
            <section>
                <h2>Buscador de mascarillas</h2>
                <br>
                <div class="contacto">
                    <form action="admin.php" name="buscar" id="buscar" method="post">
                        ¿No encuentras tu mascarilla? Aquí podrás buscarlas, modificarlas o eliminarlas
                        <br>
                        <br>
                        <select name="tipoBusquedaProducto" id="tipoBusquedaProducto" require="required">

                            <option value="id_product">ID</option>
                            <option value="title">Nombre</option>
                            <option value="price">Precio</option>
                            <option value="img_url">Imagen</option>
                            <option value="atl">Descripción</option>
                        </select>
                        <br>
                        <br>
                        Ahora escribe que quieres buscar:
                        <br>
                        <input type="text" placeholder="¿Qué producto quieres buscar?" name="id_product" id="id_product" require="required">
                        <br>
                        <br>
                        <input type="submit" name="buscarProductos" class="button button-primary" value="Enviar"><br>
                        <br>
                    </form>
                </div>
            </section>

            <!-- Aquí mostramos el resultado obtenido del SELECT de la anterior búsqueda
            Y con el foreach recorremos todos los datos pra que muestre los resultados -->
            <div class="resultado">
                <?php if (!empty($arrayProducts)) { ?>
                    <center>
                        <table>
                            <thead>
                                <tr>
                                    <th><b>ID</b></th>
                                    <th><b>Nombre</b></th>
                                    <th><b>Precio</b></th>
                                    <th><b>Imagen</b></th>
                                    <th><b>Descripción</b></th>
                                    <th><b>Borrar</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($arrayProducts as $product => $products) : ?>
                                    <tr>
                                        <td><?= $products["id_product"]; ?></td>
                                        <td><?= $products["title"]; ?></td>
                                        <td><?= $products["price"]; ?></td>
                                        <td><?= $products["img_url"]; ?></td>
                                        <td><?= $products["alt"]; ?></td>
                                        <td>
                                            <form method="post" action="admin.php">
                                                <input type="hidden" name="borrar" value="<?php echo $products["id_product"]; ?>">
                                                <input type="submit" class="button button-primary" value="Enviar">
                                            </form>
                                        </td>
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

                    <form action="admin.php" name="introducir" id="introducir" method="post">
                        ¿Nuevas mascarillas? Aquí puedes añadirlas
                        <!-- Usamos el método post para recoger lo que seleccione el usuario en unas variables -->
                        <br>
                        <!-- Placeholder es lo que le aparece al usuario en la web, name es como se llama la variable que recogeremos con post y type el tipo de datos que introduce el usuario -->
                        <br>
                        ID: <br>
                        <input type="text" placeholder="¿Qué número de ID tiene?" name="id_product" id="id_product" required>
                        <br>
                        <br>
                        Nombre: <br>
                        <input type="text" placeholder="¿Cómo se llama?" name="title" id="title" required>
                        <br>
                        <br>
                        Precio: <br>
                        <input type="text" placeholder="¿Cuanto vale?" name="price" id="price" required>
                        <br>
                        <br>
                        Imagen: <br>
                        <input type="text" placeholder="¿Cual es tu URL?" name="img_url" id="img_url" required>
                        <br>
                        <br>
                        Descripción: <br>
                        <input type="text" placeholder="Describe la imagen" name="alt" id="alt" required>
                        <br>
                        <br>
                        <!-- boton para enviar los datos -->
                        <input type="submit" name="introducir" class="button button-primary" value="Enviar"><br><br>
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