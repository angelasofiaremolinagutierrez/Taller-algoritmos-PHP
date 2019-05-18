<?php
// Escribe un algoritmo que lea n números y calcule su suma y su promedio.


$str = strval($_POST['Numeros']);
$cad = explode(",", $str);
$sum = 0;

for ($i=0; $i<count($cad) ; $i++) {
    $cad[$i] = floatval($cad[$i]);
    $sum = $cad[$i] + $sum;
}

$pro = $sum/count($cad);
echo "<h3>El promedio es: $pro</h3>"; 

?>