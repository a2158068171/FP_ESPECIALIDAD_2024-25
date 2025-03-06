<?php
include_once 'conexion.php';

//mysqli_select_db($conexion, 'musica');

$creartable = "CREATE table instrumento(
    codigo int auto_increment primary key,
    nombre varchar(100) not null,
    tipo enum('viento', 'cuerda', 'percusion', 'electrico') not null,
    origen enum('aborigen', 'cubano', 'europeo', 'mexicano', 'guatemalteco'),
    modelo varchar(100)
    )";


//$resultado = mysqli_query($conexion, $creartable);

if (mysqli_query($conexion, $creartable))
    {
        echo "la tabla ha sido creado correctamente ";
    } else 
        {
            echo  "Mostramos el error".mysqli_error($conexion) ;
        }


?> 

<html>
    <br><br>
    <a href="principal.html">Volver al Inicio</a>
</html>
