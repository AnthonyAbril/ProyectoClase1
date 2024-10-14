<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function modificaEmail($fichero1, $fichero2){

            try{
                if (file_exists($fichero1) ){

                    $contenido2 = file_get_contents($fichero1);
                    $contenido2 = preg_replace("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/","emailfalso@hotmail.com",$contenido2);
                    file_put_contents($fichero2, $contenido2);
                }else{
                    throw new Exception("El fichero de entrada no existe");
                }
            }catch(Exception $e){
                echo 'Se ha producido un error: ' . $e->getMessage();
            }
        }

        /*
        function organizarDatos($fichero, $datos){
            if (file_exists($fichero)){

                $contenido = file($fichero);

                file_put_contents($fichero2 , "Nombre: ". $contenido[0].
                "\nCalle: ". $contenido[1].
                "\nNumero: ". $contenido[2].
                "\nEmail: ". $contenido[3]);
            }
        }
        */

        modificaEmail("aa.txt", "copia_datos.txt");
    
    ?>
</body>
</html>