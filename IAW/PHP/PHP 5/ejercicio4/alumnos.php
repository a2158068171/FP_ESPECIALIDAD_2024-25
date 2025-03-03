<?php
include_once 'funciones.php';

$resultado = alumnos($conexion);

    if(mysqli_num_rows($resultado) > 0) 
        {               
            echo "<h2>alumnos </h2> <br>";
            while($array = mysqli_fetch_assoc($resultado))
            {

                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>dni:   ".$array['dni']."</th>"; 
                echo "<th>nombre: ".$array['nombre']."</th>";
                echo "<th>apellidos:".$array['apellidos']."</th>";
                echo "<th>localidad:".$array['localidad']."</th>";
                echo "</tr>";
                echo "</table>";
            }
        } else 
            {
                echo 'Error o no hay datos';
            }

?>