<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function detectaEmail(){
            $fichero1 = "datos.txt";
            $fichero2 = "copia_datos.txt";

            if (file_exists($fichero1)){

                $contenido = file($fichero1);

                echo "Nombre: ". $contenido[0].
                '<br>'. "Calle: ". $contenido[1].
                '<br>'. "Numero: ". $contenido[2];
            }
        }

        detectaEmail();
    
    ?>
</body>
</html>

parametros para encontrar el email:
{3,}@{3,}\.[A-Za-b]{2,4}