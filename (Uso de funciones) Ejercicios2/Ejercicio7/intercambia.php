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
        
        function calculaTiempoTranscurrido($segundos) {
            $anyos = intdiv($segundos, 31536000);
            $restoAnyos = $segundos % 31536000;

            $meses = intdiv($restoAnyos, 2592000);
            $restoMeses = $restoAnyos % 2592000;

            $dias = intdiv($restoMeses, 86400);
            $restoDias = $restoMeses % 86400;

            return ("$anyos anyos, $meses meses, $dias dias y $restoDias segundos");
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