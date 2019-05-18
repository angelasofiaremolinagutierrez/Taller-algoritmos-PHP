<?php
// Escribe un algoritmo que lea un número y determine si es par o impar.

$num = floatval($_POST['Numero']);
if ($num%2 == 0){
    echo "<h3>$num es par.</h3>";
} else{
    echo "<h3>$num es impar.</h3>";
}
?>