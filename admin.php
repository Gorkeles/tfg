<?php

include 'funciones.php';
$errores = '';
$enviado = true;

$yaBuscado = false;
$arrayProducts = array();

// Comprobamos que el formulario haya sido enviado con las variables que hayamos puesto en index.view, deben llamarse igual!
if (isset($_POST['introducir'])) {
    $conexion = new mysqli('localhost', 'root', '', 'tfg');
    //conectamos mi base de datos 'tfg'

    $id_product = $_POST['id_product'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $img_url = $_POST['img_url'];
    $alt = $_POST['alt'];


    $conexion = new mysqli('localhost', 'root', '', 'tfg');
    //conectamos mi base de datos 'tfg'


    if ($conexion->connect_errno) {
        die('Lo siento, hubo un problema con el servidor');
    } else {

        // Antes de insertar, hacemos una query para ver si existe producto
        $existeProductoSql = 'SELECT * from products where id_product=\'' . $id_product . '\'';


        $conexion->query($existeProductoSql);
        if ($conexion->affected_rows >= 1) {
            echo "<script type='text/javascript'>
		alert('Ya has introducido ese producto');
		window.location.href='admin.view.php';
		</script>";
            return;
        }



        $sql = "INSERT INTO products (id_product,title,price,img_url,alt) VALUES ('$id_product','$title','$price','$img_url','$alt')";

        $conexion->query($sql);
        //Hacemos un query a la base de datos

        if ($conexion->affected_rows >= 1) {
            //si todo va bien saluda al usuario
            echo "<script type='text/javascript'>
        			alert('Has introducido $title');
        			window.location.href='admin.view.php';
        			</script>";

            hayConexion();
        } else {
            //sino le dice que lo intente de nuevo
            echo "<script type='text/javascript'>
        			alert('Intentalo de nuevo, por favor');
        			window.location.href='admin.view.php';
        			</script>";
        }
    }
}


if (isset($_POST['buscarProductos'])) {
    $conexion = new mysqli('localhost', 'root', '', 'tfg');
    //conectamos mi base de datos 'tfg'

    $yaBuscado = true;
    $busqueda = $_POST['id_product'];
    $tipoBusquedaProducto = $_POST['tipoBusquedaProducto'];


    if ($tipoBusquedaProducto == 'id_product') {

        $buscarProductosSql = "SELECT * from products where id_product LIKE '%$busqueda%'";
    } elseif ($tipoBusquedaProducto == 'title') {

        $buscarProductosSql = "SELECT * from products where title LIKE '%$busqueda%'";
    } elseif ($tipoBusquedaProducto == 'price') {

        $buscarProductosSql = "SELECT * from products where price LIKE '$busqueda'";
    } elseif ($tipoBusquedaProducto == 'img_url') {

        $buscarProductosSql = "SELECT * from products where img_url LIKE '%$busqueda%'";
    } elseif ($tipoBusquedaProducto == 'alt') {

        $buscarProductosSql = "SELECT * from products where alt LIKE '%$busqueda%'";
    }

    $resultado = $conexion->query($buscarProductosSql);

    while ($row = $resultado->fetch_assoc()) {

        array_push($arrayProducts, $row);
    }
}

if (isset($_POST['borrar'])) {
    $conexion = new mysqli('localhost', 'root', '', 'tfg');
    //conectamos mi base de datos 'tfg'
    $borrar = $_POST['borrar'];

    if ($conexion->connect_errno) {
        die('Lo siento, hubo un problema con el servidor');
    } else {
        $deleteSql = "DELETE from products where id_product='$borrar'";
        $conexion->query($deleteSql);
    }
}


require 'admin.view.php';
//llamamos al índice en HTML