<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    if ($num1 > $num2){
        echo "$num1 es mayor que $num2";
    }else {
        echo "$num1 es menor que $num2";
    }

?>