<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TP1 - Ejercicio 3</title>
</head>
<body>

<?php
// Genera párrafos con tamaños de fuente de 10px a 100px
for ($tamaño = 10; $tamaño <= 100; $tamaño += 10) {// Bucle for que comienza en 10 y aumenta de a 10 hasta llegar a 100
    print "<p style='font-size: " . $tamaño . "px'>Ejercicio 3</p>";
}
?>

</body>
</html>
