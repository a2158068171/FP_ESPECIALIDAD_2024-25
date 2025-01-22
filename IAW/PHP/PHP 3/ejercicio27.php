<?php
    $base = floatval($_POST['base']);
    $base2 = floatval($_POST['base2']);
    $altura = floatval($_POST['altura']);
    $radio = floatval($_POST['radio']);
    $lado = floatval($_POST['lado']);
    $options = $_POST['options'];
    
    switch ($options){
        case 'triangulo': echo "El area del triangulo es ".($base*$altura/2);break;
        case 'trapecio': echo "El area del trapecio es ".(($base+$base2)*$altura/2);break;
        case 'rectangulo': echo "El area del rectangulo es ".($base*$altura);break;
        case 'circulo': echo "El area del circulo es ".(($radio**2)*3.1415);break;
        case 'cuadrado': echo "El area del cuadrado es ".($lado**2);break;
        default: echo "operacion no valida"; break;



    }    
?>

