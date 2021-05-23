<!DOCTYPE html>
<!-- Página que ve el usuario -->
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Acceso a administración | Portada</title>

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
			<a href="tienda.view.php" style="text-decoration:none">Tienda</a>
		</div>
		<div class="nav-item">
			<a href="contacto.view.php" style="text-decoration:none">Contacto</a>
		</div>
		<div class="nav-item">
			<a href="index.php" style="text-decoration:none">Portada</a>
		</div>
	</nav>

	<div class="container">
		<main>
			<H1> Acceso a administración </H1> <!-- Titulo de la web -->
			<br>
			<section>
				<div class="registro">
					<!-- contenedor -->

					<form action="admin.login.php" name="formulario" method="post">
						<!-- Usamos el método post para recoger lo que seleccione el usuario en unas variables -->
						<h3>Inicia sesión</h3>
						<!-- Placeholder es lo que le aparece al usuario en la web, name es como se llama la variable que recogeremos con post y type el tipo de datos que introduce el usuario -->
						<br>
						<!-- El email es tipo email -->
						E-mail: <br><br>
						<input type="email" placeholder="xxxxxx@xxxx.com" name="emailog" id="emailog">
						<br>
						<br>
						<!-- El password es un tipo password -->
						Contraseña: <br><br>
						<input type="password" placeholder="Introduce una contraseña" name="passlog" id="passlog">
						<br>
						<br>

						<!-- boton para enviar los datos -->
						<input type="submit" name="adminLog" class="button button-primary" value="Enviar"><br><br>
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
		<div>Acceso a administración | Portada </div>
		<section class="social">
			<p><a href="index.php" style="text-decoration:none">Volver a Portada</a></p>
		</section>
	</footer>

</body>