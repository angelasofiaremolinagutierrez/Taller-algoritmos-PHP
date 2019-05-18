<?php

$veces = intval($_POST['Filas']);;
$cont = $veces;

for ($i=1; $i<=$veces ; $i++) { 
    $str = str_repeat("*", $cont);
    echo "$str</br>";
    $cont = $cont-1;
    
}

?>