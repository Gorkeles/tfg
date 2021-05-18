<!DOCTYPE html>
<!-- Página que ve el usuario -->
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Enmascarados | Portada</title>
	<style type="text/css">
		H1 {
			Text-align: center
		}

		/*H1 alineado al centro de la página*/
	</style>
	<!-- Incluimos los estilos y fuente utilizada en la web -->
    <link href="estilos.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body>

	<div class="wrapper">
		<H1> ¿Te vienes de ruta? </H1> <!-- Titulo de la web -->

		<div class="registro">
			<!-- contenedor -->

			<form action="login.php" name="formulario" method="post">
				<!-- Usamos el método post para recoger lo que seleccione el usuario en unas variables -->
				<h3>Registrate</h3>
				<!-- Placeholder es lo que le aparece al usuario en la web, name es como se llama la variable que recogeremos con post y type el tipo de datos que introduce el usuario -->
				<!-- El nombre es tipo text -->
				Nombre: <br>
				<input type="text" placeholder="Introduce tu nombre" name="nombre" id="nombre">
				<br>
				<!-- El telefono es tipo text -->
				Teléfono: <br>
				<input type="text" placeholder="Número de 9 cifras" name="telefono" id="telefono">
				<br>
				<!-- El email es tipo email -->
				E-mail: <br>
				<input type="email" placeholder="xxxxxx@xxxx.com" name="email" id="email">
				<br>
				<br>
				<!-- El password es un tipo password -->
				Contraseña: <br>
				<input type="password" placeholder="Introduce una contraseña" name="pass" id="pass">
				<br>
				<br>
				<!-- La fecha es tipo date -->
				Fecha de nacimiento: <br>
				<input type="date" placeholder="dd/mm/aaaa" name="fecha" id="fecha">
				<br>
				<br>
				<!-- La asistencia es con combobox -->
				¿Te vienes?: &nbsp
				<select name="asistencia" id="asistencia">
					<option value="">Elige una opción</option>
					<option value="Si">¡SÍ!</option>
					<option value="No">No</option>
					<option value="Quizás">Quizás...</option>

				</select>
				<br>

				<!-- boton para enviar los datos -->
				<input type="submit" name="registrar" class="btn btn-primary" value="Enviar">
			</form>


		</div>




		<div class="registro">
			<!-- contenedor -->

			<form action="login.php" name="formulario" method="post">
				<!-- Usamos el método post para recoger lo que seleccione el usuario en unas variables -->
				<h3>Inicia sesión</h3>
				<!-- Placeholder es lo que le aparece al usuario en la web, name es como se llama la variable que recogeremos con post y type el tipo de datos que introduce el usuario -->

				<!-- El email es tipo email -->
				E-mail: <br>
				<input type="email" placeholder="xxxxxx@xxxx.com" name="emailog" id="emailog">
				<br>
				<br>
				<!-- El password es un tipo password -->
				Contraseña: <br>
				<input type="password" placeholder="Introduce una contraseña" name="passlog" id="passlog">
				<br>
				<br>

				<!-- boton para enviar los datos -->
				<input type="submit" name="loguear" class="btn btn-primary" value="Enviar">
			</form>

		</div>
	</div>

	<footer>
		<address>
			Siempre protegido

		</address>
		<div>Enmascarados | Portada </div>
		<section class="social">
			<p><a href="mapa.php" style="text-decoration:none">Diagrama de flujo</a></p>
		</section>
	</footer>




</body>