<?php
// Clase base VehiculoBase que implementa la interfaz Vehiculo
require_once '../interfaces/VehiculoInterface.php';

abstract class VehiculoBase implements VehiculoInterface {
    protected $marca;
    protected $modelo;
    protected $velocidadMaxima;
    protected $velocidadActual;

    public static $cantidadVehiculos = 0;

    public function __construct($marca, $modelo, $velocidadMaxima) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidadMaxima = $velocidadMaxima;
        $this->velocidadActual = 0;
        self::$cantidadVehiculos++;
    }

    public function acelerar() {
        $this->velocidadActual += 10;
        if ($this->velocidadActual > $this->velocidadMaxima) {
            $this->velocidadActual = $this->velocidadMaxima;
        }
        echo "Acelerando. Velocidad actual: " . $this->velocidadActual . " km/h\n";
    }

    public function frenar() {
        $this->velocidadActual -= 10;
        if ($this->velocidadActual < 0) {
            $this->velocidadActual = 0;
        }
        echo "Frenando. Velocidad actual: " . $this->velocidadActual . " km/h\n";
    }

    public function obtenerVelocidadMaxima() {
        return $this->velocidadMaxima;
    }

    public static function obtenerCantidadVehiculos() {
        return self::$cantidadVehiculos;
    }

    abstract public function obtenerTipoVehiculo();
}
?>
