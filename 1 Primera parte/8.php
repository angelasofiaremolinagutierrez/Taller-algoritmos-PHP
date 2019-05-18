<?php
// Escribe un algoritmo que lea las cinco notas obtenidas por un estudiante
// y calcule su nota final, sabiendo que las cada nota tiene el siguiente valor:
// n1 (15%), n2 (20%), n3(15%), n4(30%), n5 (20%).

$n1 = floatval($_POST['Nota1']);
$n2 = floatval($_POST['Nota2']);
$n3 = floatval($_POST['Nota3']);
$n4 = floatval($_POST['Nota4']);
$n5 = floatval($_POST['Nota5']);

$final = $n1*0.15 + $n2*0.2 + $n3*0.15 + $n4*0.3 + $n5*0.2;

echo "Nota final: $final";
?>