<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enmascarados | Pasarela de pago</title>

    <!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="validar.js"></script>

</head>

<body>

    <!-- Barra de navegación con los enlaces a distintas páginas de la web -->
    <nav>
        <div class="nav-item" href="index.php" target="_blank">
            <a href="tienda.view.php" style="text-decoration:none">Volver a TIENDA</a>
        </div>
    </nav>

    <!-- Imagen de cabecera, subtítulo y descripción -->
    <div class="container">
        <header>
            <div class="image">
                <img src="img/tarjeta.jpg" height=500 />
            </div>
        </header>
        <main>
            <h1>Pasarela de pago</h1><br>
            <h4>Rellena correctamente el formulario de pago y ya será tuyo ;)</h4><br><br>
            <h5>

                <h5><b>Carrito de la compra: </b><br><br>
                    - Artículo: 8,26€ <br>
                    - IVA (21%): 1,73€ <br>
                    ______________________ <br>
                    <br>
                    - TOTAL: 9,99€ <br><br><br><br>
                </h5>

                <!-- Formulario de pago con su correspondiente validación de datos tanto por REQUIRED como por un script de JS -->
                <div class="formpay">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <span class="paymentErrors alert-danger"></span>
                            <form action="comprado.view.php" method="POST" id="paymentForm" onsubmit="return validar();">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" placeholder="Nombre Apellido Apellido" class="form-control" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="xxxxxxx@xxxxx.xxx" class="form-control" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Nº de tarjeta</label>
                                    <input type="text" name="numTarjeta" id="numTarjeta" placeholder="**** **** **** ****" size="20" autocomplete="off" class="form-control" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>CVC</label>
                                    <input type="text" name="cvc" id="cvc" placeholder="***" size="4" autocomplete="off" class="form-control" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Caducidad</label>
                                    <input type="text" name="mesExp" id="mesExp" placeholder="MM" size="2" class="form-control" required>
                                    <input type="text" name="anoExp" id="anoExp" placeholder="AAAA" size="4" class="form-control" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="submit" value="¡Comprar!">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

    </div>
    </main>

</body>

</html>