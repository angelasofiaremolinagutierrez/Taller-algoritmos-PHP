<?php
// Escribe un algoritmo que dado un número menor a un 100.000 determine la cantidad
// de dígitos que tiene. Por ejemplo 1093 tiene 4 dígitos.

$n = floatval($_POST['Numero1']);
$dig = 0;

if ($n < 100000) {
    if ($n >= 10000) {
        $dig = 5;
    }elseif ($n >= 1000) {
        $dig = 4;
    }elseif ($n >= 100) {
        $dig = 3;
    }elseif ($n >= 10) {
        $dig = 2;
    }elseif ($n >= 1) {
        $dig = 1;
    }
    echo "<h3>$n tiene $dig dígitos.</h3>";
}else {
    echo "$n >= 100000";
}
?>