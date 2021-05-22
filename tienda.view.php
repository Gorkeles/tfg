<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enmascarados | Tienda</title>

    <!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos/tienda.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
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

    <!-- INICIO TIENDA -->
    <!-- Conexion a la base de datos -->
    <?php

    //creo array vacio para guardar los productos
    $arrayProducts = array();

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
        while ($row = $result->fetch_assoc()){
            array_push($arrayProducts, $row);
        }
        
    
    ?><?php foreach ($arrayProducts as $product) : ?>


    <section class="container">
    
        <div class="caja">
        
            <div class="item">
            
            
                <h3 class="item-title"><?php echo ($product["title"]); 
                ?></h3>
                <img class="item-image" src="<?php echo($product["img_url"]); ?>">

                <div class="item-details">
                    <h4 class="item-price"><?php echo ($product["price"]);?></h4>
                    <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                </div>
                <br>HOla
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php } ?>
    

    <!-- FIN TIENDA -->

    <!-- INICIO CARRITO -->
    <section class="shopping-cart">
        <div class="caja">
            <h1 class="text-center">CARRITO</h1>
            <hr>
            <div class="row">
                <div class="shopping-cart-header">
                    <h6>Producto</h6>
                </div>

                <div class="shopping-cart-header">
                    <h6 class="text-truncate">Precio</h6>
                </div>

                <div class="shopping-cart-header">
                    <h6>Cantidad</h6>
                </div>

            </div>
            <!-- ? INICIO SHOPPING CART ITEMS -->

            <div class="row shoppingCartItemsContainer">
            </div>
            <!-- ? FIN SHOPPING CART ITEMS -->

            <!-- INICIO TOTAL -->
            <div class="row shopping-cart-total">
                <p class="shopping-cart-footer">Total</p>
                <p class="shopping-cart-footer shoppingCartTotal">0€</p>
                <p class="shopping-cart-footer "><button class="comprarButton" type="button">Comprar</button></p>
            </div>

            <!-- FIN TOTAL -->



        </div>

    </section>
    <!-- END SECTION SHOPPING CART -->

    <script src="./tienda.js"></script>


    </div>




    </main>
    <footer>
        <address>
            Siempre protegido

        </address>
        <div>Enmascarados | Tienda</div>
        <section class="social">
            <a href="admin.login.view.php" style="text-decoration:none">Administrador</a>
        </section>
    </footer>
</body>

</html>