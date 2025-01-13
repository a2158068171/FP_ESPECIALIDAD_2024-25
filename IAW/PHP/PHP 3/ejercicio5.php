<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i = 5; $i <= 300; $i ++){
                // aqui he puesto en el segundo valor a 300 para probar el if $i es igual a 15 que se rompa el bucle
        echo $i."<br>";
        if ($i == 15){
            break;
        }
    }

    ?>
</body>
</html>