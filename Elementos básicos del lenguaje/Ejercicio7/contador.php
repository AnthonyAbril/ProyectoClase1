<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>        
    <h1>Este contador va del 1 al 100:</h1>
    <?php
        for ($i=1; $i <= 100; $i++) { 
            echo $i;
            if ($i!=100) {
                echo ",";
            }
        }
    ?>
    <br><p>Este otro va del 10 al 0:</p>
    <?php
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