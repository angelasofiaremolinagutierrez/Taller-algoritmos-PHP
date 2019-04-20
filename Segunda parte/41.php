<html>
<title>
41
</title>
<head>
Ejercicio 41
</head>

<body> 
<h2>Leer el número</h2>
<form action="41.php" method = "post">
Escriba un número entre 1 y 10: <input type = "text" name="num"><br>
<input type = "submit">
</form>

<?php

	if($_POST)
	{	
		$n = $_POST['num'];
		$array = array(
		"1" => "Uno",
		"2" => "Dos",
		"3" => "Tres",
		"4" => "Cuatro",
		"5" => "Cinco",
		"6" => "Seis",
		"7" => "Siete",
		"8" => "Ocho",
		"9" => "Nueve",
		"10" => "Diez",
		);
		
		echo $n." => ".$array[$n];
	}
	
?>

</body>
</html>