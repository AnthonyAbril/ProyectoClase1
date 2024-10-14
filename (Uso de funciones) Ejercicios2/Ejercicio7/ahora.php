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
        $mes = mesActual(date("m"));
        echo date("d ") . $mes . date(" Y - H:i:s");
    ?>
</body>
</html>