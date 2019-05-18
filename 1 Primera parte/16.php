<?php
// Escribe un algoritmo que determine la velocidad final de un objeto luego de un tiempo,
// si se sabe que va en línea recta y además se conoce su aceleración.

$t = floatval($_POST['Tiempo']);
$a = floatval($_POST['Aceleracion']);
$vf = $a*$t;

echo "<h3>Velocidad final: $vf [m/s]<br/></h3>";
?>