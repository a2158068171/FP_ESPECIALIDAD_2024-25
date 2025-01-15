<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if ($num1 < 0) {
        $producto = $num1 * $num2 * $num3;
        echo "El producto (multiplicacion) de los tres numeros es $producto";
    } else {
        $suma = $num1 + $num2 + $num3;
        echo "La suma de los tres numeros es $suma";
    }
?>