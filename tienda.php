<?php

include 'funciones.php';
echo "HOLA;"
if(isset($_POST['pedido'])) {
    $pedido = $POST['pedido'];
    require 'datosPedido.php';
    die();
}


require 'tienda.view.php';
//llamamos al índice en HTML