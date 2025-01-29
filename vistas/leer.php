<?php include('../includes/conexion.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Leer Tareas</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <?php include('header.php'); ?>

    <h1>Lista de Tareas</h1>
    <?php
    $sql = "SELECT id, title, description, created_at FROM task";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Título: " . $row["title"]. " - Descripción: " . $row["description"]. " - Creada el: " . $row["created_at"]. "<br>";
        }
    } else {
        echo "No se encontraron tareas.";
    }
    ?>

</body>
</html>
