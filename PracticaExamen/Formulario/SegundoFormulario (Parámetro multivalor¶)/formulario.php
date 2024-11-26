<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar formulario</title>
</head>
<body>
    <?php
    /*Forma basica
    $lenguajes = $_GET["lenguajes"]; //guarda el array

    //recorre el array guardado
    foreach ($lenguajes as $lenguaje) {
        echo "$lenguaje <br />";
    }
    */

    

    // Verificar si se ha enviado el formulario (los datos se procesen solo si se envió el formulario)
    if (isset($_GET['enviar'])) {

        // Obtener los lenguajes seleccionados
        $lenguajes = isset($_GET['lenguajes']) ? $_GET['lenguajes'] : [];

        echo "<h1>Datos recibidos:</h1>";

        if (!empty($lenguajes)) {
            echo "<p>Lenguajes seleccionados:</p>";
            echo "<ul>";
            foreach ($lenguajes as $lenguajes) {
                echo "<li>" . htmlspecialchars($lenguajes) . "</li>";//htmlspecialchars
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
