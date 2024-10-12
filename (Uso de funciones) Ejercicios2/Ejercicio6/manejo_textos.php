<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    /*
    Crea una variable $radio con un radio de circunferencia (el que quieras).
    
    Crea una variable $area y calcula en ella el área del círculo, como has hecho en algún ejercicio
    anterior (PI * radio, definiendo la constante PI).
    
    Crea una variable $textoResultado que diga "El área calculada del círculo es" y luego ponga la
    variable $area , mostrando sólo 2 decimales (utiliza la función number_format ). Muestra luego
    esta variable por pantalla con un echo.
    
    Crea una variable $textoResultadoMayus que convierta el texto anterior a mayúsculas, usando
    la función strtoupper . Muestra también esta variable por pantalla.

    Crea una variable llamada $textoResultadoModificado que reemplace la palabra "calculada" por la
    palabra "obtenida", usando la función str_replace , en la variable $textoResultado .
    
    Averigua la longitud del texto de la variable anterior usando la función strlen .
    
    Averigua en qué posición del texto de la variable anterior se encuentra la palabra "círculo", usando la
    función strpos .
    
    Crea una variable $numeros que tenga el valor "1,2,3,4,5", y utiliza la función explode para
    quedarte con los números por separado. Sácalos por pantalla, separados por el signo "+"
    ("1+2+3+4+5"), y después, intenta sumarlos entre sí y mostrar el resultado de la suma a continuación (al
    final, te quedará algo como "1+2+3+4+5=15").
*/

    $PI = 3.14;
    $radio = 3;
    $area = ($PI*$radio);
    $textoResultado = "El área calculada del círculo es " . number_format($area, 2);
    echo $textoResultado;
    $textoResultadoMayus = strtoupper($textoResultado);
    echo $textoResultadoMayus;
    $textoResultadoModificado = str_replace("calculada","obtenida", $textoResultado);
    echo strlen($textoResultadoModificado);
    //echo strpos($textoResultadoModificado);

    $numeros = "1,2,3,4,5";
    $partes = explode(',',$numeros);
    echo (implode('+',$partes)) . '=' . array_sum($partes);
    ?>
</body>
</html>