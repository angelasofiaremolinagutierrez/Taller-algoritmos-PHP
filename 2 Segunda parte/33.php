<?php
// Escribe un algoritmo que lea dos números y determine el mayor de ellos.

$n1 = floatval($_POST['Numero1']);
$n2 = floatval($_POST['Numero2']);

if ($n1 == $n2){
    echo "<h3>Los números son iguales</h3>";
}elseif ($n1 > $n2) {
    echo "<h3>$n1 es mayor que $n2</h3>";
}else{
    echo "<h3>$n2 es mayor que $n1</h3>";
}
?>