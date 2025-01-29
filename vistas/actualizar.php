<?php include('../includes/conexion.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Tarea</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <?php include('header.php'); ?>

    <h1>Actualizar Tarea</h1>
    <form action="actualizar.php" method="POST">
        <label for="id">ID de la Tarea:</label>
        <input type="number" id="id" name="id" required>
        <label for="title">Nuevo Título:</label>
        <input type="text" id="title" name="title" required>
        <label for="description">Nueva Descripción:</label>
        <textarea id="description" name="description" required></textarea>
        <button type="submit">Actualizar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $sql = "UPDATE task SET title='$title', description='$description' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Tarea actualizada exitosamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

</body>
</html>
