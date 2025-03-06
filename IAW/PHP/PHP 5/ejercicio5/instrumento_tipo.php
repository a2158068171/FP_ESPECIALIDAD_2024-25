<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">

        Introduce el tipo de instrumento a buscar: 
        <select name="tipo" required>
            <option value="viento">Viento</option>
            <option value="cuerda">Cuerda</option>
            <option value="percusion">Percusión</option>
            <option value="electricos">Eléctricos</option>
        </select><br>
        <input type="submit" >
    </form>
    <br><br>
    <a href="principal.html">Volver al Inicio</a>
</body>
</html>


<?php

include_once 'funciones.php';
if($_SERVER['REQUEST_METHOD'] == 'POST' )
{
    $tipo = $_POST['tipo'];

    $resultado = instrumento_tipo($conexion, $tipo);
    
}
?>
