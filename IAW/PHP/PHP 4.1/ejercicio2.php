<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio2.php" method="post">
        <fieldset>
                <legend>area de circulo</legend>
                <br>

                radio
                <input type="text" name="num1" />
                <br/>
                <br/> 

                <input type="submit" value="enviar" name="enviar" />
        </fieldset>
    </form>
<?php

if(isset($_POST['enviar'])){

    $num1 = floatval($_POST['num1']);

    function area($num1) {

        return ($num1*$num1*3.14);
    }
    $area = area($num1);
    echo 'el area es  '.$area;
    } else {
        echo 'introduce un valor valido';

        }


        

?>



</body>
</html>


