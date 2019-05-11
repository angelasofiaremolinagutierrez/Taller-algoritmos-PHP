<html>
<title>
74
</title>
<head>
Ejercicio 74
</head>

<body> 
<h2>Binario a hexadecimal</h2>
<form action="74.php" method = "post">
Ingrese un numero binario: <input type = "text" name="n"><br>
<input type = "submit" value = "Calcular">
</form>

<?php

	if($_POST)
	{	
		$num = $_POST['n'];
		$digitos = strlen($num);
		$exp = 0;
		$suma = 0;
		for($i = 1 ; $i <= $digitos; $i++)
		{
			$m1 = intval($num[-$i]);
			$m2= 2**$exp;
			$s = $m1*$m2;
			$suma = $suma + $s ;
			$exp = $exp+1 ;
			
		}
	}
	
		$residuos = array();
		$residuos_inv = array();
		
		if ($suma==0)
		{
			echo nl2br("Su número en hexadecimal es: "."\n");
			echo ($suma);
		}
		else
		{
			while ($suma!=0)
			{
				$r=($suma%16);
				$suma = intval($suma/16);
			
				if ($r>=10)
				{
					$numeros = array("10","11","12","13","14","15");
					$letras = array("A","B","C","D","E","F");
					$r_letra = $letras[($r-10)];
					array_push($residuos,$r_letra);
				}
				if ($r<10)
				{
					array_push($residuos,$r);
				}
			}
			
			$str_residuos = json_encode($residuos);
			$inv = strrev($str_residuos);
			array_push($residuos_inv,$inv);
			$str_residuos_inv = json_encode($residuos_inv);
			$delete = array("[", "]",",",'"','\\' );
			$final = str_replace($delete, "", $str_residuos_inv);
			echo $final;
			
		}	
	
?>

</body>
</html>