<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Añadir una obra</h2>
    <form method="post">
        Nombre:
        <input type="text" name='nombre' required><br><br>
        Autor:
        <input type="text" name="autor" required><br><br>
        Año de creacion
        <input type="number" name="ano" required><br><br>

        <input type="submit">


    </form>
</body>
</html>


<?php
include_once 'funciones.php';

if ($_SERVER ['REQUEST_METHOD'] == 'POST')
{
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];

    obra_select($conexion, $nombre, $autor, $ano);
    
}




?>