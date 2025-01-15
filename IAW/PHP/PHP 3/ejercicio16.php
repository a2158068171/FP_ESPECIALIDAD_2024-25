<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    if ($num1 > $num2 && $num2 > $num3) {
        echo "el numero mas grande es $num1<br>" ;
        echo "el numero mas pequeño es $num3";

    } elseif ($num1 > $num3 && $num3 > $num2) {
        echo "el numero mas grande es $num1 <br>";
        echo "el numero mas pequeño es $num2";

    } elseif ($num2 > $num1 && $num1 > $num3) {
        echo "el numero mas grande es $num2<br>";
        echo "el numero mas pequeño es $num3";

    } elseif ($num2 > $num3 && $num3 > $num1) {
        echo "el numero mas grande es $num2<br>";
        echo "el numero mas pequeño es $num1";

    } elseif ($num3 > $num1 && $num1 > $num2) {
        echo "el numero mas grande es $num3<br>";
        echo "el numero mas pequeño es $num2";

    } elseif ($num3 > $num2 && $num2 > $num1) {
        echo "el numero mas grande es $num3<br>";
        echo "el numero mas pequeño es $num1";
    }
?>