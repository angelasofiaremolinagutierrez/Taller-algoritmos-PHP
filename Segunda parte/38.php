<html>
<title>
38
</title>
<head>
Ejercicio 38
</head>

<body> 
<h2>Año bisiesto o no</h2>
<form action="38.php" method = "post">
Ingrese el año: <input type = "text" name="year"><br>
<input type = "submit" value = "Calcular">
</form>

<?php

	if($_POST)
	{	
		$year = $_POST['year'];
		$year_in_4 = $year / 4;
		$n_int = intval($year_in_4);
		$substraction = $year_in_4 - $n_int;
		if ($substraction == 0)
		{
			if ($year % 100 == 0)
			{
				if ($year % 400 == 0)
				{
					echo("Año bisiesto");
				}
				else
				{
					echo("Año de 365 días");
				}
			}
			else
			{
				echo ("Año bisiesto");
			}
		}
		else
		{
			echo ("Año de 365 días");
		}
	}
	
?>

</body>
</html>