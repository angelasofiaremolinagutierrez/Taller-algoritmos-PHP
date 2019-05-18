<?php
// Escribe un algoritmo que determine la suma de los números naturales contenidos entre
// dos números n y m (verificar que m>n).

$n = intval($_POST['Numero1']);
$m = intval($_POST['Numero2']);

if ($m>$n and $n>0) {
    for ($i=$n; $i<=$m ; $i++) { 
        echo "<h3>  $i</br></h3>";
    }
}else {
    echo "false";
}

?>