<?php
// Escribe un algoritmo que calcule el área de cualquier polígono.

$n = strval($_POST['Lados']);
$lon = strval($_POST['Lado']);
$Area = $lon/(2*tan(pi()/$n));

echo "<h3>El área es: $Area</h3>";
?>