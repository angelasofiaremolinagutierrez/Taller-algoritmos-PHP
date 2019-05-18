<?php
// Escriba un algoritmo que dado un texto determine cuántos espacios, letras, números u
// otros caracteres

$c1 = strval($_POST['Cadena1']);
$num = strlen($c1);
echo "<h3>$c1 tiene $num caracteres</h3>";

?>