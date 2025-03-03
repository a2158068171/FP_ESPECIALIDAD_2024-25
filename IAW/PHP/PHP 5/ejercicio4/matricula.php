<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    
    <form method="POST" >

        <h1>Matriculacion</h1>
            <input type="text" placeholder="Introduzca DNI" name="dni">
            <h2>Asignaturas</h2>

            <input type="checkbox" name="asignatura[]" value="1">IAW<br>
            <input type="checkbox" name="asignatura[]" value="2">SAD<br>
            <input type="checkbox" name="asignatura[]" value="3">ASOR<br>
            <input type="checkbox" name="asignatura[]" value="4">ASGBD<br>
            <input type="checkbox" name="asignatura[]" value="5">EIE<br>
            <input type="checkbox" name="asignatura[]" value="6">SREIN<br>
            <input type="submit" >
       
    </form>
</body>
</html>


<?php

include_once 'funciones.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $dni = $_POST['dni'];
    $asignaturas = $_POST['asignatura'];


    $a = matricular_select($conexion, $dni, $asignaturas);
        if(mysqli_num_rows($a)>0)
        {
            echo "El usuario ya esta matriculado";
        } else
            {
                $b = matricular_insert($conexion, $dni, $asignaturas);
                if($b)
                    {
                     echo "Matrícula completada al alumno con dni $dni <br>";
                    }

            }

}
?>