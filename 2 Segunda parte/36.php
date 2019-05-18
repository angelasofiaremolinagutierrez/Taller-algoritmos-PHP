<?php
// Escribe un algoritmo que lea tres números y determine si la suma del primero y el
// segundo es mayor o menor que el tercero.

$n1 = floatval($_POST['Numero1']);
$n2 = floatval($_POST['Numero2']);
$n3 = floatval($_POST['Numero3']);
$sum = $n1 + $n2;

if ($sum == $n3) {
    echo "<h3>$n1+$n2 = $n3</h3>";
}elseif ($sum > $n3) {
    echo "<h3>$n1+$n2=$sum > $n3</h3>";
}
else {
    echo "<h3>$n1+$n2=$sum < $n3</h3>";
}
?>