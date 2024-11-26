<?php
// Ejemplo 2: Codificar un objeto a JSON
class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}

$persona = new Persona("Juan", 30);
$json = json_encode($persona);
echo $json;  // {"nombre":"Juan","edad":30}

?>