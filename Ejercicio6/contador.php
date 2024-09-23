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
        for ($i=1; $i <= 100; $i++) { 
            echo $i;
            if ($i!=100) {
                echo ",";
            }
        }
        echo "<br>";
        $i=10;
        while($i>=0){
            echo $i;
            if ($i!=0) {
                echo "-";
            }
            $i--;
        }
    ?>
</body>
</html>