<html>
<title>
69
</title>
<head>
Ejercicio 69
</head>

<body> 
<h2>Escribir solo números positivos, hasta tener 100 pares u 80 números "5"</h2>
<form action="69.php" method = "post">
Ingrese un número positivo: <input type = "text" name="numero"><br>
<input type = "submit" value = "Calcular">
</form>

<?php

	if($_POST)
	{	
		$n = $_POST['numero'];
		$pares = 1;
		$cincos = 1;
		$ingresos = 1;
		if ($n>0)
		{
			while ($pares < 10 and $cincos < 8)
			{
				$n = $_POST['numero'];
				#como poner a leer despues del primero submit
				if ($n%2 == 0)
				{
					$pares = $pares + 1 ;
				}
				if ($n == 5)
				{
					$cincos = $cincos + 1;
				}
				$ingresos = $ingresos + 1;
			}
		}
		else
		{
			echo "Verifique que sea un número positivo";
		}
		
		echo "Se ingresaron: ". $ingresos. "números";
	}
?>

</body>
</html>