<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tablas = [];

        for ($i=0; $i < 10 ; $i++) {
            $tabla = [];
            for ($num=0; $num <= 10; $num++) { 
                $tabla[$num] = ($i*$num);
            }
            $tablas[$i] = $tabla;
        }

        
        for ($tabla=0; $tabla < 10; $tabla++) { 
            echo '<p>' . "Tabla del $tabla" . '</p>';
            for ($num=0; $num < count($tablas[$tabla]); $num++) { 
                echo '<p>' . $tabla  . ' x ' .  $num . ' = ' . $tablas[$tabla][$num] . '</p>';
            }
        }
            
    ?>    
</body>
</html>

