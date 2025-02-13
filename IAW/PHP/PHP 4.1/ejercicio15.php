<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
</head>
<body>
    <form method="post" action="ejercicio14.php">
        <fieldset>
            <legend>invertir numero</legend>

            <label for="text">Dime un numero</label>
            <input type="text" name="num1" />
            <br><br>
            <input type="submit" value="enviar" name="enviar" />
     </fieldset>
    </form>


    <?php
    
    function invertir($a){
        $num_reves = strrev(strval($a));
        echo "El numero del reves es $num_reves" ;
    }

    if (isset($_POST['enviar'])){
        invertir(floatval($_POST['num1']));
     }

 
    ?>
    
</body>
</html>