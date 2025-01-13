<?php

$num1 = $_POST['num1'];

for ($i = 1; $i <= 10; $i++) {
    $multi= ($num1*$i);
    echo $multi."<br>";
}
?>