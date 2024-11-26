<?php
// Ejemplo 3: Codificar con opciones (formato legible)
$array = array("nombre" => "Juan", "edad" => 30);
$json = json_encode($array, JSON_PRETTY_PRINT);
echo $json;

?>