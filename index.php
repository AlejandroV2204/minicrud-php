<?php 
include('includes/conexion.php');
include('includes/config.php'); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Proyecto CRUD</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/estilos.css">
</head>
<body>
    <?php include('vistas/header.php'); ?>

    <h1>Lista de Tareas</h1>
    <a href="<?php echo BASE_URL; ?>vistas/crear.php">Crear Nueva Tarea</a>
    <div class="task-list">
        <?php
        $sql = "SELECT id, title, description, created_at FROM task";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='task'>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["description"] . "</p>";
                echo "<small>Creada el: " . $row["created_at"] . "</small>";
                echo "<a href='" . BASE_URL . "vistas/actualizar.php?id=" . $row["id"] . "'>Actualizar</a> ";
                echo "<a href='" . BASE_URL . "vistas/eliminar.php?id=" . $row["id"] . "'>Eliminar</a>";
                echo "</div>";
            }
        } else {
            echo "No se encontraron tareas.";
        }
        ?>
    </div>

</body>
</html>
