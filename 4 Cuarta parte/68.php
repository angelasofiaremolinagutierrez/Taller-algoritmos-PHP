<?php

$str = strval($_POST['Numeros']);
$cad = explode(",", $str);
$par = 0;
$imp = 0;
$pos = 0;
$neg = 0;
$m8 = 0;

for ($i=0; $i<count($cad) ; $i++) {
    $cad[$i] = floatval($cad[$i]);
    if ($cad[$i]%2 == 0)
	{
        $par = 1 + $par;
    }
	if ($cad[$i]%2 != 0)
	{
        $imp = 1 + $imp;
    }
	if ($cad[$i] > 0)
	{
		$pos = 1 + $pos;
	}
    if ($cad[$i] < 0)
	{
		$neg = 1 + $neg;
	}
	if ($cad[$i]%8 == 0)
	{
		 $m8 = 1 + $m8;
	}
}

echo "<h3>Números positivos: $pos</br></h3>"; 
echo "<h3>Números negativos: $neg</br></h3>"; 
echo "<h3>Números pares: $par</br></h3>"; 
echo "<h3>Números impares: $imp</br></h3>"; 
echo "<h3>Números múltiplos de ocho: $m8</br></h3>"; 
?>