<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i = 5; $i <= 20000; $i ++){
        echo $i."<br>";
        if ($i == 15000){
            break;
        }   
    }

    ?>
</body>
</html>