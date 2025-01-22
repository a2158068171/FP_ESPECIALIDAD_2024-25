<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio36.php" method="post">
            <fieldset>
                <legend>calculadora de formas </legend>

                <select name="options" >
                    <option value="suma">suma</option>
                    <option value="resta">resta</option>
                    <option value="multiplicacion">multiplicacion</option>
                    <option value="division">division</option>
                    <option value="potencia">potencia</option>


                </select>
                <br>

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