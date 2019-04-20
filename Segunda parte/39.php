<html>
<title>
39
</title>
<head>
Ejercicio 39
</head>

<body> 
<h2>Solución ecuación cuadrática</h2>
<form action="39.php" method = "post">
Escriba la variable a (la que acompaña a X^2) <input type = "text" name="a"><br>
Escriba la variable b (la que acompaña a X) <input type = "text" name="b"><br>
Escriba la variable c (el número unitario) <input type = "text" name="c"><br>
<input type = "submit" value = "Calcular">
</form>

<?php

	if($_POST)
	{	
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		
		$d = sqrt(($b*$b)-(4*$a*$c));
		
		$cuad_pos = (-$b + $d)/(2*$a);
		$cuad_neg = (-$b - $d)/(2 * $a);
		$cuad_0 = (-$b)/(2*$a);
		
		if ($d > 0)
		{
			echo nl2br("Solución 1: " .$cuad_pos."\n");
			echo ("Solución 2: " .$cuad_neg);
		}
		if ($d == 0)
		{
			echo("Única solución: ".$cuad_0);
		}
		if ($d < 0)
		{			
			echo("No existe solución en los números reales");
		}
	}
	
?>

</body>
</html>