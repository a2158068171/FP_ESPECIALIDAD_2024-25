<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form method="post">
    Introduce el nombre del instrumento a buscar:<br>
    <input type="text" name='nombre'><br>
    <input type="submit">

    </form>
    <br><br>
    <a href="principal.html">Volver al Inicio</a>
</body>
</html>


<?php

include_once 'funciones.php';
if($_SERVER['REQUEST_METHOD'] == 'POST' )
{
    $nombre = $_POST['nombre'];

    instrumento_nombre($conexion, $nombre);

}
?>
