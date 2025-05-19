<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>
<body>
    <table border="1">
        <tr>
            <?php
            // Recorremos 5 columnas
            for ($columna = 0; $columna < 5; $columna++) {

                
                print "<td>";

                // Recorremos 10 filas por cada columna
                for ($fila = 1; $fila <= 10; $fila++) {

                    // Calculamos el número sumando la columna y fila actual
                    $numero = $columna * 10 + $fila;

                    
                    print "• " . $numero . "<br>";
                }

                // Cerramos la celda de esa columna
                print "</td>";
            }
            ?>
        </tr>

        <tr>
            <?php
            // Recorremos 5 columnas
            for ($col = 0; $col < 5; $col++) {

              
                print "<td>";

                // Calculamos el número inicial para esta columna
                $inicio = 100 - ($col * 10); // 100, 90, 80, 70, 60

                // Mostramos 10 valores que bajan de uno en uno
                for ($fila = 1; $fila <= 10; $fila++) {

                   
                    print $fila . ". " . ($inicio - $fila + 1) . "<br>";
                }

               
                print "</td>";
            }
            ?>
        </tr>
    </table>
</body>
</html>
