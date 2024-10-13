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
        //Saca en la página la fecha y hora actuales en un formato como este:
        //07 Mar 2022 - 21:55:12

        function calculaTiempoTranscurrido($segundos) {
            $anyos = intdiv($segundos, 31536000);
            $restoAnyos = $segundos % 31536000;

            $meses = intdiv($restoAnyos, 2592000);
            $restoMeses = $restoAnyos % 2592000;

            $dias = intdiv($restoMeses, 86400);
            $restoDias = $restoMeses % 86400;

            return ("$anyos anyos, $meses meses, $dias dias y $restoDias segundos");
        }

        function mesActual($mes){
            switch ($mes++) {
                case 1:
                    return 'Ene';
                case 2:
                    return 'Feb';
                case 3:
                    return 'Mar';
                case 4:
                    return 'Abr';
                case 5:
                    return 'May';
                case 6:
                    return 'Jun';
                case 7:
                    return 'Jul';
                case 8:
                    return 'Ago';
                case 9:
                    return 'Sep';
                case 10:
                    return 'Oct';
                case 11:
                    return 'Nov';
                case 12:
                    return 'Dic';
                default:
                    break;
            }
        }

        $fechaActual = time();
        $fechaNacimiento = "09/06/1980";
        $compruebaFecha = explode("/",$fechaNacimiento);

        if(checkdate($compruebaFecha[1],$compruebaFecha[0],$compruebaFecha[2])){
            $fechaFormatoCorrecto = $compruebaFecha[1] . "/" . $compruebaFecha[0] . "/" . $compruebaFecha[2];
            $nacimientoTime = strtotime();

            $edad = $fechaActual
        }
        
    ?>
</body>
</html>