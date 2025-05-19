<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TP1 - Ejercicio 4</title>
</head>
<body>


<table border="1">
<?php
// Bucle que recorre los números del 1 al 50
for ($numero = 1; $numero <= 50; $numero++) {
    // Nueva fila en la tabla
    print "<tr>";

    // Primera columna: muestra el número actual
    print "<td>" . $numero . "</td>";

    // Segunda columna: muestra Fizz, Buzz o FizzBuzz según el número
    if ($numero % 3 == 0 && $numero % 5 == 0) {
        // Si el número es múltiplo de 3 y de 5, muestra FizzBuzz
        print "<td>FizzBuzz</td>";
    } elseif ($numero % 3 == 0) {
        // Si el número es solo múltiplo de 3, muestra Fizz
        print "<td>Fizz</td>";
    } elseif ($numero % 5 == 0) {
        // Si el número es solo múltiplo de 5, muestra Buzz
        print "<td>Buzz</td>";
    } else {
        // Si no es múltiplo de ninguno, la celda queda vacía
        print "<td></td>";
    }

    
    print "</tr>";
}
?>
</table>

</body>
</html>
