<?php
class Libro {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function obtenerLibros() {
        $stmt = $this->pdo->query("SELECT * FROM libros");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerLibrosLimitados($cantidad) {
        $stmt = $this->pdo->prepare("SELECT * FROM libros LIMIT ?");
        $stmt->bindValue(1, (int)$cantidad, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertarLibro($titulo, $autor, $editorial) {
        $stmt = $this->pdo->prepare("INSERT INTO libros (titulo, autor, editorial) VALUES (?, ?, ?)");
        return $stmt->execute([$titulo, $autor, $editorial]);
    }

    public function actualizarLibro($id, $titulo, $autor, $editorial) {
        $stmt = $this->pdo->prepare("UPDATE libros SET titulo = ?, autor = ?, editorial = ? WHERE id = ?");
        return $stmt->execute([$titulo, $autor, $editorial, $id]);
    }

    public function eliminarLibro($id) {
        $stmt = $this->pdo->prepare("DELETE FROM libros WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function obtenerLibroPorId($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM libros WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
