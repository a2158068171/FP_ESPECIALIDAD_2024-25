<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // bucle normal de for que cuenta hasta 100
    for ($i = 1; $i <= 100; $i++) {
        $count = 0;
        // Verificar si el número es primo, donde la variable $a equivale a 1 y llegue hasta el numero $ i
        // dentro del for hacemos que si el $i se divide entre el $a equivale y da el modulo 0 cuenta 1 vez
        for ($a = 1; $a <= $i; $a++) {
            if ($i % $a == 0) {
                $count++;
            }
        }
        // Un número es primo tiene 2 divisores el 1 y su mismo numero
        if ($count == 2) {
            echo $i." ";
        }
    }
    ?>
</body>
</html>
