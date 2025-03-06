<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>añadir insterpretacion</h2>
    <form method="POST">
        Codigo de la obra
        <input type="number" name="codigo_obra">
        <br><br>
        Codigo del instrumento 
        <input type="number" name="codigo_instrumento">
        <br><br>
        <input type="submit">
    </form>

    <?php
    include_once 'funciones.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $codigo_obra = $_POST['codigo_obra'];
        $codigo_instrumento = $_POST['codigo_instrumento'];
        interpretacion_select($conexion, $codigo_obra, $codigo_instrumento);

    }   
    ?>
</body>
</html>
