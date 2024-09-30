<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hora = "21:60:12";

        function separaHora($hora){
            preg_match("/^([0-9]{2}):([0-9]{2}):([0-9]{2})$/", $hora, $horaPartes);

            return (comprobarHora($horaPartes)) ? ("es valida"):("no es valida");
        }

        function comprobarHora($partes){

            $esValido = ( $partes[1]>=0 && $partes[1]<24 );
            $esValido = $esValido && ( $partes[2]>=0 && $partes[2]<60 );
            $esValido = $esValido && ( $partes[3]>=0 && $partes[3]<60 );
            
            return $esValido;
        }

        echo "La hora ", $hora, " " , separaHora($hora);
    ?>
</body>
</html>
