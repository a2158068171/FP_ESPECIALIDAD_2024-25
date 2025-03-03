<?php
include_once 'conexion.php';

function comprobar($conexion, $Usuario, $contraseña){
    $consultar = "SELECT * from tbl_alumno where Usuario = '$Usuario' and Contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion, $consultar);
    return $resultado;
}

function registrar($conexion,$Dni, $Nombre, $Apellidos, $Localidad, $Centro_Estudio, $Usuario, $Contraseña){
    $insertar = "INSERT INTO tbl_alumno(Dni, Nombre, Apellidos, Localidad, Centro_Estudio, Usuario, Contraseña) VALUES ('$Dni', '$Nombre', '$Apellidos', '$Localidad', '$Centro_Estudio', '$Usuario', '$Contraseña')";
    $query = mysqli_query($conexion, $insertar);
    return $query;
}

?>