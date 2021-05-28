<?php

include 'funciones.php';
$errores = '';
$enviado = true;
$erroresAdmin = '';
$enviadoAdmin = true;
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


    if (!empty($id_product)) {
        $id_product = filter_var($id_product, FILTER_SANITIZE_NUMBER_INT);
        //comprobamos que es un id_product válido y que lo ha enviado

        if (!filter_var($id_product, FILTER_VALIDATE_INT)) {
            $erroresAdmin .= 'un id válido, ';
            $enviadoAdmin = false;
        }
    } else {
        $erroresAdmin .= 'un id, ';
        $enviadoAdmin = false;
    }


    if (!empty($title)) {
        $title = filter_var($title, FILTER_SANITIZE_STRING);
        //comprobamos que es un título válido y que lo ha enviado

    } else {
        $erroresAdmin .= 'un título, ';
        $enviadoAdmin = false;
    }


    if (!empty($price)) {
        $price = filter_var($price, FILTER_SANITIZE_NUMBER_INT);
        //comprobamos que es un precio válido y que lo ha enviado

        if (!filter_var($price, FILTER_VALIDATE_INT)) {
            $erroresAdmin .= 'un precio válido, ';
            $enviadoAdmin = false;
        }
    } else {
        $erroresAdmin .= 'un precio, ';
        $enviadoAdmin = false;
    }


    if (!empty($img_url)) {
        $img_url = filter_var($img_url, FILTER_SANITIZE_STRING);
        //comprobamos que es una URL válido y que lo ha enviado

    } else {
        $erroresAdmin .= 'una url, ';
        $enviadoAdmin = false;
    }


    if (!empty($alt)) {
        $alt = filter_var($alt, FILTER_SANITIZE_STRING);
        //comprobamos que es una descripción válida y que lo ha enviado

    } else {
        $erroresAdmin .= 'una descripción, ';
        $enviadoAdmin = false;
    }


    if ($enviadoAdmin == false) {
        //lanzamos los errores que hayan podido ocurrir
        echo "<script type='text/javascript'>
				   alert('Por favor, indroduzca $erroresAdmin');
				   window.location.href='admin.php';
				   </script>";
    } else {
        //Todo OK, continuamos


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