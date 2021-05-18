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
        <div class="nav-item" href="index.php" target="_blank">
            <a href="index.php" style="text-decoration:none">Portada</a>
        </div>
        <div class="nav-item">
            <a href="tienda.view.php" style="text-decoration:none">Tienda</a>
        </div>
        <div class="nav-item">
            <a href="contacto.view.php" style="text-decoration:none">Contacto</a>
        </div>

    </nav>

    <!-- START SECTION STORE -->
    <section class="store">
        <div class="container">
                <div class="item">
                    <h3 class="item-title">Mascarilla básica azul</h3>
                    <img class="item-image" src="./img/1azul.jpg">

                    <div class="item-details">
                        <h4 class="item-price">9.99€</h4>
                        <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                    </div>
                </div>               
                
                <div class="item">
                    <h3 class="item-title">Mascarilla básica rosa</h3>

                    <img class="item-image" src="./img/2rosa.jpg">

                    <div class="item-details">
                        <h4 class="item-price">9.99€</h4>
                        <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                    </div>
                </div>            
            
                <div class="item">
                    <h3 class="item-title">Mascarilla básica beige</h3>

                    <img class="item-image" src="./img/3beige.jpg">

                    <div class="item-details">
                        <h4 class="item-price">9.99€</h4>
                        <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                    </div>
                </div>            
            
                <div class="item">
                    <h3 class="item-title">Mascarilla básica negra</h3>

                    <img class="item-image" src="./img/4negra.jpg">

                    <div class="item-details">
                        <h4 class="item-price">9.99€</h4>
                        <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                    </div>
                </div>
        </div>
    </section>
    <!-- END SECTION STORE -->
    <!-- START SECTION SHOPPING CART -->
    <section class="shopping-cart">
        <div class="container">
            <h1 class="text-center">CARRITO</h1>
            <hr>
            <div class="row">
                <div class="col-6">
                    <div class="shopping-cart-header">
                        <h6>Producto</h6>
                    </div>
                </div>
                <div class="col-2">
                    <div class="shopping-cart-header">
                        <h6 class="text-truncate">Precio</h6>
                    </div>
                </div>
                <div class="col-4">
                    <div class="shopping-cart-header">
                        <h6>Cantidad</h6>
                    </div>
                </div>
            </div>
            <!-- ? START SHOPPING CART ITEMS -->
            <div class="shopping-cart-items shoppingCartItemsContainer">
            </div>
            <!-- ? END SHOPPING CART ITEMS -->

            <!-- START TOTAL -->
            <div class="row">
                <div class="col-12">
                    <div class="shopping-cart-total d-flex align-items-center">
                        <p class="mb-0">Total</p>
                        <p class="ml-4 mb-0 shoppingCartTotal">0€</p>
                        <button class="btn btn-success ml-auto comprarButton" type="button" data-toggle="modal"
                            data-target="#comprarModal">Comprar</button>
                    </div>
                </div>
            </div>

            <!-- END TOTAL -->

            

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