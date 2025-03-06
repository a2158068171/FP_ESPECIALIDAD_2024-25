<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Consultar una obra por nombre</h2>
    <form method="POST">
    Indica el nombre a buscar 
    <input type="text" name="codigo_nombre">
    <br><br>
    <input type="submit">
    </form>
</body>
</html>

<?php
include_once 'funciones.php';

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $codigo_nombre = $_POST['codigo_nombre'];

    obra_nombre($conexion, $codigo_nombre);

}
?>