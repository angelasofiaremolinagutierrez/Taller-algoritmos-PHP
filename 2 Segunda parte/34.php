<?php
// Escribe un algoritmo que lea tres números y determine el mayor de ellos.

$n1 = floatval($_POST['Numero1']);
$n2 = floatval($_POST['Numero2']);
$n3 = floatval($_POST['Numero3']);
$max = max($n1, $n2, $n3);
echo "<h3>$max es el número mayor</h3>";

?>