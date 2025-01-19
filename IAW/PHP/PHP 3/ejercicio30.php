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

    $total = $num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10;
    $media = $total /10;
    echo "La suma de todos los numeros es $total y la media es $media";

?>