<?php
// archivo para recoger el array de pedido y poder llamarlo desde el formulario para pedir los datos al cliente
if(!empty($_POST['pedido'])) {
    //recogemos el array
    $pedido = $_POST['pedido'];
    // redireccionamos a la página del formulario
    require 'datosPedido.php';
}
