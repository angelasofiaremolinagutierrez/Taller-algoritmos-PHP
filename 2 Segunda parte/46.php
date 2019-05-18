<?php
// Escribe un algoritmo que lea 3 números e indique si al menos 2 de ellos son iguales.

$n1 = floatval($_POST['Numero1']);
$n2 = floatval($_POST['Numero2']);
$n3 = floatval($_POST['Numero3']);


if ($n1==$n2 or $n1==$n3 or $n2==$n3) {
    echo "<h3>True</h3>";
}else {
    echo "<h3>False</h3>";
}

?>