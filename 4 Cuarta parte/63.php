<?php
// Escribe un algoritmo que lea 10 números y calcule su suma y su promedio.

$n1 = strval($_POST['n1']);
$n2 = strval($_POST['n2']);
$n3 = strval($_POST['n3']);
$n4 = strval($_POST['n4']);
$n5 = strval($_POST['n5']);
$n6 = strval($_POST['n6']);
$n7 = strval($_POST['n7']);
$n8 = strval($_POST['n8']);
$n9 = strval($_POST['n9']);
$n10 = strval($_POST['n10']);

$str = strval("$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10");
$cad = explode(" ", $str);
$sum = 0;

for ($i=0; $i<count($cad) ; $i++) {
    $cad[$i] = floatval($cad[$i]);
    $sum = $cad[$i] + $sum;
}

$pro = $sum/count($cad);
echo "<h3>El promedio es: $pro</h3>"; 

?>