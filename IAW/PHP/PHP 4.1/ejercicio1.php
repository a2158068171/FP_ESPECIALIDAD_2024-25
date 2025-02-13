<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio1.php" method="post">
        <fieldset>
                <legend>suma de 2 numeros con function  </legend>
                <br>

                valor a 
                <input type="text" name="num1" />
                <br/>
                <br/> 
                valor b
                <input type="text" name="num2" />
                <br/>
                <br/> 

                <input type="submit" value="enviar" name="enviar" />
        </fieldset>
    </form>
<?php

if(isset($_POST['enviar'])){

    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);

    function suma($num1, $num2) {
        return $num1 + $num2;
    }
    $suma = suma($num1,$num2);
    echo 'la suma es '.$suma;
    } else {
        echo 'introduce un valor valido';

        }


        

?>



</body>
</html>


