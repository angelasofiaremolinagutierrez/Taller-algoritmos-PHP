<html>
<title>
40
</title>
<head>
Ejercicio 40
</head>

<body> 
<h2>Inicio de sesión</h2>
<form action="40.php" method = "post">
Nombre de usuario: <input type = "text" name="u"><br>
Contraseña: <input type = "text" name="c"><br>
<input type = "submit" value = "Calcular">
</form>

<?php

	if($_POST)
	{	
		$u = "Angela";
		$c = "42";
		
		$u_input = $_POST['u'];
		$c_input = $_POST['c'];
		
		if (($u == $u_input) and ($c == $c_input))
		{
			echo "Usuario y contraseña correctas :D";
		}
		else
		{
			echo "Usuario y/o contraseña incorrectas D:";
		}
	}
	
?>

</body>
</html>