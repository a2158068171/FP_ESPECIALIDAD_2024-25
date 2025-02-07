<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio18.php" method="post">
        <fieldset>
                <legend>redondeo </legend>
                <br>

                valor a 
                <input type="text" name="num1" />
                <br/>
                <br/> 

                <input type="submit" value="enviar" name="enviar" />
        </fieldset>
    </form>
<?php

if(isset($_POST['enviar'])){

    $num1 = floatval($_POST['num1']);
    $floor = floor($num1);
    $round = round($num1, 1, PHP_ROUND_HALF_DOWN);
    echo 'redondeo de un numero es '.$floor;
    echo '<br>redondeo es '.$round;
}
?>



</body>
</html>