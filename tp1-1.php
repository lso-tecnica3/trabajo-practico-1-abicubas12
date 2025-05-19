<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
    <style>

    </style>
</head>
<body>
    <table border ="1px">
        <tr>
            <th>X</th>
            <?php
            //Encabezado de la tabla del 1 al 10
            for ($i = 1; $i <= 10; $i++) {
                print "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        // Las filas con los números del 1 al 10
        for ($i = 1; $i <= 10; $i++) {
            print "<tr>";
            print "<th>$i</th>"; // Este es el número de la fila
            for ($j = 1; $j <= 10; $j++) {
                // Acá multiplico el número de la fila por el de la columna
                print "<td>" . ($i * $j) . "</td>";
            }
            print "</tr>";
        }
        ?>
    </table>
</body>
</html>
