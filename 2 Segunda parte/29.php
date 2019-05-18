<?php
// Escribe un algoritmo que lea un número e indique si este es par-positivo, par-negativo,
// impar-positivo o impar-negativo.

$num = floatval($_POST['Numero']);

if ($num != 0){
    if ($num%2 == 0){
        $PoI = 'Par';
    } else{
        $PoI = 'Impar';
    }
    
    if ($num > 0){
        $PoN = 'Positivo';
    } else{
        $PoN = 'Negativo';
    }
    echo "<h3>$num es $PoI - $PoN.</h3>";
}else{
    echo "<h3>$num es Par - Neutro";
}
?>