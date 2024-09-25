<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>        
    <h1>Ejercicio4</h1>
    <?php
        $nota1 = 8;
        $nota2 = 5;

        if($nota1!=null && $nota2!=null){
            if ($nota1 < $nota2) {
                echo $nota2;    
            }else {
                echo $nota1;    
            }
        }else{
            echo "Faltan numeros";
        }

    ?>
</body>
</html>