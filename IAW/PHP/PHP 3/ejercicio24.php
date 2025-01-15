<?php

$num1 = $_POST['num1'];

switch ($num1){

case 0: echo "num1 es igual a 0"; break;
case 1: echo "num1 es igual a 1"; break;
case 2: echo "num1 es igual a 2"; break;
case 3: echo "num1 es igual a 3"; break;
default: echo "adonde vas que el numero no es ni 0 ni 1 ni 2 ni tres, espabila que la vida te come ";
// al quitar el break se vuelve un poco raro el programa, es decir si quitamos el break del case, al introducir el 1 nos dara el resultado 2, 
//y pasa lo mismo si lo hacemos con el 2
}
?>