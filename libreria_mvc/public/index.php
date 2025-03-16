<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/LibreriaController.php';

$controller = new LibreriaController($pdo);

$request = $_SERVER['REQUEST_URI'];

$cantidadLibros = null;
if (preg_match('/\/index\.php\/(\d+)Libros/', $request, $matches)) {
    $cantidadLibros = (int) $matches[1];
}

$controller->mostrarLibros($cantidadLibros);
