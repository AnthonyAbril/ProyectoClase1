<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página de prueba en PHP</h1>
    <?php
        include "../funciones.inc";
        $n1=3;
        $n2=5;

        echo " n1 = ", $n1;
        echo " n2 = ", $n2;
        echo '</br>';

        

        intercambia($n1, $n2);

        echo "  n1 = ", $n1;
        echo " n2 = ", $n2;
    ?>
</body>
</html>