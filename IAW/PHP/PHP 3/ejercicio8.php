<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <?php
    $var = 1;
    while ($var <= 30){
        $cuadrado = $var ** 2;
        echo $cuadrado, "<br>";
        $var ++;
    } 

    echo "<hr>";
    
    for ($i = 1; $i <= 30; $i++) {
        $square = pow($i, 2); // es una funcion definida de php, base elevado al exponente 
        echo $square."<br>";
    }

    ?>


</body>
</html>