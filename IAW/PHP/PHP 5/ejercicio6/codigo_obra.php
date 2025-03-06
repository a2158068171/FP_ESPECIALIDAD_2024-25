<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>consultar una obra por codigo </h2>
    <form method="POST">
    introduce codigo de obra
    <input type="text" name='codigo_obra'><br><br>
    <input type="submit">

    </form>
</body>
</html>
    
<?php
include_once 'funciones.php';
if ($_SERVER['REQUEST_METHOD']== 'POST')
{
    $codigo_obra = $_POST['codigo_obra'];

    obra_codigo($conexion, $codigo_obra);

}


?>