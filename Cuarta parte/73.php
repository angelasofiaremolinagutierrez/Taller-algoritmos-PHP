<html>
<title>
73
</title>
<head>
Ejercicio 73
</head>

<body> 
<h2>Binario a decimal</h2>
<form action="73.php" method = "post">
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
		echo $suma ;
	}
	
?>

</body>
</html>