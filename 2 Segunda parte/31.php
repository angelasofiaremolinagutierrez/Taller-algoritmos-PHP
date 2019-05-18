<?php
// Escribe un algoritmo que lea un número y si este es mayor o igual a 10 devuelva el triple
// de este de lo contrario la cuarta parte de este.

$num = floatval($_POST['Numero']);

if ($num>=10){
    $sal = $num*10;
}else{
    $sal = $num*0.25;
}
echo "<h3>Resultado : $sal</h3>";

?>