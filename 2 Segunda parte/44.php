<?php
// Escribe un algoritmo que, dados dos números, verifique si ambos están entre 0 y 5 o
// retorne false sino es cierto. Por ejemplo 1 y 2 ---> true ; 1 y 8 ---> false.

$n1 = floatval($_POST['Numero1']);
$n2 = floatval($_POST['Numero2']);

if (0<=$n1 and $n1<=5 and 0<=$n2 and $n2<=5) {
    echo "<h3>True</h3>";
}else {
    echo "<h3>False</h3>";
}

?>