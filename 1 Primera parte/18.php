<?php
// Escribe un algoritmo que ayude a encontrar la Fuerza entre dos objetos en el espacio
// usando la segunda Ley de Newton.

$G = 6.674*10**-11;
$m1 = floatval($_POST['Masa1']);
$m2 = floatval($_POST['Masa2']);
$r = floatval($_POST['Distancia']);
$F = $G*$m1*$m2/$r**2;

echo "<h3>Fuerza: $F [N]<br/></h3>";
?>