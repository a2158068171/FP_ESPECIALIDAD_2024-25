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
                <legend>calculadora basica</legend>

                <h2>opciones de calculo</h2>
                <p>Suma:1</p>
                <p>resta:2</p>
                <p>multiplicacion:3</p>
                <p>division 4</p>
                <br>

                indica el primer numero
                <input type="text" name="num1" />
                <br/>
                <br/> 
                indica el segundo numero
                <input type="text" name="num2" />
                <br/>
                <br/>                               
                Indica la operacion a realizar
                <input type="text" name="operacion" />
                <br/>
                <br/> 
                <input type="submit" value="enviar" name="enviar" />
            </fieldset>
    


<?php
    $num1 = floatval($_POST["num1"]);
    $num2 = floatval($_POST["num2"]);
    $operacion = $_POST["operacion"];
    switch ($operacion) {

    case 1: echo "la suma de $num1 y $num2 es ".($num1+$num2); break;
    case 2: echo "la resta de $num1 y $num2 es ".($num1-$num2); break;    
    case 3: echo "la multiplicacion de $num1 y $num2 es ".($num1*$num2); break;   
    case 4: echo "la division de $num1 y $num2 es ".($num1/$num2); break;   
    default: echo "operacion no valido";
    }
  


?>
    </form>
</body>
</html>