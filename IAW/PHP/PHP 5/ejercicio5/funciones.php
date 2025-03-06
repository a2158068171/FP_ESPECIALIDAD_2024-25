<?php

include_once 'conexion.php';

//function crearbbdd($conexion)

function instrumento($conexion, $nombre, $tipo, $origen, $modelo)
    {
        $sql = "SELECT * from instrumento where nombre= '$nombre' and tipo = '$tipo' and origen = '$origen' and modelo = '$modelo'";
        $resultado = mysqli_query($conexion, $sql);
        $isInDB = mysqli_num_rows($resultado)>0;
        
        if ($isInDB)
        {
            echo "El instrumento ya existe";
        } 
        else //sino est'a en bd podemos insertarlo
        {
            if (instrumento_insert($conexion, $nombre, $tipo, $origen, $modelo))
            {
                echo "instrumento añadido correctamente";
            } 
            else 
            {
                echo "error al añadir el instrumento ";
            }
        }
    }

function instrumento_insert($conexion, $nombre, $tipo, $origen, $modelo) 
    {
        $sql = "INSERT INTO instrumento(nombre, tipo, origen, modelo) VALUES ('$nombre', '$tipo', '$origen', '$modelo')";
        $resultado = mysqli_query($conexion, $sql);
        return $resultado;
       
    }

function instrumento_code($conexion, $codigo)
    {
        $sql = "SELECT * from instrumento where codigo = '$codigo' ";
        $resultado = mysqli_query($conexion, $sql);
        $isInDB = mysqli_num_rows($resultado)>0;
    
        if($isInDB)
            {
                echo "<h2>Lista de instrumentos </h2> <br>";
                while($array = mysqli_fetch_assoc($resultado))
                    {
                        echo "<table border='1'>";
                        echo "<tr>";
                        echo "<th>codigo: ".$array['codigo']."</th>";
                        echo "<th>nombre:".$array['nombre']."</th>";
                        echo "<th>tipo:".$array['tipo']."</th>";
                        echo "<th>origen:".$array['origen']."</th>";
                        echo "<th>modelo:".$array['modelo']."</th>";
                        echo "</tr>";
                        echo "</table>";
                    }
            } else 
                {
                    echo "no existe en la bbdd";
                }    
   
    }

function instrumento_select($conexion)
    {
        $sql = "SELECT * from instrumento ";
        $resultado = mysqli_query($conexion, $sql);
        $isInDB = (mysqli_num_rows($resultado)>0); 

        if($isInDB)
        {
            echo "<h2>Lista de los instrumentos</h2> <br>";
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>codigo </th>";
            echo "<th>nombre</th>";
            echo "<th>tipo</th>";
            echo "<th>crigen</th>";
            echo "<th>modelo</th>";
            echo "</tr>";
            while ($array = mysqli_fetch_assoc($resultado))
                {

                    echo "<tr>";
                    echo "<td>".$array['codigo']."</td>";
                    echo "<td>".$array['nombre']."</td>";
                    echo "<td>".$array['tipo']."</td>";
                    echo "<td>".$array['origen']."</td>";
                    echo "<td>".$array['modelo']."</td>";
                    echo "</tr>";

                }
                echo "</table>";

        }
    }

function instrumento_nombre($conexion, $nombre)
    {
        $sql = "SELECT * from instrumento where nombre = '$nombre' ";
        $resultado = mysqli_query($conexion, $sql);
        
        $isInDB =(mysqli_num_rows($resultado)>0);


        if($isInDB)
        {
            echo "<h2>Lista de instrumentos  </h2> <br>";
            while($array = mysqli_fetch_assoc($resultado))
                {
                    echo "<table border='1'>";
                    echo "<tr>";
                    echo "<th>codigo: ".$array['codigo']."</th>";
                    echo "<th>nombre:".$array['nombre']."</th>";
                    echo "<th>tipo:".$array['tipo']."</th>";
                    echo "<th>origen:".$array['origen']."</th>";
                    echo "<th>modelo:".$array['modelo']."</th>";
                    echo "</tr>";
                    echo "</table>";
                }
        } else 
            {
                echo "no existe en la bbdd";
            }    
    }

function instrumento_tipo($conexion, $tipo)
    {
        $sql = "SELECT * from instrumento where tipo = '$tipo'";
        $resultado = mysqli_query($conexion, $sql);
        $isInDB = (mysqli_num_rows($resultado)>0);
        if($isInDB)
        {
            echo "<h2>Lista de instrumentos  </h2> <br>";
            while($array = mysqli_fetch_assoc($resultado))
                {
                    echo "<table border='1'>";
                    echo "<tr>";
                    echo "<th>codigo: ".$array['codigo']."</th>";
                    echo "<th>nombre:".$array['nombre']."</th>";
                    echo "<th>tipo:".$array['tipo']."</th>";
                    echo "<th>origen:".$array['origen']."</th>";
                    echo "<th>modelo:".$array['modelo']."</th>";
                    echo "</tr>";
                    echo "</table>";
                }
        } else 
            {
                echo "no existe en la bbdd";
            }    
    }

function instrumento_origen($conexion, $origen)
    {
        $sql = "SELECT * from instrumento where origen = '$origen'";
        $resultado = mysqli_query($conexion, $sql);
        $isInDB =(mysqli_num_rows($resultado)>0);
           
        if($isInDB)
            {
                echo "<h2>Lista de instrumentos  </h2> <br>";
                while($array = mysqli_fetch_assoc($resultado))
                    {
                        echo "<table border='1'>";
                        echo "<tr>";
                        echo "<th>codigo: ".$array['codigo']."</th>";
                        echo "<th>nombre:".$array['nombre']."</th>";
                        echo "<th>tipo:".$array['tipo']."</th>";
                        echo "<th>origen:".$array['origen']."</th>";
                        echo "<th>modelo:".$array['modelo']."</th>";
                        echo "</tr>";
                        echo "</table>";
                    }
            } else 
                {
                    echo "no existe en la bbdd";
                }    
   

    }   

?>