<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $precio = 10;
        $descuento = 0.1;
        $preciofinal = $precio - ($precio * $descuento);
        echo "Un producto de farmacia que esta valorado en 10, se le aplica un descuento del 10% y se le queda en ".$preciofinal;
    ?>

</body>
</html>