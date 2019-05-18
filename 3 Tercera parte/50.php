<?php
// Escriba un algoritmo que, dado un texto largo, lo imprima, pero con la primera letra de
// cada palabra en mayúscula.

$c1 = strval($_POST['Cadena1']);
$c2 = ucwords($c1);
echo "<h3>$c2</h3>";

?>