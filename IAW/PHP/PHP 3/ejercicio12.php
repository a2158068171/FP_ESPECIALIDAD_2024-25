<?php
    
    $numero = intval( $_POST['num1']) ;//0
    $suma = 0;
    for ($i = 1; $i <= 100; $i++)
    {
        //$suma += ($numero+$i);
        $suma = $suma + ($numero+$i);
    }
    echo $suma;
?>