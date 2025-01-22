<?php
if (!empty(intval($_POST['num1'])))
{
    $num1 = $_POST['num1'];

    $binario = decbin(intval($num1));
    echo "el numero $num1 equivale en binario a $binario";
}

?>

