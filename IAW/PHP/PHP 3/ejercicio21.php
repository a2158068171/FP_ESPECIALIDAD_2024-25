<?php
    $a= floatval($_POST['a']);
    $b= floatval($_POST['b']);
    $c= floatval($_POST['c']);

    $d = ($b ** 2)-4*$a*$c;
    if ($d >= 0){

        $solucion1 = (-$b + sqrt($d)) / (2 * $a);
        $solucion2 = (-$b - sqrt($d)) / (2 * $a);
        echo "Tiene solucion y es  $solucion1 o $solucion2";
    }   else {
        echo "no tiene solucion";
    }
?>