<?php
include_once 'funciones.php';

$resultado = matricular_info($conexion);

    if(mysqli_num_rows($resultado) > 0) 
        {               
            echo "<h2>matriculas </h2> <br>";
            while($array = mysqli_fetch_assoc($resultado))
            {

                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>id:   ".$array['id']."</th>"; 
                echo "<th>dni: ".$array['dni_alumno']."</th>";
                echo "<th>codigo asignatura:".$array['codigo_asignatura']."</th>";
                echo "</tr>";
                echo "</table>";
            }
        } else 
            {
                echo 'Error o no hay datos';
            }

?>