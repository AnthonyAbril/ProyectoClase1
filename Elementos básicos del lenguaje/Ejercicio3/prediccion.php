<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>        
    <h1>Ejercicio3</h1>
    <?php
        $num1 = 3;
        $num2 = 5;
        $num3 = 8;
        $num1 *= 4;
        echo $num1; // 12
        echo $num1 <= $num2; // num1 (12) no es menor o igual que num2 (5), imprime vacío (false)
        echo $num3 > $num1 and $num3 > $num2; // El primer comparador es falso, por lo tanto, imprime vacío (false)
        echo $num3 > $num1 or $num3 > $num2; // Como es un 'or', con uno verdadero es suficiente, imprime 1 (true)
        echo $num1 > $num2 xor $num1 > $num3; // Con 'xor', si ambos son verdaderos, imprime vacío (false)
        $num3--;
        echo $num3; //7
        $num3 += $num1;                 
        echo $num3; //19
    ?>
</body>
</html>