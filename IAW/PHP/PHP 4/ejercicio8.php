<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="ejercicio8.php" method="post">
            <fieldset>
                <legend>indica la longuitud del string  </legend>
                <br>
                string
                <input type="text" name="a" />
                <br/>
                <br/> 

                <input type="submit" value="enviar" name="enviar" />
            </fieldset>
    </form>

<?php
if (!empty($_POST['a']))
{
    $a = $_POST['a'];     
    echo strlen($a);

}

     
?>



</body>
</html>