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
                <legend>numero aleatorio dado 2 numeros </legend>
                <br>

                indica el primer numero
                <input type="text" name="num1" />
                <br/>
                <br/> 
                indica el segundo numero
                <input type="text" name="num2" />
                <br/>
                <br>
                <input type="submit" value="enviar" name="enviar" />
            </fieldset>
    </form>

<?php
if (!empty(intval($_POST['num1'])) && !empty(intval($_POST['num2'])))
{
    $num1 = $_POST['num1'];     
    $num2 = $_POST['num2'];
    echo rand($num1, $num2);
    

}

     
?>



</body>
</html>