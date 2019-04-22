<html>
<title>
48
</title>
<head>
Ejercicio 48
</head>

<body> 
<h2>Invertir un texto:</h2>
<form action="48.php" method = "post">
Escribe algo: <input type = "text" name="tex"><br>
<input type = "submit">
</form>

<?php

	if($_POST)
	{	
		$a = $_POST['tex'];
		echo nl2br("Original: ".$a."\n");
		echo nl2br("Invertido: ".strrev($a)."\n");
		
	}
	
?>

</body>
</html>