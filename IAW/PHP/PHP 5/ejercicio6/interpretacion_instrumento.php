<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Consultar las interpretaciones de un instrumento musical </h2>
    <form method="POST">
    Introduce el instrumento
    <input type="text" name='instrumento'><br><br>
    <input type="submit">


    </form>
    
</body>
</html>

<?php
include_once 'funciones.php';
if ($_SERVER['REQUEST_METHOD']== 'POST')
{
    $codigo_instrumento = $_POST['instrumento'];
    interpretacion_instrumento($conexion, $codigo_instrumento);

}



?>