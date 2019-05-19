<?php
// Leer una cantidad variable de números e indicar el promedio de los números pares y el
// promedio de los números impares.


$str = strval($_POST['Numeros']);
$cad = explode(",", $str);
$mayores = 0;
$menores = 0;
$iguales = 0;

for ($i=0; $i<count($cad) ; $i++) {
    $cad[$i] = floatval($cad[$i]);
    if ($cad[$i]>100) 
	{
        $mayores = 1 + $mayores;
    }
	elseif($cad[$i]<100)
	{
        $menores = 1 + $menores;
    }
	else
	{
		$iguales = 1 + $iguales;
	}
}

echo "<h3>Hay $mayores números mayores que 100</br></h3>"; 
echo "<h3>Hay $menores números menores que 100</br></h3>"; 
echo "<h3>Hay $iguales números iguales que 100</br></h3>"; 

?>