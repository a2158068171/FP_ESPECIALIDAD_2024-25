<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $formula = "h^2 = c1^2 + c2^2";
    $c1 = 1.5;
    $c2 = 4;
    $h = ($c1*$c1) + ($c2*$c2);
    echo "La formula de un triangulo con un angulo de 90º es ".$formula;
    echo "<br> para hallar la hipotesuna con el lado c1 = 1.5 y el c2 = 4 nos saldria el resultado de ".$h;
    ?>
</body>
</html>