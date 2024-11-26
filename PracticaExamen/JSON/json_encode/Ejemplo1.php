<?php
// Ejemplo 1: Codificar un array a JSON
$array = array("nombre" => "Juan", "edad" => 30);
$json = json_encode($array);
echo $json;  // {"nombre":"Juan","edad":30}
?>