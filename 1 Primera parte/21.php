<html>
<title>
21
</title>
<head>
Ejercicio 21
</head>

<body> 
<h2>Convertir de segundos a horas:</h2>
<form action="21.php" method = "post">
Ingrese la cantidad de segundos: <input type = "text" name="seg"><br>
<input type = "submit" value = "Calcular">
</form>

<?php

	if($_POST)
	{	
		$s = $_POST
		['seg'];
		$h = $s 
		/ 3600;
		echo $s." segundo(s) son ".$h." hora(s) "; 
	}
	
?>

</body>
</html>