<?php
// Prueba de las clases Coche y Motocicleta

// Incluir archivos necesarios
require_once '../clases/Coche.php';
require_once '../clases/Motocicleta.php';

// Crear objetos
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
