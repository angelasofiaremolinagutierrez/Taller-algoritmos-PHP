<html>
<title>
62
</title>
<head>
Ejercicio 62
</head>

<body> 
<h2>Suma de los numeros entre un rango (n,m)</h2>
<form action="62.php" method = "post">
Ingrese el inicio del rango (n): <input type = "text" name="n"><br>
Ingrese el fin del rango (m): <input type = "text" name="m"><br>
<input type = "submit" value = "Calcular">
</form>

<?php

	if($_POST){	
		$n = $_POST['n'];
		$m = $_POST['m'];
		if ($m>$n)
		{
			$suma = 0;
			for ($i=$n; $i<=$m ; $i++)
			{
				$suma = $i + $suma;
			}
			echo "La suma de los números naturales entre ".$n." y ".$m." es ".$suma;
		}
		else
		{
			echo "Verifique que el inicio del rango sea menor que su fin";
		}
	}
?>
</body>
</html>
