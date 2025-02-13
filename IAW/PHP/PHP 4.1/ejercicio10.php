<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
</head>
<body>
    <form method="post" action="ejercicio10.php">
        <fieldset>
            <legend>indicador de si un numero es primo</legend>

            <label for="text">Dime un numero</label>
            <input type="text" name="num1" />
            <br><br>
            <input type="submit" value="enviar" name="enviar" />
     </fieldset>
    </form>


    <?php
    

    function primo($a){
        $contador = 0;
        for ($i = 1; $i <= $a; $i++) {
            if ($a % $i == 0) {
                $contador ++;
            }
            
        }
        if($contador == 2){
            echo "el numero $a es primo";
        } else {
            echo "el numero $a no es primo";
        }
    }

    if (isset($_POST['enviar'])){
        primo($_POST['num1']);

     }

 
    ?>
    
</body>
</html>