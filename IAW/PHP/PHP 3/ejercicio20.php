<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
        while ($num2 != 0) {
            $resto = $num1 % $num2; 
            $num1 = $num2;            
            $num2 = $resto;          
        }

    echo "El MCD con la formulad de euclides es: $num1";

?>