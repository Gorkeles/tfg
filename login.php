<?php
include 'funciones.php';
$errores = '';
$enviado = true;
$erroresLog = '';
$enviadoLog = true;
// Comprobamos que el formulario haya sido enviado con las variables que hayamos puesto en login.view, deben llamarse igual!
if (isset($_POST['registrar'])) {
	$conexion = new mysqli('localhost', 'root', '', 'tfg');
	//conectamos mi base de datos 'tfg'

	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$fecha = $_POST['fecha'];
	$asistencia = $_POST['asistencia'];


	if (!empty($nombre)) { //podemos combrobar con el apellido también

		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		//limpia o verifica que es un texto

	} else {
		$errores .= 'un nombre, ';
		$enviado = false;
	}

	if (!empty($telefono)) {

		$telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);
		//limpia o verifica que es un número

	} else {
		$errores .= 'un teléfono, ';
		$enviado = false;
	}

	if (!empty($email)) {
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		//comprobamos que es un email válido y que lo ha enviado

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errores .= 'un correo valido, ';
			$enviado = false;
			existeEmail($email);
		}
	} else {
		$errores .= 'un correo, ';
		$enviado = false;
	}

	if (!empty($pass)) {

		$pass = filter_var($pass, FILTER_SANITIZE_STRING);
		//limpia o verifica que es un texto

	} else {
		$errores .= 'una contraseña, ';
		$enviado = false;
	}

	if (!empty($fecha)) {

		$fecha = filter_var($fecha, FILTER_SANITIZE_NUMBER_INT);
		//limpia o verifica que es una fecha a base de números
	} else {
		$errores .= 'una fecha, ';
		$enviado = false;
	}

	if (!empty($asistencia)) {

		$asistencia = filter_var($asistencia, FILTER_SANITIZE_STRING);
		//limpia o verifica que es un texto, en este caso si ha seleccionado alguna opción
	} else {
		$errores .= 'que vas a hacer';
		$enviado = false;
	}

	if ($enviado == false) {
		//lanzamos los errores que hayan podido ocurrir
		echo "<script type='text/javascript'>
        		alert('Por favor, indroduzca $errores');
        		window.location.href='login.php';
        		</script>";
	} else {
		//Todo OK, continuamos


		$conexion = new mysqli('localhost', 'root', '', 'tfg');
		//conectamos mi base de datos 'tfg'







		if ($conexion->connect_errno) {
			die('Lo siento, hubo un problema con el servidor');
		} else {

			// Antes de insertar, hacemos una query para ver si existe email
			$existeEmailSql = 'SELECT * from practica5 where email=\'' . $email . '\'';


			$conexion->query($existeEmailSql);
			if ($conexion->affected_rows >= 1) {
				echo "<script type='text/javascript'>
		alert('El email está en uso');
		window.location.href='login.php';
		</script>";
				return;
			}



			$sql = "INSERT INTO practica5 (id,nombre,telefono,email,pass,fecha,asistencia) VALUES (null,'$nombre','$telefono','$email','$pass','$fecha','$asistencia')";

			$conexion->query($sql);
			//Hacemos un query a la base de datos

			if ($conexion->affected_rows >= 1) {
				//si todo va bien saluda al usuario
				echo "<script type='text/javascript'>
        			alert('Bienvenido, $nombre');
        			window.location.href='login.php';
        			</script>";
				//echo 'Hola, ' . $nombre  . ', ya estás registrado en la web ' . '</br>';
				hayConexion();
			} else {
				//sino le dice que lo intente de nuevo
				echo "<script type='text/javascript'>
        			alert('Intentalo de nuevo, por favor');
        			window.location.href='login.php';
        			</script>";
			}
		}
	}
}



if (isset($_POST['loguear'])) {
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
				   window.location.href='login.php';
				   </script>";
	} else {
		//Todo OK, continuamos


		$conexion = new mysqli('localhost', 'root', '', 'tfg');
		//conectamos mi base de datos 'tfg'

		if ($conexion->connect_errno) {
			die('Lo siento, hubo un problema con el servidor');
		} else {

			// Antes de insertar, hacemos una query para ver si existe email
			$existeEmailSql = 'SELECT * from practica5 where email=\'' . $emailog . '\' AND pass=\'' . $passlog . '\' ';


			$conexion->query($existeEmailSql);
			if ($conexion->affected_rows >= 1) {
				echo "<script type='text/javascript'>
		alert('¡BIENVENIDO! Has iniciado sesión con exito');
		window.location.href='pago.view.php';
		</script>";
				return;
			} else {
				echo "<script type='text/javascript'>
		alert('Usuario no encontrado');
		window.location.href='login.php';
		</script>";
				return;
			}

			//Hacemos un query a la base de datos

			if (!$result) {
				echo "<script type='text/javascript'>
						alert(¡ERROR! Has introducido mal tu E-mail o contraseña);
						window.location.href='login.php';
						</script>";
			} else {
				if (password_verify($pass, $result['pass'])) {
					$_SESSION['user_id'] = $result['id'];
					echo "<script type='text/javascript'>
					alert(¡ENHORABUENA! Te has logueado satisfactoriamente);
					window.location.href='login.php';
					</script>";

					require 'bienvenido.php';
				} else {
					echo "<script type='text/javascript'>
						alert(¡ERROR! Has introducido mal tu E-mail o contraseña);
						window.location.href='login.php';
						</script>";
				}
			}
		}
	}
}

require 'login.view.php';
//llamamos al índice en HTML
