<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        nombre de usuario
        <input type="text" name="usuario"><br><br>
        fecha de nacimiento 
        <input type="date" name="date"><br><br>
        <input type="submit">
    </form>
</body>
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['date'] = $_POST['date'];

    echo '<a href="ejercicio1b.php">Pagina 2 redigir</a>';
}

?>
