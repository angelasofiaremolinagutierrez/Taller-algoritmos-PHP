<html>
<title>
70
</title>
<head>
Ejercicio 70
</head>

<body> 
<h2>Decimal a binario</h2>
<form action="70.php" method = "post">
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
			echo nl2br("Su número en binario es: "."\n");
			echo ("0000");
		}
		else
		{
			while ($n!=0)
			{
				$r=($n%2);
				array_push($residuos,$r);
				$n = intval($n/2);
			}
			
			$lenght = sizeof($residuos); 
			if (($lenght%4) !=0)
			{
				$ceros_faltantes = 4 - ($lenght%4);
				$ceros = str_repeat(",0",$ceros_faltantes);
				array_push($residuos,$ceros);
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