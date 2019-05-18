<?php
// Escribe un algoritmo que determine la energía (en Jules) de un objeto si se conoce la
// masa de un objeto (en kg) y la velocidad de la luz (en m/s).

$c = 3*10**8;
$m = floatval($_POST['Masa']);
$e = $m*$c**2;

echo "<h3>Energía: $e [J]<br/></h3>";
?>