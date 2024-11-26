<?php
    // Ejemplo 2: Decodificar JSON a objeto
    $json = '{"nombre":"Juan","edad":30}';
    $obj = json_decode($json);
    echo $obj->nombre;  // Juan

?>