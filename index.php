<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\TiendaController;

$controller = new TiendaController();

// Recuperar datos de la sesión
if (isset($_SESSION['productos'])) {
    foreach ($_SESSION['productos'] as $p) {
        $controller->agregarProducto($p['nombre'], $p['precio']);
    }
}

if (isset($_SESSION['clientes'])) {
    foreach ($_SESSION['clientes'] as $c) {
        $controller->agregarCliente($c['nombre'], $c['email']);
    }
}

// Procesar formulario de productos
if (isset($_POST['agregar_producto'])) {
    $_SESSION['productos'][] = [
        'nombre' => $_POST['nombre'],
        'precio' => (float)$_POST['precio']
    ];
    $controller->agregarProducto($_POST['nombre'], (float)$_POST['precio']);
}

// Procesar formulario de clientes
if (isset($_POST['agregar_cliente'])) {
    $_SESSION['clientes'][] = [
        'nombre' => $_POST['nombre'],
        'email'  => $_POST['email']
    ];
    $controller->agregarCliente($_POST['nombre'], $_POST['email']);
}

require_once __DIR__ . '/vista.php';