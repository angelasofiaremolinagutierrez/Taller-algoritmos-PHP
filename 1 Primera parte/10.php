<?php
// Escribe un algoritmo que imprima el área y el perímetro de un círculo.

$pi = 3.14159265358979323;
$radio = floatval($_POST['radio']);
$area = $pi*$radio**2;
$perimetro = 2*$pi*$radio;

echo "Área: $area <br/>";
echo "Perímetro: $perimetro <br/>";
?>