<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" >
        <h1>Registro</h1>
            <input type="text" placeholder="Introduzca DNI" name="dni">
            <br><br>
            <input type="text" placeholder="Nombre" name="nombre">
            <br><br>
            <input type="text" placeholder="Apellidos" name="apellidos"> 
            <br><br>
            <input type="text" placeholder="Localidad" name="localidad">
            <br><br>
            <input type="text" placeholder="ano de nicio" name="ano_inicio">
            <br><br>
            <input type="text" placeholder="modo de acceso" name="modo_acceso">
            <br><br>
            <br><br>
            <input type="submit">
       
    </form>
</body>
</html>


<?php
include_once 'funciones.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $localidad = $_POST['localidad'];
    $ano_inicio = $_POST['ano_inicio'];
    $modo_acceso = $_POST['modo_acceso'];

    $resultado =  insertar($conexion,$dni, $nombre, $apellidos, $localidad, $ano_inicio, $modo_acceso);

    if($resultado){
        echo '<script>
        alert("Te has registrado correctamente");
        window.location.href = "principal.html";
        </script>
        ';
    } else {
        echo '<script>
        alert("Error")
        window.location = insertar.php
        </script>
        ';

    }
}

?>