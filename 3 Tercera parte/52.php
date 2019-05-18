<?php
// Realizar un algoritmo que, dado un texto, determine si comienza una palabra digitada
// por el usuario (ignorando mayúsculas o minúsculas).

$tex = strval($_POST['Texto']);
$cad = strval($_POST['Cadena']);

$t = strtolower(explode(' ', $tex)[0]);
$c = strtolower($cad);

if ($t === $c) {
    echo "<h3>true</h3>";
}else {
    echo "<h3>false</h3>";
}
?>