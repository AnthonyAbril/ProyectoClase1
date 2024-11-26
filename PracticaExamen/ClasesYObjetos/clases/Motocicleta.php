<?php
// Clase Motocicleta que extiende de VehiculoBase
require_once 'VehiculoBase.php';

class Motocicleta extends VehiculoBase {
    private $cilindraje;

    public function __construct($marca, $modelo, $velocidadMaxima, $cilindraje) {
        parent::__construct($marca, $modelo, $velocidadMaxima);
        $this->cilindraje = $cilindraje;
    }

    public function obtenerTipoVehiculo() {
        return "Motocicleta: {$this->marca} {$this->modelo} con cilindraje de {$this->cilindraje} cc.";
    }

    // Sobrescritura del método frenar
    public function frenar() {
        $this->velocidadActual -= 5;
        if ($this->velocidadActual < 0) {
            $this->velocidadActual = 0;
        }
        echo "Motocicleta frenando. Velocidad actual: " . $this->velocidadActual . " km/h\n";
    }
}
?>
