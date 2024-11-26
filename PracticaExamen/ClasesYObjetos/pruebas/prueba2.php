<?php
// Definición de la interfaz
interface Vehiculo {
    public function acelerar();
    public function frenar();
    public function obtenerVelocidadMaxima();
}

// Clase padre
abstract class VehiculoBase implements Vehiculo {
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

    // Métodos de la interfaz
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

    // Método que se puede sobrecargar en las clases hijas
    public function obtenerVelocidadMaxima() {
        return $this->velocidadMaxima;
    }

    // Método estático
    public static function obtenerCantidadVehiculos() {
        return self::$cantidadVehiculos;
    }

    abstract public function obtenerTipoVehiculo();
}

// Clase hija 1: Coche
class Coche extends VehiculoBase {
    private $puertas;

    public function __construct($marca, $modelo, $velocidadMaxima, $puertas) {
        parent::__construct($marca, $modelo, $velocidadMaxima);
        $this->puertas = $puertas;
    }

    public function obtenerTipoVehiculo() {
        return "Coche: {$this->marca} {$this->modelo} con {$this->puertas} puertas.";
    }

    // Sobrescritura de método
    public function acelerar() {
        $this->velocidadActual += 20; // Aceleración más rápida para el coche
        if ($this->velocidadActual > $this->velocidadMaxima) {
            $this->velocidadActual = $this->velocidadMaxima;
        }
        echo "Coche acelerando. Velocidad actual: " . $this->velocidadActual . " km/h\n";
    }
}

// Clase hija 2: Motocicleta
class Motocicleta extends VehiculoBase {
    private $cilindraje;

    public function __construct($marca, $modelo, $velocidadMaxima, $cilindraje) {
        parent::__construct($marca, $modelo, $velocidadMaxima);
        $this->cilindraje = $cilindraje;
    }

    public function obtenerTipoVehiculo() {
        return "Motocicleta: {$this->marca} {$this->modelo} con cilindraje de {$this->cilindraje} cc.";
    }

    // Sobrescritura de método
    public function frenar() {
        $this->velocidadActual -= 5; // Frenado más suave para la motocicleta
        if ($this->velocidadActual < 0) {
            $this->velocidadActual = 0;
        }
        echo "Motocicleta frenando. Velocidad actual: " . $this->velocidadActual . " km/h\n";
    }
}

// Uso de las clases

// Creando objetos de cada clase hija
$coche = new Coche("Toyota", "Corolla", 200, 4);
$motocicleta = new Motocicleta("Honda", "CBR", 180, 600);

// Interacción con los objetos
echo $coche->obtenerTipoVehiculo() . "\n";
$coche->acelerar();
$coche->frenar();

echo $motocicleta->obtenerTipoVehiculo() . "\n";
$motocicleta->acelerar();
$motocicleta->frenar();

// Uso de métodos estáticos
echo "Cantidad de vehículos creados: " . VehiculoBase::obtenerCantidadVehiculos() . "\n";

?>
