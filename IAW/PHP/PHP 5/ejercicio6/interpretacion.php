<?php
include_once 'conexion.php';

$sql = "CREATE table  interpretacion(
	id int primary KEY AUTO_INCREMENT,
    codigo_obra int ,
    codigo_instrumento int ,
    FOREIGN KEY (codigo_obra) REFERENCES obras(codigo_obra),
    FOREIGN KEY (codigo_instrumento) REFERENCES instrumento(codigo)
    );";

$resultado = mysqli_query($conexion, $sql);

if ($resultado === true)
    {
        echo "se ha creado la tabla interpretacion";
    }else 
        {
            echo "error al crear la tabla de interpretacion";
        }


?>