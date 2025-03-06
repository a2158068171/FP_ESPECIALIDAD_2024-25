<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Insertar Instrumento</h1>
    <form method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Tipo: 
        <select name="tipo" required>
            <option value="viento">Viento</option>
            <option value="cuerda">Cuerda</option>
            <option value="percusion">Percusión</option>
            <option value="electricos">Eléctricos</option>
        </select><br>
        Origen: 
        <select name="origen" required>
            <option value="aborigen">Aborigen</option>
            <option value="cubano">Cubano</option>
            <option value="europeo">Europeo</option>
            <option value="mexicano">Mexicano</option>
            <option value="guatemalteco">Guatemalteco</option>
        </select><br>
        Modelo: <input type="text" name="modelo" required><br>
        <input type="submit" >
    </form>

    <br><br>
    <a href="principal.html">Volver al Inicio</a>
    
</body>
</html>


<?php

include_once 'funciones.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $origen = $_POST['origen'];
    $modelo = $_POST['modelo'];
    instrumento($conexion, $nombre, $tipo, $origen, $modelo);

}
?>
