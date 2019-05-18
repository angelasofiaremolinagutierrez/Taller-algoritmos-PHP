<?php
// Leer una cantidad variable de números e indicar el promedio de los números pares y el
// promedio de los números impares.


$str = strval($_POST['Numeros']);
$cad = explode(",", $str);
$spar = 0;
$simp = 0;
$cp = 0;
$ci = 0;

for ($i=0; $i<count($cad) ; $i++) {
    $cad[$i] = floatval($cad[$i]);
    if ($cad[$i]%2 == 0) {
        $spar = $cad[$i] + $spar;
        $cp = $cp + 1;
    }else {
        $simp = $cad[$i] + $simp;
        $ci = $ci + 1;
    }
    
}

$ppar = $spar/$cp;
$pimp = $simp/$ci;
echo "<h3>El promedio de números pares: $ppar</br></h3>"; 
echo "<h3>El promedio de números impares: $pimp</br></h3>"; 

?>