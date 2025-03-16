<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Librería</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $libro): ?>
                <tr>
                    <td><?= htmlspecialchars($libro['id']) ?></td>
                    <td><?= htmlspecialchars($libro['titulo']) ?></td>
                    <td><?= htmlspecialchars($libro['autor']) ?></td>
                    <td><?= htmlspecialchars($libro['editorial']) ?></td>
                    <td>
                        <a href="editarLibro.php?id=<?= $libro['id'] ?>">✏️ Editar</a>
                        <a href="eliminarLibro.php?id=<?= $libro['id'] ?>" onclick="return confirm('¿Eliminar este libro?');">🗑️ Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Agregar Nuevo Libro</h2>
    <form action="agregarLibro.php" method="POST">
        <input type="text" name="titulo" placeholder="Título" required>
        <input type="text" name="autor" placeholder="Autor" required>
        <input type="text" name="editorial" placeholder="Editorial" required>
        <button type="submit">➕ Agregar Libro</button>
    </form>
</body>
</html>
