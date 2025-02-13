<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
</head>
<body>
    <form method="post" action="ejercicio13.php">
        <fieldset>
            <legend>factorial de entre dos numeros </legend>

            <label for="text">Dime el primer numero</label>
            <input type="text" name="num1" />
            <br><br>
            <label for="text">Dime el segundo numero</label>
            <input type="text" name="num2" />
            <br><br>
            <input type="submit" value="enviar" name="enviar" />
     </fieldset>
    </form>


    <?php



    function factorial($a) 
    {
        $factorial = 1;
        for ($i = 1; $i <= $a; $i ++)
        {
            $factorial *= $i;
        }
        echo "El factorial de $a es $factorial<br>";
    } 


    function factorialEnRango($a, $b)
    {
        for ($z = $a+1; $z< $b;$z ++)
        {
            factorial($z);
        }  
    }
    

    if (isset($_POST['enviar'])){
        factorialEnRango(intval($_POST['num1']),intval($_POST['num2']));

     }else {
        echo "introduce los dos numero ";
    }

    ?>

</body>
</html>