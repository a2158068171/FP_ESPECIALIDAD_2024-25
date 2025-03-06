<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Consultar interpretaciones por obra</h2>
    <form method="POST">
        Indica nombre de la obra
        <input type="text" name="obra"><br><br>
        <input type="submit" >
    </form>
</body>
</html>
<?php
include_once 'funciones.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nombre_obra = $_POST['obra'];

    interpretacion_obra($conexion, $nombre_obra);
}


?>