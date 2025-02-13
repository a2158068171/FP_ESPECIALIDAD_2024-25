<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
</head>
<body>
    <form method="post" action="ejercicio12.php">
        <fieldset>
            <legend>factorial de un numero</legend>

            <label for="text">Dime un numero</label>
            <input type="text" name="num1" />
            <br><br>
            <input type="submit" value="enviar" name="enviar" />
     </fieldset>
    </form>


    <?php



    function factorial($a) {
        $factorial = 1;
        for ($i = 1; $i <= $a; $i ++){
            $factorial *= $i;
        }
        echo "El factorial es $factorial";
    } 


    if (isset($_POST['enviar'])){
        factorial(intval($_POST['num1']));

     }else {
        echo "introduce un numero ";
    }

    ?>

</body>
</html>