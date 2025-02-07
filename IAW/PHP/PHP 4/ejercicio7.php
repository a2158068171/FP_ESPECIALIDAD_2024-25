<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio7.php" method="post">
        <fieldset>
                <legend>cambiar de mayuscula a minuscula </legend>
                <br>
                <select name="options" >
                    <option value="mayus">mayuscula a minuscula</option>
                    <option value="minus">minuscula a mayuscula</option>
                </select>
                <br>
                <br>
                Indica un string 
                <input type="text" name="a" />
                <br/>
                <br/> 
                <input type="submit" value="enviar" name="enviar" />
                
        </fieldset>
    </form>

    <?php
    if (!empty($_POST['a']) && !empty($_POST['options']))
    {
        $string = $_POST['a'] ;
        $a = $_POST['options'];

        switch ($a)
        
        {
            case 'mayus': echo strtolower($string);break;
            case 'minus': echo strtoupper($string);break;
            default: echo "error";
        }
    }
    
    ?>
</body>
</html> 