<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $kilobytes = 123124214213;
        $megabytes = ($kilobytes/1024);
        $terabytes = ($kilobytes/1e9);
        echo $kilobytes." kilobytes <br>";
        echo "de kilobyte a megabyte equivale a ".$megabytes;
        echo "<br> de kilobyte a terabytes es ".$terabytes;
    ?>
</body>
</html>