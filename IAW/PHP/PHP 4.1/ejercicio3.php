<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio3.php" method="post">
        <fieldset>
                <legend>Potencia de un numero   </legend>
                <br>

                base
                <input type="text" name="num1" />
                <br/>
                <br/> 
                exponente
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

    function potencia($num1, $num2) {
        return pow($num1, $num2);
    }
    $pow = potencia($num1,$num2);
    echo 'el resultado de potencia es '.$pow;
    } else {
        echo 'introduce un valor valido';

        }


        

?>



</body>
</html>


