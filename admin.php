<?php

include 'funciones.php';
$errores = '';
$enviado = true;

$yaBuscado = false;
$arrayRutas = array();

// Comprobamos que el formulario haya sido enviado con las variables que hayamos puesto en index.view, deben llamarse igual!
if (isset($_POST['rutas'])) {
    $conexion = new mysqli('localhost', 'root', '', 'gorka');
    //conectamos mi base de datos 'gorka'

    $provincia = $_POST['provincia'];
    $nivel = $_POST['nivel'];
    $distancia = $_POST['distancia'];
    $descripcion = $_POST['descripcion'];


    $conexion = new mysqli('localhost', 'root', '', 'gorka');
    //conectamos mi base de datos 'gorka'


    if ($conexion->connect_errno) {
        die('Lo siento, hubo un problema con el servidor');
    } else {

        // Antes de insertar, hacemos una query para ver si existe email
        $existeRutaSql = 'SELECT * from rutas where descripcion=\'' . $descripcion . '\'';


        $conexion->query($existeRutaSql);
        if ($conexion->affected_rows >= 1) {
            echo "<script type='text/javascript'>
		alert('Ya has introducido esa ruta');
		window.location.href='rutas.view.php';
		</script>";
            return;
        }



        $sql = "INSERT INTO rutas (id_ruta,provincia,nivel,distancia,descripcion) VALUES (null,'$provincia','$nivel','$distancia','$descripcion')";

        $conexion->query($sql);
        //Hacemos un query a la base de datos

        if ($conexion->affected_rows >= 1) {
            //si todo va bien saluda al usuario
            echo "<script type='text/javascript'>
        			alert('Has introducido $descripcion');
        			window.location.href='rutas.view.php';
        			</script>";

            hayConexion();
        } else {
            //sino le dice que lo intente de nuevo
            echo "<script type='text/javascript'>
        			alert('Intentalo de nuevo, por favor');
        			window.location.href='rutas.view.php';
        			</script>";
        }
    }
}


if (isset($_POST['buscarRutas'])) {
    $conexion = new mysqli('localhost', 'root', '', 'gorka');
    //conectamos mi base de datos 'gorka'

    $yaBuscado = true;
    $busqueda = $_POST['provincia'];
    $tipoBusquedaRuta = $_POST['tipoBusquedaRuta'];


    if ($tipoBusquedaRuta == 'PROVINCIA') {

        $buscarRutasSql = "SELECT * from rutas where provincia LIKE '%$busqueda%'";
    } elseif ($tipoBusquedaRuta == 'NIVEL') {

        $buscarRutasSql = "SELECT * from rutas where nivel LIKE '%$busqueda%'";
    } elseif ($tipoBusquedaRuta == 'DISTANCIA') {

        $buscarRutasSql = "SELECT * from rutas where distancia LIKE '$busqueda'";
    } elseif ($tipoBusquedaRuta == 'DESCRIPCION') {

        $buscarRutasSql = "SELECT * from rutas where descripcion LIKE '%$busqueda%'";
    } else {

        if ($busqueda < 300) {
            $buscarRutasSql = "SELECT * from rutas where nivel LIKE '%fácil%'";
        } elseif ($busqueda >= 300 && $busqueda < 600) {
            $buscarRutasSql = "SELECT * from rutas where nivel LIKE '%media%'";
        } elseif ($busqueda > 600) {
            $buscarRutasSql = "SELECT * from rutas where nivel LIKE '%dificil%'";
        }
    }

    $resultado = $conexion->query($buscarRutasSql);

    while ($row = $resultado->fetch_assoc()) {

        array_push($arrayRutas, $row);
    }
}


require 'admin.view.php';
//llamamos al índice en HTML