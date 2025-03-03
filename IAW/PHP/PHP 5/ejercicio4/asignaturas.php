
<?php
include_once 'funciones.php';

$resultado = asignaturas($conexion);



    if(mysqli_num_rows($resultado) > 0) 
        {               
            echo "<h2>Lista de asignaturas</h2> <br>";
            while($array = mysqli_fetch_assoc($resultado))
            {

                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>codigo ".$array['codigo']."</th>"; 
                echo "<th>nombre ".$array['nombre']."</th>";
                echo "<th>creditos".$array['creditos']."</th>";
                echo "</tr>";
                echo "</table>";
            }
        } else 
            {
                echo 'Error o no hay datos';
            }

?>