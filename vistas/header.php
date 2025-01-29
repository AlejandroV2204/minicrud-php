<?php include('../includes/config.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto CRUD</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/estilos.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo BASE_URL; ?>index.php">Inicio</a></li>
                <li><a href="<?php echo BASE_URL; ?>vistas/crear.php">Crear</a></li>
                <li><a href="<?php echo BASE_URL; ?>vistas/leer.php">Leer</a></li>
                <li><a href="<?php echo BASE_URL; ?>vistas/actualizar.php">Actualizar</a></li>
                <li><a href="<?php echo BASE_URL; ?>vistas/eliminar.php">Eliminar</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
