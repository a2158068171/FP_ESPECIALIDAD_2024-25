<?php

use Dom\Mysql;

include_once 'conexion.php';

function obra_select($conexion, $nombre, $autor, $ano)
    {
        $sql = "SELECT * from obras where nombre_obra = '$nombre' and autor = '$autor' and ano_creacion = '$ano'";
        $resultado = mysqli_query($conexion, $sql);
        $isIndb =  mysqli_num_rows($resultado)>0;

        if ($isIndb)
        {
            echo "Ya existe esta obra en la bbdd";
        }else
        {
            if (obra_insert($conexion, $nombre, $autor, $ano))
                {
                    echo "se ha añadido correctamenta la obra";
                }else
                    {
                    echo "error al añadir en la bbdd";
                    }
        }           


    }

function obra_insert($conexion, $nombre, $autor, $ano)
    {
        $sql = "INSERT INTO obras (nombre_obra, autor, ano_creacion) values ('$nombre', '$autor', '$ano')";
        $resultado = mysqli_query($conexion, $sql);
        return $resultado;
        
    }

function interpretacion_select($conexion, $codigo_obra, $codigo_instrumento){
    $sql = "SELECT * from interpretacion where codigo_obra = '$codigo_obra' and codigo_instrumento = '$codigo_instrumento'";
    $query = mysqli_query($conexion, $sql);
    $isIndb = mysqli_num_rows($query) > 0;
    if($isIndb){
        echo "La obra ya esta insertada";
    } else 
        { if(interpretacion_insert($conexion, $codigo_obra, $codigo_instrumento))
            {
                echo "Se ha insertado la obra";
            } else 
                {
                    echo "error";
                }
        }
    }

function interpretacion_insert($conexion, $codigo_obra, $codigo_instrumento){
    $sql = "INSERT INTO interpretacion(codigo_obra, codigo_instrumento) VALUES ('$codigo_obra', '$codigo_instrumento')";
    $query = mysqli_query($conexion, $sql);
    return $query;
}


function obra_codigo($conexion, $codigo_obra)
{
    $sql = "SELECT * from obras where codigo_obra  = '$codigo_obra' ";
    $resultado = mysqli_query($conexion, $sql);
    $isIndb = mysqli_num_rows($resultado)>0;
    if($isIndb)
    {
        echo "<h1>Obras</h1>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>codigo_obra</td>";
        echo "<td>nombre_obra</td>";
        echo "<td>autor</td>";
        echo "<td>año_creacion</td>";
        echo "</tr>";
        while ($array = mysqli_fetch_assoc($resultado))
            {
                echo "<tr>";
                echo "<td>".$array['codigo_obra']."</td>";
                echo "<td>".$array['nombre_obra']."</td>";
                echo "<td>".$array['autor']."</td>";
                echo "<td>".$array['ano_creacion']."</td>";
                echo "</tr>";
            }

        echo "</table>";
    } else 
        {
            echo "no existe esa obra";
        }
}


function obra_nombre($conexion, $codigo_nombre)
{
    $sql = "SELECT * from obras where nombre_obra = '$codigo_nombre'";
    $resultado = mysqli_query($conexion, $sql);
    $isIndb = mysqli_num_rows($resultado)>0;

    if ($isIndb)
    {
        echo "<h1>Obras</h1>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>codigo_obra</td>";
        echo "<td>nombre_obra</td>";
        echo "<td>autor</td>";
        echo "<td>año_creacion</td>";
        echo "</tr>";
        while ($array = mysqli_fetch_assoc($resultado))
            {
                echo "<tr>";
                echo "<td>".$array['codigo_obra']."</td>";
                echo "<td>".$array['nombre_obra']."</td>";
                echo "<td>".$array['autor']."</td>";
                echo "<td>".$array['ano_creacion']."</td>";
                echo "</tr>";
            }

    }else
        {
            echo "no existe el nombre ";
        }

}


function interpretacion_instrumento($conexion, $codigo_instrumento)
{
    $sql = "SELECT i.id, i.codigo_obra, i.codigo_instrumento from interpretacion i inner join instrumento it on i.codigo_instrumento = it.codigo
    where i.codigo_instrumento = '$codigo_instrumento'";
    $resultado = mysqli_query($conexion, $sql);
    $a = mysqli_num_rows($resultado)>0;
    
    if ($a)
    {
        echo "<h1>Interpretacion</h1>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td> id interpretacion </td>";
        echo "<td> codigo obra</td>";
        echo "<td> codigoinstrumento </td>";
        echo "</tr>";
        while ($array = mysqli_fetch_assoc($resultado))
            {
                echo "<tr>";
                echo "<td>".$array['id']."</td>";
                echo "<td>".$array['codigo_obra']."</td>";
                echo "<td>".$array['codigo_instrumento']."</td>";
                echo "</tr>";
            }


        echo "</table>";
    } else
        {
            echo "no existe el id del instrumento  ";
        }


} 


function interpretacion_obra($conexion, $nombre_obra)
{
    $sql = "SELECT i.id, i.codigo_obra, i.codigo_instrumento from interpretacion i inner join obras ob on i.codigo_obra=ob.codigo_obra
    where ob.nombre_obra = '$nombre_obra'";
    $resultado = mysqli_query($conexion, $sql);
    $a = mysqli_num_rows($resultado)>0;
    if ($a)
    {
        echo "<h1>Interpretacion</h1>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td> id interpretacion </td>";
        echo "<td> codigo obra</td>";
        echo "<td> codigoinstrumento </td>";
        echo "</tr>";
        while ($array = mysqli_fetch_assoc($resultado))
            {
                echo "<tr>";
                echo "<td>".$array['id']."</td>";
                echo "<td>".$array['codigo_obra']."</td>";
                echo "<td>".$array['codigo_instrumento']."</td>";
                echo "</tr>";
            }   echo "</table>";
    } else
    {
        echo "no existe el id del instrumento  ";
    }
}
?>