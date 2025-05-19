<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tablero de Ajedrez</title>

</head>
<body>

    <h1>Tablero de Ajedrez</h1>

    <table>
        <?php
        // Recorre las 8 filas
        for ($fila = 0; $fila < 8; $fila++) {
            print "<tr>"; // Inicia una nueva fila

            // Recorre las 8 columnas
            for ($col = 0; $col < 8; $col++) {

                // Suma la fila y la columna para decidir el color
                $suma = $fila + $col;

                // Si la suma es par, la celda será blanca
                if ($suma % 2 == 0) {
                    print "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                } 
                // Si la suma es impar, la celda será negra
                else {
                    print "<td height=30px width=30px bgcolor=#000000></td>";
                }
            }

            print "</tr>"; // Cierra la fila
        }
        ?>
    </table>

</body>
</html>
