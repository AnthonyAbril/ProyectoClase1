<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar formulario</title>
</head>
<body>
    <?php
    // Verificar si se ha enviado el formulario
    if (isset($_GET['enviar'])) {
        // Obtener el nombre del alumno
        $nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : 'Sin nombre';

        // Obtener los módulos seleccionados
        $modulos = isset($_GET['modulos']) ? $_GET['modulos'] : [];

        echo "<h1>Datos recibidos:</h1>";
        echo "<p>Nombre del alumno: $nombre</p>";

        if (!empty($modulos)) {
            echo "<p>Módulos seleccionados:</p>";
            echo "<ul>";
            foreach ($modulos as $modulo) {
                echo "<li>" . htmlspecialchars($modulo) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No se seleccionó ningún módulo.</p>";
        }
    } else {
        echo "<p>No se enviaron datos.</p>";
    }
    ?>
</body>
</html>
