<?php include('../includes/conexion.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Tarea</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <?php include('header.php'); ?>

    <h1>Eliminar Tarea</h1>
    <form action="eliminar.php" method="POST">
        <label for="id">ID de la Tarea:</label>
        <input type="number" id="id" name="id" required>
        <button type="submit">Eliminar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];

        $sql = "DELETE FROM task WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Tarea eliminada exitosamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

</body>
</html>
