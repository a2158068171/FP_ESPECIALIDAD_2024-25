<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio5.php" method="post">
        <fieldset>
                <legend>comprobar si esta vacio</legend>
                <br>

                Indica un valor 
                <input type="text" name="num1" />
                <br/>
                <br/> 
                <input type="submit" value="enviar" name="enviar" />
        </fieldset>
    </form>

    <?php
    if (!empty($_POST['num1']))
    {
        $num1 = $_POST['num1'] ;
        echo "el valor no es vacio y es $num1";
    }
    else {
        echo " que pasa que no sabes escribir un valor";
    }
    ?>
</body>
</html> 