<?php
// Escribe un algoritmo que lea las cinco notas obtenidas por un estudiante y calcule su
// nota final, sabiendo que las cada nota tiene el siguiente valor: n1 (15%), n2 (20%), n3
// (15%), n4 (30%), n5 (20%). Si la nota obtenida es menor a 2,0 deberá indicarle al
// estudiante que no puede habilitar, si la nota obtenida es menor a 3 deberá indicar que
// reprobó, si la nota es mayor o igual a 3 deberá indicar que aprobó y si es mayor a 4,5
// extenderá un mensaje de felicitación al estudiante.

$n1 = floatval($_POST['Nota1'])*0.15;
$n2 = floatval($_POST['Nota2'])*0.2;
$n3 = floatval($_POST['Nota3'])*0.15;
$n4 = floatval($_POST['Nota3'])*0.3;
$n5 = floatval($_POST['Nota3'])*0.2;
$nf = $n1 + $n2 + $n3 + $n4 + $n5;

if ($nf<2){
    echo "<h3>Nota: $nf</h3>";
    echo "<h4>  No puede habilitar</h4>";
}elseif ($nf>=4.5) {
    echo "<h3>Nota: $nf</h3>";
    echo "<h4>  Felicitaciones</h4>";
}elseif($nf<3){
    echo "<h3>Nota: $nf</h3>";
    echo "<h4>  Reprobó</h4>";
}elseif($nf>=3){
    echo "<h3>Nota: $nf</h3>";
    echo "<h4>  Aprobó</h4>";
}
?>