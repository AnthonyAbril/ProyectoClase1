<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (!empty($_POST['modulos']) && !empty($_POST['nombre'])) {
            // Aquí se incluye el código a ejecutar cuando los datos son correctos
            
            $nombre = $_POST['nombre'] ?? ""; //Busca si el índice 'nombre' existe en el array $_POST.
            $modulos = $_POST['modulos'] ?? []; //Busca si el índice 'modulos' existe en el array $_POST.

            echo "<h1>Datos recibidos:</h1>";
            echo "<p>Nombre del alumno: $nombre</p>";

            echo "<p>Módulos seleccionados:</p>";
            echo "<ul>";
            foreach ($modulos as $modulo) {
                echo "<li>" . htmlspecialchars($modulo) . "</li>";
            }
            echo "</ul>";

        } else {
            // Generamos el formulario
            $nombre = $_POST['nombre'] ?? ""; //Busca si el índice 'nombre' existe en el array $_POST.
            $modulos = $_POST['modulos'] ?? []; //Busca si el índice 'modulos' existe en el array $_POST.
    ?>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <p><label for="nombre">Nombre del alumno:</label>
            <input type="text" name="nombre" id="nombre" value="<?= $nombre ?>" /> 
        </p>
        <p><input type="checkbox" name="modulos[]" id="modulosDWES" value="DWES"
            <?php if(in_array("DWES",$modulos)) echo 'checked="checked"'; ?> />
            <label for="modulosDWES">Desarrollo web en entorno servidor</label>
        </p>
        <p><input type="checkbox" name="modulos[]" id="modulosDWEC" value="DWEC"
            <?php if(in_array("DWEC",$modulos)) echo 'checked="checked"'; ?> />
            <label for="modulosDWEC">Desarrollo web en entorno cliente</label>
        </p>
        <input type="submit" value="Enviar" name="enviar"/>
        </form>
    <?php 
    } 
    ?>
</body>
</html>