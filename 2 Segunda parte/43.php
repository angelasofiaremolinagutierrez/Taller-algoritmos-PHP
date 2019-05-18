<?php
// Escribe un algoritmo que dados 3 números, determine si los números se están
// incrementando, disminuyendo o ninguno de lo anterior. Por ejemplo: 1 , 4, 19 --> está
// incrementando ; 33, 10 ,1 --> está disminuyendo; 3 , 18 , 10 --> Ni se incrementa ni se
// disminuyendo

$n1 = floatval($_POST['Numero1']);
$n2 = floatval($_POST['Numero2']);
$n3 = floatval($_POST['Numero3']);

if ($n1>$n2 and $n2>$n3) {
    echo "<h3>Los números $n1,$n2,$n3 estan disminuyendo</h3>";
}elseif ($n1<$n2 and $n2<$n3) {
    echo "<h3>Los números $n1,$n2,$n3 estan incrementando</h3>";
}else {
    echo "<h3>Los números $n1,$n2,$n3 ni se incrementan ni se disminuyen</h3>";
}

?>