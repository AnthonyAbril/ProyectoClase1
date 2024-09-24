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

        function cuenta($primero, $segundo){
            $a=$primero;
            while($a!=$segundo){
                
                echo $a,",";
                ($primero>$segundo) ? $a-- : $a++;
            }
            echo $a;
        }

        function cuenta2($primero, $segundo, $salto=1){
            ($salto==0) ? $salto++:$salto=$salto;
            $a=$primero;
            while($a!=$segundo){
                
                echo $a,",";
                ($primero>$segundo) ? $a-- : $a++;
            }
            echo $a;
        }

        cuenta(10, 20);
    ?>
</body>
</html>