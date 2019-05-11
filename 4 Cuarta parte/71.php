<html>
<title>
71
</title>
<head>
Ejercicio 71
</head>

<body> 
<h2>Decimal a hexadecimal</h2>
<form action="71.php" method = "post">
Ingrese un numero decimal: <input type = "text" name="n"><br>
<input type = "submit" value = "Calcular">
</form>

<?php

	if($_POST)
	{	
		$n = $_POST['n'];
		$residuos = array();
		$residuos_inv = array();
		
		if ($n==0)
		{
			echo nl2br("Su número en hexadecimal es: "."\n");
			echo ($n);
		}
		else
		{
			while ($n!=0)
			{
				$r=($n%16);
				$n = intval($n/16);
			
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
	}
	
?>

</body>
</html>