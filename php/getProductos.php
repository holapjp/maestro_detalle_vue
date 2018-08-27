<?php 
    require_once("class.php");
    $c = new Conexion;
    echo json_encode($c->getProductos());
?>