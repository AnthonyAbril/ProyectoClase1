<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Definir el array bidimensional mixto
$coches = array(
    "111BCD" => array("Ford", "Focus", 5),
    "222ABC" => array("Toyota", "Corolla", 4),
    "333XYZ" => array("Honda", "Civic", 4),
    "444JKL" => array("Chevrolet", "Malibu", 4)
);

// Aqui ordenams los coches por matrícula
ksort($coches);

// Recorremos el array y mostrar los datos de cada coche
foreach ($coches as $matricula => $datos) {
    echo '<p>' . "Matrícula: $matricula\n" . '</p>';
    echo '<p>' . "Marca: " . $datos[0] . "\n" . '</p>';
    echo '<p>' . "Modelo: " . $datos[1] . "\n" . '</p>';
    echo '<p>' . "Número de puertas: " . $datos[2] . "\n" . '</p>';
    echo '<p>' . "-----------------------------\n" . '</p>';
}
?>

</body>
</html>