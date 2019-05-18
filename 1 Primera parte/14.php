<?php
// Escribe un algoritmo que determine el tiempo de caída de un objeto que se suelta desde 
// una altura h.

$k = 1/9.8;
$h = floatval($_POST['Altura']);
$t = sqrt(2*$k*$h);

echo "<h3>Tiempo de caída: $t [s]<br/></h3>";
?>