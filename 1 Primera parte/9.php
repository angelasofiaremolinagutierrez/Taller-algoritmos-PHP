<?php
// Escribe un algoritmo que determine el IVA (19%) de una venta realizada
// indicando el valor original, el valor del IVA y el valor de la venta con IVA incluido.

$Valor = floatval($_POST['Valor']);
$IVA = $Valor*0.19;
$Total = $Valor + $IVA;

echo "Valor original: $Valor <br/>";
echo "Valor del IVA: $IVA <br/>";
echo "Valor del total: $Total <br/>";
?>