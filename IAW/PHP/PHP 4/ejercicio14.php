<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$texto = "   Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et   ";
print_r(str_word_count($texto, 1));

echo '<br><br>';
echo str_word_count($texto, 0);

echo '<br><br>';


    $array = explode(" ", $texto); // dividimos el texto para que sea en array 
    $longitud = count($array); // almacenamos en longitud la longuitud total del texto en array que previamente habiamos separado el texto en array 
    for ($i = 0; $i < $longitud; $i++) { 
        echo $array[$i]."<br>";
    }
    // un bucle for simple donde donde empezamos a contar de 0 hasta el maximo que la longuitud de palabras que hay en el texto sacado del array
    // y hacemos un echo de cada palabra
    ?>
</body>
</html>