<?php
// Escriba un algoritmo que, dado un texto largo, determine la penúltima palabra del texto.

$s1 = strval($_POST['Cadena1']);
$c2 = explode(' ', $s1);
$s2 = $c2[count($c2)-2];
echo "<h3>$s2</h3>";

?>