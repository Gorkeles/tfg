<?php

include 'funciones.php';
$errores = '';
$enviado = true;

$yaBuscado = false;
$arrayProducts = array();

// Comprobamos que el formulario haya sido enviado con las variables que hayamos puesto en index.view, deben llamarse igual!
if (isset($_POST['rutas'])) {
    $conexion = new mysqli('localhost', 'root', '', 'tfg');
    //conectamos mi base de datos 'tfg'

    $provincia = $_POST['provincia'];
    $nivel = $_POST['nivel'];
    $distancia = $_POST['distancia'];
    $descripcion = $_POST['descripcion'];


    $conexion = new mysqli('localhost', 'root', '', 'tfg');
    //conectamos mi base de datos 'tfg'


    if ($conexion->connect_errno) {
        die('Lo siento, hubo un problema con el servidor');
    } else {

        // Antes de insertar, hacemos una query para ver si existe email
        $existeProductoSql = 'SELECT * from rutas where descripcion=\'' . $descripcion . '\'';


        $conexion->query($existeProductoSql);
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
    $conexion = new mysqli('localhost', 'root', '', 'tfg');
    //conectamos mi base de datos 'tfg'

    $yaBuscado = true;
    $busqueda = $_POST['provincia'];
    $tipoBusquedaRuta = $_POST['tipoBusquedaRuta'];


    if ($tipoBusquedaRuta == 'PROVINCIA') {

        $buscarProductosSql = "SELECT * from rutas where provincia LIKE '%$busqueda%'";
    } elseif ($tipoBusquedaRuta == 'NIVEL') {

        $buscarProductosSql = "SELECT * from rutas where nivel LIKE '%$busqueda%'";
    } elseif ($tipoBusquedaRuta == 'DISTANCIA') {

        $buscarProductosSql = "SELECT * from rutas where distancia LIKE '$busqueda'";
    } elseif ($tipoBusquedaRuta == 'DESCRIPCION') {

        $buscarProductosSql = "SELECT * from rutas where descripcion LIKE '%$busqueda%'";
    } else {

        if ($busqueda < 300) {
            $buscarProductosSql = "SELECT * from rutas where nivel LIKE '%fácil%'";
        } elseif ($busqueda >= 300 && $busqueda < 600) {
            $buscarProductosSql = "SELECT * from rutas where nivel LIKE '%media%'";
        } elseif ($busqueda > 600) {
            $buscarProductosSql = "SELECT * from rutas where nivel LIKE '%dificil%'";
        }
    }

    $resultado = $conexion->query($buscarProductosSql);

    while ($row = $resultado->fetch_assoc()) {

        array_push($arrayProducts, $row);
    }
}


require 'tienda.view.php';
//llamamos al índice en HTML