<html>
<title>
72
</title>
<head>
Ejercicio 72
</head>

<body> 
<h2>Decimal a octal</h2>
<form action="72.php" method = "post">
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