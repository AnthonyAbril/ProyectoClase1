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
        
        function intercambia($primero, $segundo){
            echo "<p>Del ",$primero," al ",$segundo,"</p>";
            $creciente = ($primero>$segundo);
            
            $a=$primero;

            echo $primero;
            while($creciente ? $a>$segundo : $a<$segundo){
                
                $creciente ? $a-- : $a++;
                if($creciente ? $a>$segundo : $a<$segundo){
                    echo ",",$a;
                }
            }
            echo ",",$segundo;
        }

        intercambia(10, 20);
    ?>
</body>
</html>