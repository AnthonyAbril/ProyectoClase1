<?php
// Clase Coche que extiende de VehiculoBase
require_once 'VehiculoBase.php';

class Coche extends VehiculoBase {
    private $puertas;

    public function __construct($marca, $modelo, $velocidadMaxima, $puertas) {
        parent::__construct($marca, $modelo, $velocidadMaxima);
        $this->puertas = $puertas;
    }

    public function obtenerTipoVehiculo() {
        return "Coche: {$this->marca} {$this->modelo} con {$this->puertas} puertas.";
    }

    // Sobrescritura del método acelerar
    public function acelerar() {
        $this->velocidadActual += 20;
        if ($this->velocidadActual > $this->velocidadMaxima) {
            $this->velocidadActual = $this->velocidadMaxima;
        }
        echo "Coche acelerando. Velocidad actual: " . $this->velocidadActual . " km/h\n";
    }
}
?>
