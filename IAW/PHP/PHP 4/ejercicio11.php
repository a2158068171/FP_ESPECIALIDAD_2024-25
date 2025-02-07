<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php


$texto = "   Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et   ";
echo "texto original: $texto <br>";
$textomod = str_replace(" ","",$texto);
echo $textomod."<br>";
$textotrim=trim($texto); //solo funciona la final y principio de un string 
echo $textotrim;
?>



</body>
</html>