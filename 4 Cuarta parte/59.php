<?php
// Escribe un algoritmo que imprima los n primeros números naturales

$n = intval($_POST['Numero']);

for ($i=1; $i <= $n; $i++) { 
    echo "<h4>$i</h4>";  
}

?>