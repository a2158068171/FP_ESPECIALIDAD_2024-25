<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form method="post">
    Introduce el codigo del instrumento a buscar:<br><br>
    <input type="text" name='codigo'><br><br>
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
    $codigo = $_POST['codigo'];
    instrumento_code($conexion, $codigo);

}
?>
