<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $base = 60000;
        $empleado1 = $base * 1.13;
        $empleado2 = $base * 1.26;
        $empleado3 = $base * 1.39;
        echo "tres empleados de la programacion tienen un sueldo de 60k anuales,
         pero han tenido un incentivo del 13%, 26%, 39% respetivamente que saria un resultado de ".$empleado1."  ".$empleado2."  ".$empleado3;
    ?>
</body>
</html>