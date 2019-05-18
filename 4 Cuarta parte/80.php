<?php

$veces = intval($_POST['Filas']);;
$cont = 1;

for ($i=1; $i<=$veces ; $i++) { 
    for ($j=1; $j<=$i ; $j++) { 
        echo "$cont ";
        $cont = $cont+1;
    }
    echo "</br>";
}

?>