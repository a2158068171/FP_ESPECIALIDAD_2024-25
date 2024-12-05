<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //inicio de c'odigo php
            $uno = "hola "; //guardamos en la variable uno la cadena (conjunto de caracteres)
            echo $uno;// mostramos o escribimos en el html
            $dos = $uno."mundo"; // $dos contiene "hola mundo" $uno = "hola "; 
            $uno .= "mundo"; // Es lo mismo que poner $uno = $uno . "mundo";
            echo "<br> Mostramos los valores de uno y de dos:<br>";
            echo $uno;
            echo "<br>";
            echo $dos;
    ?> <!-- fin de c'odigo php -->
</body>
</html>