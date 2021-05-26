<?php

//Index de nuestra página
session_start(); //Iniciamos una sesión del cliente
// session_destroy();

$_SESSION['nombre'] = 'Gorka'; //Sesión iniciada con Gorka

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enmascarados | Portada</title>

    <!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Script para la cookie inicial -->
    <script>
        function galletas() {
            if (confirm("¿Aceptas todos nuestros terminos y condiciones de privacidad?")) {
                document.cookie = "expiration_time";
                var expiration_time = new Date();
            } else {
                window.open("sinCookies.php");
            }
        }

        // Función para obtener los datos de una cookie
        function getGalletas(nombre) {
            var nom = nombre + "=";
            // Creamos un array alacene los datos de las cookies y los valla recorriendo 1 a 1
            //hasta llegar al espacio (fin de la cadena)
            var array = document.cookie.split(";");
            for (var i = 0; i < array.length; i++) {
                var c = array[i];
                while (c.charAt(0) == " ") {
                    c = c.substring(1);
                }
                if (c.indexOf(nombre) == 0) {
                    // Comprobamos si aparece la palabra nombre+"="
                    return c.substring(nom.length, c.length);
                    // Pasamos 2 paramentro para comprobar la longitud del nombre

                }
            }
            // Si no devuelve nada
            return "";
        }
    </script>

</head>

<body onload="galletas()">

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
            <!--<header>
                <div class="image">
                    <img src="img/portada.jpg" height=500 alt="foto portada de mascarillas" />
                </div>
            </header>-->
            <main>
                <br><br><br>
                <h1>Tu web de mascarillas</h1> <br>

                <div class="container1">
        
                    <ul class="slider">
                        <li id="slide1">
                        <img src="img/portada.jpg" height=500 alt="foto portada de mascarillas" alt=""/>
                        </li>
                        <li id="slide2">
                        <img src="img/galeria-mascarilla.jpg" alt=""/>
                        </li>
                        <li id="slide3">
                        <img src="img/paquete.jpg" alt=""/>
                        <aside>
                            <h4>Si estás interesado</h4>
                            <h4><a href="tienda.view.php">Compra</a></h4>
                        </aside>
                        </li>
                    </ul>
                
                    <ul class="menu">
                        <li>
                        <a href="#slide1" alt="1">1</a>
                        </li>
                        <li>
                        <a href="#slide2" alt="2">2</a>
                        </li>
                        <li>
                        <a href="#slide3" alt="3">3</a>
                        </li>
                    </ul>
                
                </div>
        
            </main>

            <!--PRIMER BLOQUE DE INFORMACIÓN-->

        <div class="infoPortada">
            <div class="bloque1">
                <div class="titulos">
                    <h2><u>MAYOR SUJECCIÓN</u></h2>
                </div>
                <div class="textos">
                    <p>Sujección baja que evita rozaduras y molestias en la zona de las orejas <br><br><br><br></p>
                </div>
            </div>
            <div class="bloque2">
                <div class="titulos">
                    <h2><u>UN DISEÑO ADAPTADO A TI</u></h2>
                </div>
                <div class="textos">
                    <p>Sujección baja que evita rozaduras y molestias en la zona de las orejas</p>
                </div>
            </div>
            <div class="bloque3">
                <div class="titulos">
                    <h2><u>MODA SEGURA</u></h2>
                </div>
                <div class="textos">
                    <p>Sujección baja que evita rozaduras y molestias en la zona de las orejas</p>
                </div>
            </div>
        </div>

        <!--SEGUNDO BLOQUE DE INFORMACIÓN-->

        <div class="cover-page">
	
	<header class="entry-header">
		<h1 class="entry-title"> <br><br> Acerca de nuestras Mascarillas <br><br></h1>
	</header>

