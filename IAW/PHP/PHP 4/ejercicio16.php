<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio16.php" method="post">
        <fieldset>
                <legend>Potencia  </legend>
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

    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    $pow = pow($num1, $num2);
    echo $pow;
}
?>



</body>
</html>