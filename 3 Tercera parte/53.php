<?php
// Realizar un algoritmo que, dado dos textos, determine si el segundo contiene el
// primero.

$tex1 = strval($_POST['Texto']);
$cad1 = strval($_POST['Cadena']);
$tex2 = strtolower($tex1);
$cad2 = strtolower($cad1);

$pos = strpos($tex2, $cad2);

if ($pos === false) {
    echo "<h3>$cad1 no se encuentra en $tex1</h3>";
}else {
    echo "<h3>$cad1 se encuentra en $tex1</h3>";
}
?>