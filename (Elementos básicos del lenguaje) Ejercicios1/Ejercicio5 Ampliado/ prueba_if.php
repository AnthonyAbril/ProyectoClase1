<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5 Ampliado</title>
</head>
<body>        
    <h1>Ejercicio5 Ampliado</h1>
    <?php
        $nota1 = 3;
        $nota2 = 5;
        $nota3 = 7;
        $nmayor = $nota1;

        if($nota1!=null && $nota2!=null && $nota3!=null){
            if ($nmayor < $nota2) {
                $nmayor = $nota2;    
            }
            if ($nmayor < $nota3) {
                $nmayor = $nota3;    
            }
    
            echo $nmayor; 

            switch ($nmayor)
            {
                case 0;
                case 1;
                case 2;
                case 3;
                case 4:
                    echo "<br>INSUFICIENTE</br>";
                    break;
                case 5:
                    echo "<br>SUFICIENTE</br>";
                    break;
                case 6:
                    echo "<br>BIEN</br>";
                    break;
                case 7:
                case 8:
                    echo "<br>NOTABLE</br>";
                    break;
                default:
                    echo "SOBRESALIENTE ";
            }

        }else{
            echo "Faltan numeros";
        }

    ?>
</body>
</html>