<?php
    include('../models/productos.php');
    session_start();
    $ap = new Productos();
    $action = 'leerP';
    if (isset($_GET['action'])){
        $action = $_GET['action'];
    }
    if ($action=='leerP') {
        $ap->leerP();
    }
    if ($action=='leerC') {
        $ap->leerC();
    }
    if ($action=='leerM') {
        $ap->leerM();
    }
    if ($action=='carrito') {
        $D = json_decode(file_get_contents('php://input'), true);
        $ap->pedido($D);
    }
?>