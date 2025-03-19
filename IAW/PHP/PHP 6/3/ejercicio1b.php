<?php
session_cache_expire(1440);
session_start();



if (!isset($_SESSION['usuario'])) {
    echo "No hay datos registrados.";
} else {
    foreach ($_SESSION as $clave => $valor) {
        echo "$clave: $valor <br>";
    }
}
?>