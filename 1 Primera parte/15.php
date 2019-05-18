<?php
// Escribe un algoritmo que determine la distancia recorrida por un objeto luego de una
// cantidad de tiempo, si se sabe que va en línea recta y además se conoce su aceleración
// y su velocidad.

$t = floatval($_POST['Tiempo']);
$v = floatval($_POST['Velocidad']);
$a = floatval($_POST['Aceleracion']);
$x = $v*$t + 0.5*$a*$t**2;

echo "<h3>Distancia recorrida: $x [m]<br/></h3>";
?>