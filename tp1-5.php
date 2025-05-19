<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Tabla 20x20</title>
</head>
<body>
    <table border="1">
        <?php
        $filas = 20; // Número de filas y columnas 

        // Bucle para recorrer las filas
        for ($fila = 0; $fila < $filas; $fila++) {
            print "<tr>"; // Comienzo de una fila

            // Bucle para recorrer las columnas
            for ($columna = 0; $columna < $filas; $columna++) {

                // Determina el color de la celda
                if ($fila == $columna) {
                    $color = "lime"; // Diagonal principal
                } elseif ($fila > $columna) {
                    $color = "red"; // Debajo de la diagonal
                } else {
                    $color = "blue"; // Encima de la diagonal
                }

                // Imprimir la celda con el color correspondiente
                print "<td bgcolor='$color' width='20' height='20'></td>";
            }

            print "</tr>"; 
        }
        ?>
    </table>
</body>
</html>
