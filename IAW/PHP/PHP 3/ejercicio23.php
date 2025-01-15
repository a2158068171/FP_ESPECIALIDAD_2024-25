<?php

$f = floatval($_POST['f']);

if ($f <= 999){
    $c = 5/9*($f -32);
    echo "La temperatura de $f Fahrenheit equivale a $c Celsius";
} else {
    echo "a donde vas, te piensas que esto es el sol ?";
}
?>
