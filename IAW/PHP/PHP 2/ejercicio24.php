<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $alumno = 80;
    $alumna = 65;
    $por_alumno = $alumno/($alumno+$alumna)*100;
    $por_alumna = $alumna/($alumno+$alumna)*100;
    echo "En el centro hay 80 alumnos y 65 alumnas, calculamos el porcentaje de cada uno, y tenemos el resultado de que esta compuesto
    por un ".$por_alumno."% de alumnos y un ".$por_alumna."% de alumnas " ;
    ?>
</body>
</html>