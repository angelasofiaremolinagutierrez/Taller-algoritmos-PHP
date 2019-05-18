<?php
// Escriba un algoritmo que dado un digito n, genere el número como n, nn y nnn. Por
// ejemplo, si el digito es 5, los valores generados son 5, 55 y 555. El finalizar deberá
// imprimir cada número y la suma de ellos.

$n = strval(intval($_POST['n']));
$suma = 0;
for ($i=1; $i<=3;$i++){
    $num = intval(str_repeat($n, $i));
    $suma += $num;
    echo "<h3>$num<br/></h3>";
}
echo "<h3>Suma = $suma<br/></h3>";
?>