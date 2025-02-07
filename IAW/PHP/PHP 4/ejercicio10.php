<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$string = 'abcedfg';
$buscador = 'f';
$pos = strpos($string, $buscador);

if ($pos == false){

    echo "La cadena $buscador no fue encontrada en $string <br>";
} else {
    echo "la cadena $buscador fue encontrada en la cadena $string <br>";
    echo "y esta en la posicion $pos";// siempre retorna un valor menos al indicado ya que empieza a contar desde el 0 en vez de 1
}

?>

</body>
</html>