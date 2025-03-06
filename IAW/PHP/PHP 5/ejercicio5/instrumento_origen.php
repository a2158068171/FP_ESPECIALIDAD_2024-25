<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">

        Introduce el origen de instrumento a buscar: 
        <select name="origen" required>
            <option value="aborigen">Aborigen</option>
            <option value="cubano">Cubano</option>
            <option value="europeo">Europeo</option>
            <option value="mexicano">Mexicano</option>
            <option value="guatemalteco">Guatemalteco</option>
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
    $origen = $_POST['origen'];
    instrumento_origen($conexion, $origen);
 
}
?>
