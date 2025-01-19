<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio26.php" method="post">
            <fieldset>
                <legend>calculadora basica</legend>

                <h2>opciones de calculo</h2>
                <p>Suma:1</p>
                <p>resta:2</p>
                <p>multiplicacion:3</p>
                <p>division 4</p>
                <br>
                Indica la operacion a realizar
                <input type="text" name="operacion" />
                <br/>
                <br/> 
                indica el primer numero
                <input type="text" name="num1" />
                <br/>
                <br/> 
                indica el segundo numero
                <input type="text" name="num2" />
                <br/>
                <br/>                               

                <input type="submit" value="enviar" name="enviar" />
            </fieldset>
    
    </form>
</body>
</html>