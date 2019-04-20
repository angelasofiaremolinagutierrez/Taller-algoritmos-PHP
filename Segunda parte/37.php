<html>
<title>
37
</title>
<head>
Ejercicio 37
</head>

<body> 
<h2>Determine el precio de su pasaje de avión</h2>
<form action="37.php" method = "post">
Escriba la distancia en kilometros que va a recorrer: <input type = "text" name="distancia"><br>
Escriba el numero de días de estancia: <input type = "text" name="dias"><br>
<input type = "submit" value = "Calcular">
</form>

<?php

	if($_POST)
	{	
		$d = $_POST['distancia'];
		$e = $_POST['dias'];
		
		$costo_regular = $d*5000; #d menor a 1000 km
		$descuento = $costo_regular*0.15;
		$costo_descuento = $costo_regular - $descuento;#con descuento
		
		if ($costo_regular > 100000)
		{
			if ($d > 1000 and $e>7)
			{
				echo "Su pasaje vale $".$costo_descuento;
			}
			else
			{
				echo "$".$costo_regular;
			}
		}
		else
		{
			echo "Su pasaje vale $100.000";
		}
	}
	
?>

</body>
</html>