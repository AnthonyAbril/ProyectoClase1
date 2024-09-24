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
        function cuenta($primero, $segundo, $salto=1){
            ($salto==0) ? $salto++:$salto=$salto;
            if($primero>$segundo){
                for($a=$primero;$a>=$segundo;$a-=$salto){
                    if($a!=$primero){
                        echo ",";
                    }
                    echo $a;
                }
            }else{
                for($a=$primero;$a<=$segundo;$a+=$salto){
                    if($a!=$primero){
                        echo ",";
                    }
                    echo $a;
                }
            }
        }

        cuenta(10, 20, 0);
    ?>
</body>
</html>