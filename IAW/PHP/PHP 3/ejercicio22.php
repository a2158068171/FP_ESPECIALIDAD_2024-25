<?php

$n= floatval($_POST['n']);

$resultado =1;
for ($i = 1; $i <= $n; $i += 1){
    $resultado *= $i;
    
}
echo "el factorial es $resultado";
?>