<?php
require_once __DIR__ . '/../models/Libro.php';

class LibreriaController {
    private $libro;

    public function __construct($pdo) {
        $this->libro = new Libro($pdo);
    }

    public function mostrarLibros($cantidad = null) {
        if ($cantidad) {
            $libros = $this->libro->obtenerLibrosLimitados($cantidad);
        } else {
            $libros = $this->libro->obtenerLibros();
        }

        require_once __DIR__ . '/../views/libros.php';
    }
}
