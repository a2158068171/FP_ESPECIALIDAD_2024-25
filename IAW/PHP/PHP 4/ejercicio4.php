<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio4.php" method="post">
        <fieldset>
                <legend>Raiz cuadrada de un numero </legend>
                <br>

                indica el  numero
                <input type="text" name="num1" />
                <br/>
                <br/> 
                <input type="submit" value="enviar" name="enviar" />
        </fieldset>
    </form>

    <?php
    if (!empty(floatval($_POST['num1'])))
    {
        $num1 = $_POST['num1'];
        $root = sqrt($num1);
        echo "La raiz del numero es ".$root;
    }
    ?>
</body>
</html>