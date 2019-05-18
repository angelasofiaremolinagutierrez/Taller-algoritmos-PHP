<?php

$veces = intval($_POST['Filas']);;

for ($i=1; $i<=$veces ; $i++) { 
    $str = str_repeat("@ ", $i);
    echo "$str</br>";
}

?>