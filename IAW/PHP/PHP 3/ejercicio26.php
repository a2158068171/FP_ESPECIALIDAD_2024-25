<?php
    $num1 = floatval($_POST["num1"]);
    $num2 = floatval($_POST["num2"]);
    $operacion = $_POST["operacion"];
    switch ($operacion) {

    case 1: echo "la suma de $num1 y $num2 es ".($num1+$num2); break;
    case 2: echo "la resta de $num1 y $num2 es ".($num1-$num2); break;    
    case 3: echo "la multiplicacion de $num1 y $num2 es ".($num1*$num2); break;   
    case 4: echo "la division de $num1 y $num2 es ".($num1/$num2); break;   
    default: echo "operacion no valido";
    }
  


?>