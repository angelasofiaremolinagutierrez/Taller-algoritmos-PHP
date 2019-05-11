<html>
<title>
75
</title>
<head>
Ejercicio 75
</head>

<body> 
<h2>Binario a octal</h2>
<form action="75.php" method = "post">
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
		
		$n = $suma;
		
		$residuos = array();
		$residuos_inv = array();
		
		if ($n==0)
		{
			echo nl2br("Su número en octal es:"."\n");
			echo $n;
		}
		else
		{
			while ($n!=0)
			{
				$r=($n%8);
				array_push($residuos,$r);
				$n = intval($n/8);
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