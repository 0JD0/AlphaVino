<?php
    include('../models/usuarios.php');
    $ap = new Usuarios();
    session_start();
    $action = 'leerP';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }
    if ($action=='ingresar') {
        $ap->ingresar($_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['correo'],$_POST['contra'],$_POST['fecha']);
    }
    if ($action=='login') {
        $ap->login($_POST['correo'],$_POST['contra']);
    }
    if ($action=='cambiar') {
        if (isset($_GET['sicontra'])) {
            $ap->cambiar($_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['correo'],$_POST['contra'],$_POST['fecha']);
        }
        else {
            $ap->cambiar($_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['correo'],'',$_POST['fecha']);
        }
    }
    if ($action=='contra') {
        $ap->login($_POST['correo']);
    }
    if ($action == 'logout') {
        $_SESSION['idcliente'] = null;
    }
    if ($action == 'verify') {
        if (isset($_SESSION['idcliente'])) {
            $ap->leerSession();
        }
    }
    
?>