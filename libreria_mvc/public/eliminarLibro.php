<?php
require_once '../config/database.php';
require_once '../app/models/Libro.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $libro = new Libro($pdo);
    $libro->eliminarLibro($id);
}

header("Location: index.php");
exit;
?>
