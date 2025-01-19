<?php
    $b1 = floatval($_POST["b1"]);
    $a1 = floatval($_POST["a1"]);
    $b2 = floatval($_POST["b2"]);
    $a2 = floatval($_POST["a2"]);

    $area1 = ($b1*$a1)/2;
    $area2 = ($b2*$a2)/2;
    
    if ( $area1 > $area2 ) {
        echo "El primer triangulo es mas grande que el segundo";
    } else if ( $area1 < $area2 ) {
        echo "El segundo triangulo es mas grande que el primero";
    } else {
        echo "ambos tienen la misma area";
    }


?>