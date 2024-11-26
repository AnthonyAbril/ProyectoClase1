<?php
    // Ejemplo 1: Decodificar JSON a array
    $json = '{"nombre":"Juan","edad":30}';
    $array = json_decode($json, true);
    print_r($array);  // Array ( [nombre] => Juan [edad] => 30 )

?>