<?php
include_once 'conexion.php';

$sql = "CREATE table  obras(
    codigo_obra int unique not null auto_increment primary key,
    nombre_obra varchar(50) not null,
    autor varchar(50) not null,
    ano_creacion int(4) not null
)";

$resultado = mysqli_query($conexion, $sql);

if ($resultado === true)
    {
        echo "se ha creado correctamente la tabla obra ";
    } else 
        {
            echo "Error al crear la tabla obra";
        }
?>