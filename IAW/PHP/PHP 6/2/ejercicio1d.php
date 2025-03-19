<?php
session_start(); 
$usuario = strtoupper($_SESSION['usuario']); 
$date = $_SESSION['date'];

$anoactual = date ("Y");
$nacimineto = date("Y", strtotime($date));
$edadahora = $anoactual - $nacimineto;
echo $usuario;
echo '<br>'.$edadahora;

?>