<?php
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $options = $_POST['options'];
    $memory = 0;
    switch ($options) {

        case 'suma': echo "la suma de $num1 y $num2 es ".($num1+$num2); break;
        case 'resta': echo "la resta de $num1 y $num2 es ".($num1-$num2); break;    
        case 'multiplicacion': echo "la multiplicacion de $num1 y $num2 es ".($num1*$num2); break;   
        case 'division': echo "la division de $num1 y $num2 es ".($num1/$num2); break;   
        case 'potencia': echo "la potencia de $num1 y $num2 es ".$memory = ($num1 ** $num2); break;
        default: echo "operacion no valido";
        }
        
?>

