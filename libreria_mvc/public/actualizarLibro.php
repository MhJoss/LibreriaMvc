<?php
require_once '../config/database.php';
require_once '../app/models/Libro.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];

    $libro = new Libro($pdo);
    $libro->actualizarLibro($id, $titulo, $autor, $editorial);

    header("Location: index.php");
    exit;
}
?>
