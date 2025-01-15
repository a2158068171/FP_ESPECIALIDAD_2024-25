<?php
    $num1 = $_POST['num1'];
    echo "Los numeros impares de $num1 son ";
    for ($i = 1; $i < $num1 ; $i += 2){

        echo "<br> $i ";
    }
?>  