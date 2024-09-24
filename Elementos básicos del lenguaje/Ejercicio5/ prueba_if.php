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

        if ($nota1 < $nota2 && $nota3 < $nota2) {
            echo $nota2;    
        }elseif ($nota2 < $nota1 && $nota3 < $nota1) {
            echo $nota1;    
        }else {
            echo $nota3; 
        }

    ?>
</body>
</html>