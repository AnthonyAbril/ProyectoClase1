<?php
function saludo($n){
    echo "Hola, ",$n;
}


function cuenta($primero, $segundo){
    echo "<p>Del ",$primero," al ",$segundo,"</p>";
    $creciente = ($primero>$segundo);
    
    $a=$primero;

    echo $primero;
    while($creciente ? $a>$segundo : $a<$segundo){
        
        $creciente ? $a-- : $a++;
        if($creciente ? $a>$segundo : $a<$segundo){
            echo ",",$a;
        }
    }
    echo ",",$segundo;
}

function intercambia(&$primero, &$segundo){
    $segundo_prov=$segundo;
    $segundo=$primero;
    $primero=$segundo_prov;
}

function calculaDescuento($precio, $descuento=0){
    return $precio - ($precio*$descuento*0.01);
}
?>