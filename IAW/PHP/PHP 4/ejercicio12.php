<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio12.php" method="post">
        <fieldset>
                <legend>Generador de string </legend>
                <br>

                indica la longuitud 
                <input type="text" name="num1" />
                <br/>
                <br/> 
                <input type="submit" value="enviar" name="enviar" />
        </fieldset>

<?php


function cadenaAleatoria(int $longitud = 16, string $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'): string 

{
    $cadena = '';
    $max = mb_strlen($caracteres) - 1;
    for ($i = 0; $i < $longitud; $i++) {
        $cadena .= mb_substr($caracteres, random_int(0, $max), 1);
    }   
    return $cadena;
}


if (isset($_POST['num1']))
    {
        $num1 = intval($_POST['num1']);
        echo cadenaAleatoria($num1);
    }
    else {
        echo " que pasa que no sabes escribir un valor";
    }

// version simple 



//if (isset($_POST['num1']))
//   {
//       $allcharacters= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//       $num1 = intval($_POST['num1']);
//       echo substr(str_shuffle($allcharacters), 0, $num1);
//  
//  
//   }
//    else {
//        echo " que pasa que no sabes escribir un valor";
//    }
?>



</body>
</html>