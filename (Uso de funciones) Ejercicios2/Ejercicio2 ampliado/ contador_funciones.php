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
            echo "<p>Del ",$primero," al ",$segundo,"</p>";
            $creciente = ($primero>$segundo);
            ($salto==0) ? $salto++:$salto=$salto;
            
            $a=$primero;

            echo $primero;
            while($creciente ? $a>$segundo : $a<$segundo){
                
                $creciente ? $a-=$salto : $a+=$salto;
                if($creciente ? $a>$segundo : $a<$segundo){
                    echo ",",$a;
                }
            }
            echo ",",$segundo;
        }

        cuenta(10, 20, 4);
    ?>
</body>
</html>