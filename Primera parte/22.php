<html>
<title>
22
</title>
<head>
Ejercicio 22
</head>

<body> 
<h2>Convertir de segundos a minutos:</h2>
<form action="22.php" method = "post">
Ingrese la cantidad de segundos: <input type = "text" name="seg"><br>
<input type = "submit" value = "Calcular">
</form>

<?php

	if($_POST)
	{	
		$s = $_POST
		['seg'];
		$m = $s 
		/ 60;
		echo $s." segundo(s) son ".$m." minuto(s) "; 
	}
	
?>

</body>
</html>