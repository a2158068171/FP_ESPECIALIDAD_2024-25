<?php
$hostname = 'localhost';
$username = 'root';
$contraseña = '';
$basededatos = 'alumnado';

$conexion = new mysqli($hostname, $username, $contraseña, $basededatos);
mysqli_set_charset($conexion, "utf8mb4");
?>