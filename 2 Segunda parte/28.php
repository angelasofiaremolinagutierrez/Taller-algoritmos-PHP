<?php
// Escribe un algoritmo que lea un número y determine si es positivo o negativo.

$num = floatval($_POST['Numero']);
if ($num >= 0){
    echo "<h3>$num es positivo.</h3>";
} else{
    echo "<h3>$num es negativo.</h3>";
}
?>