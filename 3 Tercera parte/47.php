<html>
<title>
47
</title>
<head>
Ejercicio 47
</head>

<body> 
<h2>ejercicio</h2>
<form action="47.php" method = "post">
Ingrese el valor del primer punto en X: <input type = "text" name="x1"><br>
Ingrese el valor del primer punto en Y: <input type = "text" name="y1"><br>
Ingrese el valor del segundo punto en X: <input type = "text" name="x2"><br>
Ingrese el valor del segundo punto en Y: <input type = "text" name="y2"><br>
<input type = "submit" value = "Calcular">
</form>

<?php

	if($_POST)
	{	
		$x1= $_POST['x1'];
		$y1= $_POST['y1'];
		$x2= $_POST['x2'];
		$y2= $_POST['y2'];
		$radio_tierra = 6371;
		$distancia = $radio_tierra * (acos(cos((sin($x1) * sin($x2)) + (cos($x1) * cos($x2) * cos($y1 -$y2)))));
		echo($distancia. " kilometros");
		
		
	}
	
?>

</body>
</html>