<?php
include_once 'funciones.php';

$crearbbdd = "CREATE DATABASE IF NOT EXISTS musica";


$resultado = mysqli_query($conexion, $crearbbdd);

if ($crearbbdd === true)
    {
        echo "la tabla ha sido creado correctamente ";
    } else 
        {
            echo "error en crear la tabla <br><br>";
        }

?>

<html>
    <a href="principal.html">Volver al Inicio</a>
</html>