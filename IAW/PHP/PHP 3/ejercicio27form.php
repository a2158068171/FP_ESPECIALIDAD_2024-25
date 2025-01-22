<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio27.php" method="post">
            <fieldset>
                <legend>calculadora de formas </legend>

                <select name="options" >
                    <option value="triangulo">triangulo</option>
                    <option value="trapecio">trapecio</option>
                    <option value="rectangulo">rectangulo</option>
                    <option value="circulo">circulo</option>
                    <option value="cuadrado">cuadrado</option>


                </select>
                <br>
                base
                <input type="text" name="base" />
                <br/>
                <br/> 
                base2
                <input type="text" name="base2" />
                <br/>
                <br/> 
                altura
                <input type="text" name="altura" />
                <br/>
                <br/>
                radio
                <input type="text" name="radio" />
                <br/>
                <br/> 
                lado
                <input type="text" name="lado" />
                <br/>
                <br/>                                

                <input type="submit" value="enviar" name="enviar" />
            </fieldset>
    
    </form>
</body>
</html>