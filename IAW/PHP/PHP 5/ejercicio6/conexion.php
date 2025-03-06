<?php
$server = 'localhost';
$user = 'root';
$passwd = '';
$bbdd = 'musica';

$conexion = new mysqli($server, $user, $passwd, $bbdd);

mysqli_set_charset($conexion, "utf8mb4");
if (!$conexion) { 
    echo ('No pudo conectarse: '. mysqli_connect_error()); }
     
?>