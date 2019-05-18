<?php
// Escribe un algoritmo que dado un número n, imprima los números entre 1 y n siguiendo
// la siguiente secuencia:
// 1 -2 3 -4 5 -6 ….

$n = intval($_POST['Numero']);

for ($i=1; $i <= $n; $i++) { 
    if ($i%2 == 1) {
        echo "<h3> -$i</br></h3>";
    }else {
        echo "<h3>  $i</br></h3>";
    }
}

?>