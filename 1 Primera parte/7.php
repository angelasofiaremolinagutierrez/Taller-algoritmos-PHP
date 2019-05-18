<?php
// Escribe un algoritmo que lea un número decimal e imprima su parte entera y su parte
// decimal por aparte.

$numero = floatval($_POST['decimal']);
$entero = intval($numero);
$decimal = $numero - $entero;

echo "Numero: $numero </br>";
echo "Parte entera: $entero </br>";
echo "Parte decimal: $decimal </br>";
?>