<?php
    $num1 = floatval($_POST["num1"]);
    $num2 = floatval($_POST["num2"]);
    $num3 = floatval($_POST["num3"]);
    $num4 = floatval($_POST["num4"]);
    $num5 = floatval($_POST["num5"]);
    $num6 = floatval($_POST["num6"]);
    $num7 = floatval($_POST["num7"]);
    $num8 = floatval($_POST["num8"]);
    $num9 = floatval($_POST["num9"]);
    $num10 = floatval($_POST["num10"]);

    $multiplo3 = 0;
    $multiplo5 = 0;
    $multiplo3y5 = 0;
    $invalido = 0;

    if($num1 % 3 == 0 && $num1 % 5 == 0){
        $multiplo3y5++;
    } elseif ($num1 % 3 == 0){
        $multiplo3++;
    } elseif ($num1 % 5 == 0){
        $multiplo5++;
    } else {
        $invalido++;
    }

    if($num2 % 3 == 0 && $num2 % 5 == 0){
        $multiplo3y5++;
    } elseif ($num2 % 3 == 0){
        $multiplo3++;
    } elseif ($num2 % 5 == 0){
        $multiplo5++;
    } else {
        $invalido++;
    }
    
    if($num3 % 3 == 0 && $num3 % 5 == 0){
        $multiplo3y5++;
    } elseif ($num3 % 3 == 0){
        $multiplo3++;
    } elseif ($num3 % 5 == 0){
        $multiplo5++;
    } else {
        $invalido++;
    }
        
    if($num4 % 3 == 0 && $num4 % 5 == 0){
        $multiplo3y5++;
    } elseif ($num4 % 3 == 0){
        $multiplo3++;
    } elseif ($num4 % 5 == 0){
        $multiplo5++;
    } else {
        $invalido++;
    }
        
    if($num5 % 3 == 0 && $num5 % 5 == 0){
        $multiplo3y5++;
    } elseif ($num5 % 3 == 0){
        $multiplo3++;
    } elseif ($num5 % 5 == 0){
        $multiplo5++;
    } else {
        $invalido++;
    }
        
    if($num6 % 3 == 0 && $num6 % 5 == 0){
        $multiplo3y5++;
    } elseif ($num6 % 3 == 0){
        $multiplo3++;
    } elseif ($num6 % 5 == 0){
        $multiplo5++;
    } else {
        $invalido++;
    }
        
    if($num7 % 3 == 0 && $num7 % 5 == 0){
        $multiplo3y5++;
    } elseif ($num7 % 3 == 0){
        $multiplo3++;
    } elseif ($num7 % 5 == 0){
        $multiplo5++;
    } else {
        $invalido++;
    }
    
    if($num8 % 3 == 0 && $num8 % 5 == 0){
        $multiplo3y5++;
    } elseif ($num8 % 3 == 0){
        $multiplo3++;
    } elseif ($num8 % 5 == 0){
        $multiplo5++;
    } else {
        $invalido++;
    }
        
    if($num9 % 3 == 0 && $num9 % 5 == 0){
        $multiplo3y5++;
    } elseif ($num9 % 3 == 0){
        $multiplo3++;
    } elseif ($num9 % 5 == 0){
        $multiplo5++;
    } else {
        $invalido++;
    }
        
    if($num10 % 3 == 0 && $num10 % 5 == 0){
        $multiplo3y5++;
    } elseif ($num10 % 3 == 0){
        $multiplo3++;
    } elseif ($num10 % 5 == 0){
        $multiplo5++;
    } else {
        $invalido++;
    }

    echo "multiplos de 3: $multiplo3 <br>";
    echo "multiplos de 5: $multiplo5 <br>";
    echo "multiplos de 3 y 5: $multiplo3y5 <br>";
    echo "numeros invalidos: $invalido";
    ?>
