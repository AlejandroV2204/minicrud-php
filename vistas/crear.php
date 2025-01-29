<?php include('../includes/conexion.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Tarea</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <?php include('header.php'); ?>

    <h1>Crear Tarea</h1>
    <form action="crear.php" method="POST">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" required>
        <label for="description">Descripción:</label>
        <textarea id="description" name="description" required></textarea>
        <button type="submit">Crear</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $description = $_POST['description'];

        $sql = "INSERT INTO task (title, description) VALUES ('$title', '$description')";

        if ($conn->query($sql) === TRUE) {
            echo "Nueva tarea creada exitosamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

</body>
</html>
