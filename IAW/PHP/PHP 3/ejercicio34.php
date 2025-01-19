<?php
    $num1 = intval($_POST['num1']);

    if ($num1 >= 1000 && $num1 <= 9999) {
        // con el strval convertimos un numero entero de la variable de post Intval a strval a una cadena y con el strrev lo que hacemos es revertir la cadena de texto
        $num_reves = strrev(strval($num1));
        
        // Imprimir el número al revés
        echo "El numero del reves es $num_reves" ;
    } else {
        echo "A ver si sabes escribir un numero de 4 digitos";
    }

?>

