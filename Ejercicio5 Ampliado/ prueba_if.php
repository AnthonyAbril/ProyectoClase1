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
            case 0:
                echo "La variable es 0";
                break;
            case 1:
                echo "La variable es 1";
                break;
            default:
                echo "La variable es otra cosa";
        }

    ?>
</body>
</html>