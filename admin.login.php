<?php
include 'funciones.php';
$errores = '';
$enviado = true;
$erroresLog = '';
$enviadoLog = true;
// Comprobamos que el formulario haya sido enviado con las variables que hayamos puesto en login.view, deben llamarse igual!

if (isset($_POST['adminLog'])) {
	$emailog = $_POST['emailog'];
	$passlog = $_POST['passlog'];


	if (!empty($emailog)) {
		$emailog = filter_var($emailog, FILTER_SANITIZE_EMAIL);
		//comprobamos que es un email válido y que lo ha enviado

		if (!filter_var($emailog, FILTER_VALIDATE_EMAIL)) {
			$erroresLog .= 'un correo valido, ';
			$enviadoLog = false;
			existeEmailLog($emailog);
		}
	} else {
		$erroresLog .= 'un correo, ';
		$enviadoLog = false;
	}


	if (!empty($passlog)) {

		$passlog = filter_var($passlog, FILTER_SANITIZE_STRING);
		//limpia o verifica que es un texto

	} else {
		$erroresLog .= 'una contraseña, ';
		$enviadoLog = false;
	}

	if ($enviadoLog == false) {
		//lanzamos los errores que hayan podido ocurrir
		echo "<script type='text/javascript'>
				   alert('Por favor, indroduzca $erroresLog');
				   window.location.href='admin.login.php';
				   </script>";
	} else {
		//Todo OK, continuamos


		$conexion = new mysqli('localhost', 'root', '', 'tfg');
		//conectamos mi base de datos 'tfg'

		if ($conexion->connect_errno) {
			die('Lo siento, hubo un problema con el servidor');
		} else {

			// Antes de insertar, hacemos una query para ver si existe email
			$existeEmailSql = 'SELECT * from admin where email=\'' . $emailog . '\' AND pass=\'' . $passlog . '\' ';


			$conexion->query($existeEmailSql);
			if ($conexion->affected_rows >= 1) {
				echo "<script type='text/javascript'>
		alert('¡BIENVENIDO ADMINISTRADOR! Has iniciado sesión con exito');
		window.location.href='admin.php';
		</script>";
				return;
			} else {
				echo "<script type='text/javascript'>
		alert('Usuario no encontrado');
		window.location.href='admin.login.php';
		</script>";
				return;
			}

			//Hacemos un query a la base de datos

			if (!$result) {
				echo "<script type='text/javascript'>
						alert(¡ERROR! Has introducido mal tu E-mail o contraseña);
						window.location.href='admin.login.php';
						</script>";
			} else {
				if (password_verify($pass, $result['pass'])) {
					$_SESSION['user_id'] = $result['id'];
					echo "<script type='text/javascript'>
					alert(¡ENHORABUENA ADMINISTRADOR! Te has logueado satisfactoriamente);
					window.location.href='admin.php';
					</script>";

				} else {
					echo "<script type='text/javascript'>
						alert(¡ERROR! Has introducido mal tu E-mail o contraseña);
						window.location.href='admin.login.php';
						</script>";
				}
			}
		}
	}
}

require 'admin.login.view.php';
//llamamos al índice en HTML
