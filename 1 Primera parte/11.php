<?php
// Escribe un algoritmo que calcule el área de un hexágono.

$k = 2.598076211;
$lado = floatval($_POST['lado']);
$area = $k*$lado;

echo "Área: $area <br/>";
?>