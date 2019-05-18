<?php
// Escribe un algoritmo que dados tres números calcule el promedio de dichos números.

$n1 = floatval($_POST['Valor1']);
$n2 = floatval($_POST['Valor2']);
$n3 = floatval($_POST['Valor3']);

$Prom = ($n1 + $n2 + $n3)/3;

echo "Promedio: $Prom";
?>