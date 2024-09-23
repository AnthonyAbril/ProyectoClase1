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
        $nota1 = 3;
        $nota2 = 5;
        $nota3 = 7;
        $nmayor = 0;

        if ($nota1 < $nota2 && $nota3 < $nota2) {
            $nmayor = $nota2;    
        }elseif ($nota2 < $nota1 && $nota3 < $nota1) {
            $nmayor = $nota1;    
        }else {
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

    ?>
</body>
</html>