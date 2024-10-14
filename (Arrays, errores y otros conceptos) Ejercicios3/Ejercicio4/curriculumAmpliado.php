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
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    

    $idioma = "es";

    // Si el parámetro 'lang' está en la URL, cámbialo
    if (isset($_GET['lang'])) {
        $idioma = $_GET['lang'];
        $url = str_replace("?lang=es", "", $url);
        $url = str_replace("?lang=en", "", $url);
    }

    //remplazar str_replace(vieja, nueva, cadena);
    
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

    echo '<a href="' . $url . '?lang=es">Español</a> | <a href="' . $url . '?lang=en">English</a>';
    ?>
</body>
</html>