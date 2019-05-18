<?php
// Escribe un algoritmo que dadas coordenadas x1,y1 y x2,y2 en el plano cartesiano calcule
// la distancia entre ellos (considere todos los valores positivos)

$x1 = abs(floatval($_POST['X1']));
$y1 = abs(floatval($_POST['Y1']));
$x2 = abs(floatval($_POST['X2']));
$y2 = abs(floatval($_POST['Y2']));
$D = sqrt(($x2-$x1)**2+($y2-$y1)**2);
echo "<h3>Distancia: $D<br/></h3>";
?>