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
                    // Cambio formato fecha para poner la expiracion de cookies por dias
                    expiration_time.setTime(expiration_time.getTime() + expiration * 24 * 60 * 60 * 1000);
                    var expiration = "expires=" + d.toUTCString();
                    document.cookie = nombre + "=" + valor + ";" + expiracion + ";path=/";
                    console.log(document.cookie);
                } else {
                    window.open("sinCookies.php");
                }
            }

            // Introducimos cookies si ya las teniamos

            document.getElementById("confirm").addEventListener("click", confirm);

            function confirmEvent(e) {
                if (!e) e = window.event;
                if (e.target.id == "confirm")
                    document.cookie = "nombre = Gorka";
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
            <header>
                <div class="image">
                    <img src="img/portada.jpg" height=500 alt="foto portada de mascarillas" />
                </div>
            </header>
            <main>
                <h1>Tu web de mascarillas</h1>
                <br>
            <div class="container1">
    
                <ul class="slider">
                    <li id="slide1">
                    <img src="img/doctora-mascarilla2.jpg" alt="" height="562" width="200"/>
                    </li>
                    <li id="slide2">
                    <img src="img/galeria-mascarilla.jpg" alt=""/>
                    </li>
                    <li id="slide3">
                    <img src="img/paquete.jpg" alt=""/>
                    <a href="tienda.view.php" alt="">¡Corre a mirar nuestros productos!</a>
                    <!--la intención es colocar esto como un aside-->
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
                    <h2>MAYOR SUJECCIÓN</h2>
                </div>
                <div class="textos">
                    <p>Sujección baja que evita rozaduras y molestias en la zona de las orejas <br><br><br><br></p>
                </div>
            </div>
            <div class="bloque2">
                <div class="titulos">
                    <h2>UN DISEÑO ADAPTADO A TI</h2>
                </div>
                <div class="textos">
                    <p>Sujección baja que evita rozaduras y molestias en la zona de las orejas</p>
                </div>
            </div>
            <div class="bloque3">
                <div class="titulos">
                    <h2>MODA SEGURA</h2>
                </div>
                <div class="textos">
                    <p>Sujección baja que evita rozaduras y molestias en la zona de las orejas</p>
                </div>
            </div>
        </div>

        <!--SEGUNDO BLOQUE DE INFORMACIÓN-->

        <div class="cover-page">
	
	<div class="cover-overlay"></div>
	<header class="entry-header">
		<h1 class="entry-title"> <br><br> Acerca de nuestras Mascarillas</h1>
	</header>

</div>
<main class="main-content page page-acerca-de-nuestras-maskks double-padding-top double-padding-bottom nopadding">
	<div class="wrapper double-padding-top double-padding-bottom box100-m nopadding">
		<article id="post-17786" class="post-17786 page type-page status-publish has-post-thumbnail hentry">
		
			
				<div class="entry-content post about-our-maskks padding-m">
                    
                    <div class="clr padding-m mobile"><br></div>
                    
                    <div class="clr double-padding-full"></div>
                    
                    <h2 class="center-text">Cómo usar tu Maskk</h2>
                    
                    <div class="box70 box100-m center-box how-use">
                        <div class="box33 box100-m f-left center-text double-padding-full flex-box" data-mh="how-to-use">
                            <img src="https://maskk.com/wp-content/uploads/2020/09/Asset-8.png">
                            <p>Abrir la tira de ajuste lo máximo posible y colocaria alrededor del cuello</p>
                        </div>
                        <div class="box33 box100-m f-left center-text double-padding-full flex-box" data-mh="how-to-use">
                            <img src="https://maskk.com/wp-content/uploads/2020/09/Asset-6.png">
                            <p>Tirar suavemente de la tira a ambos lados</p>
                        </div>
                        <div class="box33 box100-m f-left center-text double-padding-full flex-box" data-mh="how-to-use">
                            <img src="https://maskk.com/wp-content/uploads/2020/09/Asset-4.png">
                            <p>Colocar la tira alrededor de las orejas de forma holgada</p>
                        </div>
                        <div class="box33 box100-m f-left center-text double-padding-full flex-box" data-mh="how-to-use">
                            <img src="https://maskk.com/wp-content/uploads/2020/09/Asset-7.png">
                            <p>Colocar la Maskk sobre el rosto cubriendo boca y nariz</p>
                        </div>
                        <div class="box33 box100-m f-left center-text double-padding-full flex-box" data-mh="how-to-use">
                            <img src="https://maskk.com/wp-content/uploads/2020/09/Asset-5.png">
                            <p>Apretar el cierre sobre la nuca para asegurar un ajuste cómodo y firme</p>
                        </div>
                        <div class="box33 box100-m f-left center-text double-padding-full flex-box" data-mh="how-to-use">
                            <img src="https://maskk.com/wp-content/uploads/2020/09/Asset-3.png">
                            <p>Ajustar la Maskk sobre nariz y barbilla</p>
                        </div>
                        <div class="clr"></div>
                    </div>
                    
                    
                    <div class="clr double-padding-full"></div>
                    
                    <h2 class="center-text">Cómo quitarse la Maskk</h2>
                    
                    <div class="box70 box100-m center-box how-use">
                        <div class="box33 box100-m f-left center-text double-padding-full flex-box" data-mh="how-to-remove">
                            <img src="https://maskk.com/wp-content/uploads/2020/09/Asset-5.png">
                            <p>Release the stopper on the back of your neck</p>
                        </div>
                        <div class="box33 box100-m f-left center-text double-padding-full flex-box" data-mh="how-to-remove">
                            <img src="https://maskk.com/wp-content/uploads/2020/09/Asset-6.png">
                            <p>Suelta tu mask cogiendo la cuerda por detrás de las orejas</p>
                        </div>
                        <div class="box33 box100-m f-left center-text double-padding-full flex-box" data-mh="how-to-remove">
                            <img src="https://maskk.com/wp-content/uploads/2020/09/Asset-10.png">
                            <p>No toques la parte frontal de tu maskk</p>
                        </div>
                        <div class="clr"></div>
                    </div>
                    
                    <div class="clr double-padding-full"></div>
                    
                    
                    <div class="box70 box100-m center-box">
                        <div class="box50 box100-m f-left center-text double-padding-full flex-box" data-mh="sides">
                            <h3><strong>Fuera</strong></h3>
                            <img src="https://maskk.com/wp-content/uploads/2020/09/Asset-2.png">
                        </div>
                        <div class="box50 box100-m f-left center-text double-padding-full flex-box" data-mh="sides">
                            <h3><strong>Dientro</strong></h3>
                            <img src="https://maskk.com/wp-content/uploads/2020/09/Asset-1.png">
                        </div>
                        <div class="clr"></div>
                    </div>
                    
                    <div class="clr double-padding-full"></div>
                    <div class="clr double-padding-full"></div>
                    
                    <h2 class="center-text">Como mantener en buen estado tu Maskk</h2>
                    
                    <div class="box70 box100-m center-box">
                        
                            <img src="https://maskk.com/wp-content/uploads/2020/09/Asset-9.png" style="margin: 0 auto;">
                            <p class="center-text">No toques la parte frontal de tu maskk</p>
                        
                        
                        <div class="clr"></div>
                        
                        <div class="clr double-padding-full"></div>
                        
                        <div class="content-about box100-m"><p><strong>Lava tu Maskk todos los días después de cada uso como indica las instrucciones</strong></p>
<p><strong>Hecha en Portugal</strong><br />
<strong>Las fabricas están en Portugal</strong></p>
<ul>
<li>100% algodón + Polypropyleno 50g/m2 capa de filtración</li>
<li>Clip para la nariz – Clip de metal recubierto</li>
<li>Permitida para usar 4 horas seguidas  sin que se degrade el BFE ni la transpirabilidad</li>
</ul>
<p>Guarda tu mask en sitio seco, lejos de cualquier contaminación (antes y después de lavarla).</p>
<p><strong>No usarla en caso de cualquier desperfecto. Cambiala por otra Maskk.</strong></p>
<p>“Este producto no es un equipo de protección individual ni un producto sanitario” BOE 109 10/04/2020.</p>
<h2>información legal</h2>
<p>Posibilidades de uso – Esto no es un consejo medico. No cumple con la regulaciones para usos quirúrjicos (EU/2017/745 regulation).</p>
<p>FH2H, Lda Rua Doutor Eduardo Santos Silva 261 Fracção H 4200-283 Porto NIF: 515994839</p>
<h2>¿cualquier duda?</h2>
<p>Póngase en contacto con nuestro servicio de atención al cliente en <a href="/cdn-cgi/l/email-protection#5e373038311e333f2d3535703d3133"><span class="__cf_email__" data-cfemail="ed84838b82ad808c9e8686c38e8280">[email&#160;protected]</span></a>.</p>
</div>
                        
                    </div>
                    
                    
				</div>
			</article>
		
				
				
	</div>
</main>

        <!--FIN SEGUNDO BLOQUE DE INFORMACIÓN-->

        <div class="box70 box100-m center-box certificados-boxes">
                        
                        
                       

        <footer>
            <address>
            <div class="box33 box100-m f-left center-text double-padding-full">
                            <img src="https://maskk.com/wp-content/uploads/2020/09/selo-25.jpg">
                            <p data-mh="text-cert">25 CICLOS DE LAVADO                            <br><strong>NIVEL 2</strong>
                            <br>BFE 95% ; Transpirabilidad <20 (Pa/cm2)                            <br>BO No:202014058 por Equilibrium                            </p>
                            <p class="logos-cert"><img src="https://maskk.com/wp-content/themes/maskk/img/spain.png"><img src="https://maskk.com/wp-content/themes/maskk/img/european-union.png"><img src="https://maskk.com/wp-content/themes/maskk/img/logo-25-lavages-noir.png"></p>
            </div>
            </address>
            <div class="box33 box100-m f-left center-text double-padding-full">
                            <img src="https://maskk.com/wp-content/uploads/2020/09/selo-50.jpg">
                            <p data-mh="text-cert">50 CICLOS DE LAVADO                            <br><strong>NIVEL 3</strong>
                            <br>BFE 88%; Transpirabilidad <20(Pa/cm2)                            <br>BO No:202014058 por Equilibrium                            </p>
                            <p class="logos-cert"><img src="https://maskk.com/wp-content/themes/maskk/img/european-union.png"></p>
            </div>
            <section class="social">
            <div class="box33 box100-m f-left center-text double-padding-full">
                            <img src="https://maskk.com/wp-content/uploads/2020/09/une-all.jpg">
                            <p data-mh="text-cert">TODOS LOS CRITERIOS                            <br>APROBADOS                            <br>AMS-Lab 20-008737                            </p>
                            <p class="logos-cert"><img src="https://maskk.com/wp-content/themes/maskk/img/spain.png"></p>
                        </div>
                        <div class="clr"></div>
                        <p class="center-text">Código: CL-1429 por AMSLab                            <br>Pruebas realizadas según EN14683:2019+AC 2019</p>
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