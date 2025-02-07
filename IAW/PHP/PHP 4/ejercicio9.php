<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php


$texto = "Hola mundo";// definimos un string
$texto_modificado = str_replace("mundo", "PHP", $texto); //luego de eso lo que hacemos es que con el str_replace indicamos el valor a cambiar y por que cambiar
echo $texto_modificado."<br>"; 


// tambien se puede hacer un replace multiple mediante variables y añadir un contador
$texto1= "Me gusta el minecraft y el dota";
$a = ["micreaft", "dota"];
$b = ["lol", "morado"];
$count = 0;

$textomodificado1 = str_replace($a, $b, $texto1, $count);
echo $textomodificado1."<br>"; 
echo "cuantos veces se han reemplazado".$count;     



     
?>



</body>
</html>