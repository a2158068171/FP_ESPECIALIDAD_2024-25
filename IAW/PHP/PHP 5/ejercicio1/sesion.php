<?php
include 'datos.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];

    $resultado = comprobar($conexion, $Usuario, $Contraseña);

    
    if(mysqli_num_rows($resultado) > 0){
        while($row = mysqli_fetch_array($resultado)){
            echo "Bienvenido:" . " "  . $row['Nombre'] . " ". $row['Apellidos'];
            echo "<br>";
            echo "DNI:" ." ". $row['Dni'];
            echo '<br>';
            echo "Localidad:" ." ". $row['Localidad'];
            echo '<br>';
            echo "Centro_Estudio:"." " . $row['Centro_Estudio'];
            echo '<br>';
        }
    } else {
        echo '<script>
        alert("Los usuarios no coinciden");
        </script>
        ';
    }
}
?>