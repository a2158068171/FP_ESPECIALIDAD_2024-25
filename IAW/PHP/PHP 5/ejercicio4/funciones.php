<?php
include_once 'conexion.php';


function insertar($conexion,$dni, $nombre, $apellidos, $localidad, $ano_inicio, $modo_acceso){
    $insertar = "INSERT INTO alumnos(dni, nombre, apellidos, localidad, ano_inicio, modo_acceso) 
    VALUES ('$dni', '$nombre', '$apellidos', '$localidad', '$ano_inicio', '$modo_acceso')";
    $query = mysqli_query($conexion, $insertar);
    return $query;
}



function matricular_select($conexion, $dni, $asignaturas )
{        
    foreach ($asignaturas as $codigo) 
    {
        $unico = "SELECT dni_alumno from matriculas where dni_alumno='$dni' and codigo_asignatura='$codigo'";
        $consulta = mysqli_query($conexion, $unico);
       
    }
    return $consulta;
}

function matricular_insert($conexion, $dni, $asignaturas)
{
    foreach($asignaturas as $codigo)
    {
        $matriculacion = "INSERT IGNORE INTO matriculas (dni_alumno, codigo_asignatura) VALUES ('$dni', $codigo)";
        $consulta2 = mysqli_query($conexion, $matriculacion);
       
    }
    return $consulta2;
}


function asignaturas($conexion)
    {
        $asignatura = "SELECT codigo, nombre, creditos from asignaturas";
        $resultado = mysqli_query($conexion, $asignatura);
        return $resultado;
    }

function alumnos($conexion)
    {
        $alumnos = "SELECT * from alumnos";
        $resultado = mysqli_query($conexion, $alumnos);
        return $resultado;
    }



function matricular_info($conexion)
    {
        $matricula = "SELECT * from matriculas";
        $resultado = mysqli_query($conexion, $matricula);
        return $resultado;
    }

?>