    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $edad = rand(0, 120);

            if ($edad <14){
                echo "Con $edad años estas en la edad de infancia";

            } elseif ($edad > 14 && $edad < 26 ){
                echo "Con $edad años estas en la edad de juventud";

            } elseif ($edad > 27 && $edad < 59){
                echo "Con $edad años estas en la edad de adultez";
                
            } else{
                echo "Con $edad años estas en la edad de personas mayores";
                
            } 






//Según la edad de una persona, lo clasificaremos en las siguientes etapas: Infancia (menor de
//catorce años), Juventud (entre catorce y 26 años), Adultez (entre 27 y 59 años) y personas mayores (igual o
//superiores a 60 años). 

        ?>
    </body>
    </html>