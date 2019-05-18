<?php

$str = strval($_POST['Cargas']);
$cad = explode(",", $str);
$sum = 0;

for ($i=0; $i<count($cad) ; $i++) {
    $cad[$i] = floatval($cad[$i]);
}

for ($i=0; $i<count($cad) ; $i++) {
    if ($cad[$i]>0 and $cad[$i]<=25) {
        $sum = $sum;
    }elseif ($cad[$i]<=300) {
        $sum = $sum + $cad[$i]*1500;
    }elseif ($cad[$i]<=500) {
        $sum = $sum + $cad[$i]*2500;
    }
}

$cant = count($cad);
$pes = max($cad);
$min = min($cad);
$pro = array_sum($cad)/$cant;
$pesos = $sum;
$dolares = round($pesos/3294.45, 2);

if (array_sum($cad)>18000) {
    echo "<h3>Capacidad de carga excedido</h3></br>";
}else {
    echo "<h3>Número total de bultos: $cant</h3></br>";
    echo "<h3>Bulto más pesado: $pes [kg]</h3></br>";
    echo "<h3>Bulto más liviano: $min [kg]</h3></br>";
    echo "<h3>Peso promedio: $pro [kg]</h3></br>";
    echo "<h3>Ingreso pesos: $pesos</h3></br>";
    echo "<h3>Ingreso dolares: $dolares</h3></br>";
}

?>