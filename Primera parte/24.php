<html>
<title>
24
</title>
<head>
Ejercicio 24
</head>

<body> 
<h2>Cajero</h2>
<form action="24.php" method = "post">
¿Qué cantidad quiere retirar?: <input type = "text" name="dinero"><br>
<input type = "submit">
</form>

<?php

	if($_POST)
	{	
		$cantidad = $_POST['dinero'];
		$cant_int = intval($cantidad);
		
		$divisible_5k = $cant_int % 5000;
		
		$y = $cantidad % 50000;
		$z = $y % 20000;
		$w = $z % 10000;
		$t = $w % 5000;
		
		$ny = ($cant_int - $y)/50000;
		$nz = ($y -$z)/20000;
		$nw = ($z - $w)/10000;
		$nt = ($w - $t)/5000;
		
		if(($cantidad - $cant_int) == 0)
		{
			if($divisible_5k == 0)
			{
				
				if($cant_int < 5000)
				{
					echo nl2br("No se puede retirar esa cantidad \n");
				}
				if($ny >=1)
				{
					echo nl2br("50000 * " .$ny."\n");
				}
				if($nz >=1)
				{
					echo nl2br("20000 * " .$nz."\n");
				}
				if($nw >=1)
				{
					echo nl2br("10000 * " .$nw. "\n");
				}
				if($nt >=1)
				{
					echo nl2br("5000 * " .$nt."\n");
				}
			}
			else
			{
				echo "Cantidad no válida1";
			}
		}
		else
		{
			echo "Cantidad no válida2";
		}			
	}
	
?>

</body>
</html>