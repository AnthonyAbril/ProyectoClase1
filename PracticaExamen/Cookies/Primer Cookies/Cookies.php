<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $accesosPagina = 0;
        setcookie("accesos", $accesosPagina); // creamos una cookie

        //si existe la cookie accesos
        if (isset($_COOKIE['accesos'])) { 
            $accesosPagina = $_COOKIE['accesos']; // recuperamos una cookie
            setcookie('accesos', ++$accesosPagina); // le asignamos un valor
        }
        echo "has accedido $accesosPagina veces";
    ?>
</body>
</html>