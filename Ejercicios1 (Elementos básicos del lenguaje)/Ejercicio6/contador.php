<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio6</title>
</head>
<body>        
    <h1>Ejercicio6</h1>
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