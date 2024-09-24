<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio1</title>
    </head>
    <body>
        <h1>Página de prueba en PHP</h1>
        <?php
            $radio = 3.5;
            const Pi = 3.1416;
            $areaPi = (Pi*( pow(($radio), 2)) );
        ?>
        <p>"El área del círculo es <?php echo $areaPi; ?>.</p>
    </body>
</html>