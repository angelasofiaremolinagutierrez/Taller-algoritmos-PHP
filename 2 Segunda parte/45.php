<?php
// Escribe un algoritmo que lea un número del día de la semana (entre 1 y 7) e indique el
// nombre del día. Por ejemplo: 1 ---> Lunes ; 5 ---> Viernes.

$semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
$n1 = floatval($_POST['Numero1']);


if (1<=$n1 and $n1<=7) {
    $dia = $semana[$n1-1];
    echo "<h3>$n1 ---> $dia</h3>";
}else {
    echo "<h3>False</h3>";
}

?>