</div>
    <main class="cuerpo-imagenes">
        <article class="articulo">
            
                    <div class="">
                        
                        <h2 class="center-text">Cómo usarlas</h2>
                        
                        <div class="bloque-imagenes-uso">
                            <div class="sub-bloque-imagenes-uso">
                                <div class="imagenes-uso">
                                    <p><br><br> Paso 1
                                    <br><br><br>
                                    Abrir la tira de ajuste lo máximo posible y colocaria alrededor del cuello
                                    </p>
                                    <img src="img/paso1.png" width="200px" height="200px">
                                </div>
                                <div class="imagenes-uso">
                                    <p><br><br> Paso 2
                                    <br><br><br>
                                    Tirar suavemente de la tira a ambos lados
                                    </p>
                                    <img src="img/paso2.png" width="200px" height="200px">
                                </div>
                                <div class="imagenes-uso">
                                    <p><br><br> Paso 3
                                    <br><br><br>
                                    Colocar la tira alrededor de las orejas de forma holgada
                                    </p>
                                    <img src="img/paso3.png" width="200px" height="200px">
                                </div>
                            </div>
                            <div class="sub-bloque-imagenes-uso">
                                <div class="imagenes-uso">
                                    <p><br><br> Paso 4
                                    <br><br><br>
                                    Colocar la mascarilla sobre el rosto cubriendo boca y nariz
                                    </p>
                                    <img src="img/paso4.png" width="200px" height="200px">
                                </div>
                                <div class="imagenes-uso">
                                    <p><br><br> Paso 5
                                    <br><br><br>
                                    Apretar el cierre sobre la nuca para asegurar un ajuste cómodo y firme
                                    </p>
                                    <img src="img/paso5.png" width="200px" height="200px">
                                </div>
                                <div class="imagenes-uso">
                                    <p><br><br> Paso 6
                                    <br><br><br>
                                    Ajustar la mascarilla sobre nariz y barbilla
                                    </p>
                                    <img src="img/paso6.png" width="200px" height="200px">
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="bloque-imagenes-uso-dentrofuera">
                            <div class="sub-bloque-imagenes-uso-dentrofuera">
                                <div class="imagenes-uso">
                                    <h3><strong>Fuera</strong></h3>
                                    <img src="img/fuera.png" width="225px" height="130px">
                                </div>
                                <div class="imagenes-uso">
                                    <h3><strong>Dentro</strong></h3>
                                    <img src="img/dentro.png" width="225px" height="130px">
                                </div>
                            </div>
                            <div class="info-legal-dudas">
                                <br><br><br>
                                <h2>información legal</h2>
                                <p>Posibilidades de uso – Esto no es un consejo medico. No cumple con la regulaciones para usos quirúrjicos (EU/2017/745 regulation).</p>
                                <p>FH2H, Lda Rua Doutor Eduardo Santos Silva 261 Fracção H 4200-283 Porto NIF: 515994839</p>
                                <br>
                                <h2>¿cualquier duda?</h2>
                                <p>Póngase en contacto con nuestro servicio de atención al cliente en <a href="#">EMAIL</a>.</p>
                                <br><br>
                            </div> 
                        </div>
                    </div>
        </article>
    </main>

        <!--FIN SEGUNDO BLOQUE DE INFORMACIÓN-->

        <div class="box70 box100-m center-box certificados-boxes">




            <footer>
                <address>
                    <div class="box33 box100-m f-left center-text double-padding-full">
                        <img src="https://maskk.com/wp-content/uploads/2020/09/selo-25.jpg">
                        <p data-mh="text-cert">25 CICLOS DE LAVADO <br><strong>NIVEL 2</strong>
                            <br>BFE 95% ; Transpirabilidad <20 (Pa/cm2) <br>BO No:202014058 por Equilibrium
                        </p>
                        <p class="logos-cert"><img src="https://maskk.com/wp-content/themes/maskk/img/spain.png"><img src="https://maskk.com/wp-content/themes/maskk/img/european-union.png"><img src="https://maskk.com/wp-content/themes/maskk/img/logo-25-lavages-noir.png"></p>
                    </div>
                </address>
                <div class="box33 box100-m f-left center-text double-padding-full">
                    <img src="https://maskk.com/wp-content/uploads/2020/09/selo-50.jpg">
                    <p data-mh="text-cert">50 CICLOS DE LAVADO <br><strong>NIVEL 3</strong>
                        <br>BFE 88%; Transpirabilidad <20(Pa /cm2) <br>BO No:202014058 por Equilibrium
                    </p>
                    <p class="logos-cert"><img src="https://maskk.com/wp-content/themes/maskk/img/european-union.png"></p>
                </div>
                <section class="social">
                    <div class="box33 box100-m f-left center-text double-padding-full">
                        <img src="https://maskk.com/wp-content/uploads/2020/09/une-all.jpg">
                        <p data-mh="text-cert">TODOS LOS CRITERIOS <br>APROBADOS <br>AMS-Lab 20-008737 </p>
                        <p class="logos-cert"><img src="https://maskk.com/wp-content/themes/maskk/img/spain.png"></p>
                    </div>
                    <div class="clr"></div>
                    <p class="center-text">Código: CL-1429 por AMSLab <br>Pruebas realizadas según EN14683:2019+AC 2019</p>
        </div>
        </section>
        </footer>

        <footer>
            <address>
                Siempre protegido
            </address>
            <div>Enmascarados | Portada</div>
            <section class="social">
                <a href="admin.login.view.php" style="text-decoration:none">Administrador</a>
            </section>
        </footer>
</body>

</html>