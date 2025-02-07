<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio17.php" method="post">
        <fieldset>
                <legend>minimo y maximo de 3 numeros   </legend>
                <br>

                valor a 
                <input type="text" name="num1" />
                <br/>
                <br/> 
                valor b
                <input type="text" name="num2" />
                <br/>
                <br/> 
                valor c
                <input type="text" name="num3" />
                <br/>
                <br/> 
                <input type="submit" value="enviar" name="enviar" />
        </fieldset>
    </form>
<?php

if(isset($_POST['enviar'])){

    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    $num3 = intval($_POST['num3']);
    $min = min($num1, $num2, $num3);
    $max = max($num1, $num2, $num3);
    echo 'el maximo es '.$max;
    echo '<br> el minimo es '.$min;
}
?>



</body>
</html>