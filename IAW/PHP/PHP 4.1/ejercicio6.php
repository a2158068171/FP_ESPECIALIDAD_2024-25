<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio6.php" method="post">
        <fieldset>
                <legend>jornada diario pago</legend>
                <br>
                <select name="options" >
                <option name="op" value="0">diurno</option>
                <option name="op" value="1">nocturno</option>
                </select>
                festivo
                <input type="checkbox" name='festivo'/>
                <input type="submit" value="enviar" name="enviar" />
        </fieldset>
    </form>


    <?php

    if (isset($_POST["enviar"])) {
        $op = $_POST['options'];
        $festivo = isset($_POST['festivo']) ? true : false;

        function nomina($op, $festivo) {
            $tarifaDiurna = 10;
            $tarifaNocturna = 13.5;

            if ($op == 0) { 
                $jornal = 8 * $tarifaDiurna;
                if ($festivo) {
                    $jornal *= 1.10; 
                }
            } else { 
                $jornal = 8 * $tarifaNocturna;
                if ($festivo) {
                    $jornal *= 1.15;
                }
            }

            return $jornal;
        }

        $resultado = nomina($op, $festivo);
        echo "La nomina por dia es ".$resultado;
    }



    ?>
    


</body>
</html>

