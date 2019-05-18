<?php
// Escribe un algoritmo que determine el IVA (19%) de una venta, si esta es mayor a
// 150.000 aplicar un descuento del 5%

$num = floatval($_POST['Numero']);
$iva = $num*0.19;
$val = $num + $iva;

echo "<h3>Valor: $num</h3>";
echo "<h3>IVA: $iva</h3>";

if ($num>150000){
    $des = $val*0.05;
    $tot = $val - $des;
    echo "<h3>Descuento: $des</h3>";
}else{
    $tot = $val;
    echo "<h3>Descuento: 0</h3>";
}
echo "<h3>Total: $tot</h3>";

?>