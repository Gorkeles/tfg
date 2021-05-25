<?php
    $conexion = new mysqli("localhost", "root", "", "tfg");
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }
    else{

        $accion=$_POST["accion"];
        switch($accion)
        {
            case "consultaeli":

                $id_product=$_POST["id_product"];

                header("Location: admin.php"); //pagina desde la que se hace la llamada

                $borrar = "DELETE FROM products where id_product='$id_product'";

                mysqli_query($conexion, $borrar);
                mysqli_close($conexion);
            break;
        }
    }
?>