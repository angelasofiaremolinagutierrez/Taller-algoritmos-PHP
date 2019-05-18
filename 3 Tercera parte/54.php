<?php
// Realizar un algoritmo que, dado un texto, determine si este es un palíndromo.

$cad = strval($_POST['Cadena']);
$cad2 = str_replace(' ', '', strtolower($cad));
$len = strlen($cad2);
$cont = 0;

for ($i = 0; $i<$len; $i++) {
    if ($cad2[$i] === $cad2[$len-1-$i]){
        $cont = $cont+1;
    }
}

if ($cont == $len) {
    echo "<h3>Palindromo: true</h3>";
}else {
    echo "<h3>Palindromo: false</h3>";
}
?>