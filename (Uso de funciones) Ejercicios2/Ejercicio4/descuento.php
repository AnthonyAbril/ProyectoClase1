<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>
    <?php
        include "../funciones.inc";

        echo 'El precio es 250 con un 10% de descuento = ',calculaDescuento(250,10);
        echo '</br>';
        echo 'El precio es 85 sin descuento = ',calculaDescuento(85);
    ?>
</body>
</html>