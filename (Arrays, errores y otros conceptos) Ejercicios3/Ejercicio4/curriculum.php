<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
</head>
<body>
    <h1>Nombre: Anthony-Isaac Abril Rueda</h1>
    <?php
    
    $idioma = "es";
    
    $estudios = "estudios_" . $idioma;
    $estudios_es = "<ul>
    <li>Titulo de Bachiller</li>
    <li>Titulo elemental en Musica y Teoria</li>
    </ul>";
    $estudios_en = "<ul>
    <li>Bachelor's Degree</li>
    <li>Elementary degree in Music and Theory</li>
    </ul>";

    echo "<h2>Estudios</h2>" . $$estudios;

    $idiomas = "idiomas_" . $idioma;
    $idiomas_es = "<ul>
    <li>Ingles: Medio</li>
    <li>Español: Nativo</li>
    </ul>";
    $idiomas_en = "<ul>
    <li>English: Medium</li>
    <li>Español: Native</li>
    </ul>";  
    echo "<h2>Idiomas</h2>" . $$idiomas;

    ?>
</body>
</html>