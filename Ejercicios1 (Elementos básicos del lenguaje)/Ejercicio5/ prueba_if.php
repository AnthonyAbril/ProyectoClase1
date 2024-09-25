<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>        
    <h1>Ejercicio5</h1>
    <?php
        $nota1 = 4;
        $nota2 = 4;
        $nota3 = 3;

        $nmayor = $nota1;

        if($nota1!=null && $nota2!=null && $nota3!=null){
            if ($nmayor < $nota2) {
                $nmayor = $nota2;    
            }
            if ($nmayor < $nota3) {
                $nmayor = $nota3;    
            }
    
            echo $nmayor; 
        }else{
            echo "Faltan numeros";
        }
    ?>
</body>
</html>