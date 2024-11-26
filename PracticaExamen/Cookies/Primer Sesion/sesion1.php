<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
        session_start(); // carga la sesión
        session_id() // devuelve el id
        $_SESSION[clave] = valor; // inserción
        session_destroy(); // destruye la sesión
        unset($_SESSION[clave]); // borrado
        */

        session_start(); // inicializamos
        $_SESSION["ies"] = "IES Severo Ochoa"; // asignación
        $instituto = $_SESSION["ies"]; // recuperación
        echo "Estamos en el $instituto ";
        ?>
        <br />
        <a href="sesion2.php">Y luego</a>
    ?>
</body>
</html>