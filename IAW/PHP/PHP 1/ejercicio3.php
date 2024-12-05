<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 3 php</title>
</head>
<body>
    <p>
        <?php // Esto sirve para comentar //
        echo " <h2>¿Qué significa <?php? </h2>"; ?>
        <?php echo "<p>  Sirve para abrir la etiqueta de codigo php </p>"; ?>   
        <br>

        <?php /*Y esto otra forna de comentar */ 
        echo "<h2>¿Para qué sirve echo?</h2> "; ?>
       <?php echo "<p>sirve para mostrar el texto pasado como parametro entrecomillas</p> "; ?>     
        <br> 

        <?php echo "<h2>¿Qué ocurre cuando ejecutas el archivo en un servidor?</h2> "; ?><br>
        <?php echo "<p> Necesita ser interpretado por un servidor porque el navegador no sabe interpretar PHP.
        El servidor sí que devolverá HTML al navegador.  </p>"; ?>
    </p>

</body>
</html>