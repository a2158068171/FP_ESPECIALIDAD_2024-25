<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sumat = 1;
    for ($i = 1; $i <= 100; $i++) {
        $square = pow($i, 2);
        $sumat += $square;
    }
    echo $sumat;
    ?>
   
</body>
</html>