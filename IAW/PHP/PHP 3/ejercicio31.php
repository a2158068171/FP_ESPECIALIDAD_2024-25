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

    $mayores = 0;
    $menores = 0;

    if ($num1 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($num2 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($num3 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($num4 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($num5 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($num6 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($num7 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($num8 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($num9 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    if ($num10 >= 7) {
        $mayores++;
    } else {
        $menores++;
    }

    echo "Hay un total de $mayores con una nota superior a 7 <br>";
    echo "Hay un total de $menores con uan inferior a 7 ";
    
    ?>
