<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Editar Libro</h1>

    <form action="actualizarLibro.php" method="POST">
        <input type="hidden" name="id" value="<?= $datosLibro['id'] ?>">
        <input type="text" name="titulo" value="<?= htmlspecialchars($datosLibro['titulo']) ?>" required>
        <input type="text" name="autor" value="<?= htmlspecialchars($datosLibro['autor']) ?>" required>
        <input type="text" name="editorial" value="<?= htmlspecialchars($datosLibro['editorial']) ?>" required>
        <button type="submit">💾 Guardar Cambios</button>
    </form>

    <a href="index.php">⬅️ Volver</a>
</body>
</html>
