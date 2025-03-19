<?php
session_cache_expire(1440);
session_start();


?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <form method="POST">
        Nombre
        <input type="text" name="nombre" ><br><br>
        Apellidos 
        <input type="text" name="apellidos" ><br><br>
        Ciudad
        <input type="text" name="ciudad" ><br><br>
        Provincia
        <input type="text" name="provincia" ><br><br>
        Código Postal
        <input type="number" name="codigo_postal" ><br><br>
        Edad
        <input type="number" name="edad" ><br><br>
        Usuario
        <input type="text" name="usuario" ><br><br>
        Contraseña
        <input type="password" name="password" ><br><br>
        <input type="submit" >
    </form>
    
    <br>
    <a href="principal.php">principal</a>
</body>
</html>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $infos = ['nombre', 'apellidos', 'ciudad', 'provincia', 'codigo_postal', 'edad', 'usuario', 'password'];
    $comprobar = true;

    foreach ($infos as $info) 
    {
        if (empty($_POST[$info])) {
            $comprobar = false;
            break;
     
        } 
    }

    if ($comprobar)
        {
            foreach($infos as $info)
                {
                    $_SESSION[$info] = $_POST[$info];
                }
            echo "usuario registrado corectamente";
        }else 
            {
                echo "error, haber si pones todo los campos";
            }


}
?>