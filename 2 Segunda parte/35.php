<html>
<title>
35
</title>
<head>
Ejercicio 35
</head>
<body> 
<h2> Mayor y el menor de tres numeros<h2>
<form action="35.php" method = "post">
Numero 1: <input type = "text" name="n1"><br>
Numero 2: <input type = "text" name="n2"><br>
Numero 3: <input type = "text" name="n3"><br>
<input type = "submit" value = "Calcular">
</form>

<?php

	if($_POST)
	{	
		$n1 = $_POST['n1'];
		$n2 = $_POST['n2'];
		$n3 = $_POST['n3'];
		
		if ($n1>$n2 and $n1>$n3 )
		{
			echo nl2br($n1 . " es el mayor"."\n");
		}
		if ($n2>$n1 and $n2>$n3)
		{
			echo nl2br($n2 . " es el mayor"."\n");
		}
		if ($n3>$n1 and $n3>$n2)
		{
			echo nl2br($n3 . " es el mayor"."\n");
		}
		if ($n1<$n2 and $n1<$n3 )
		{
			echo nl2br($n1 . " es el menor"."\n") ;
		}
		if ($n2<$n1 and $n2<$n3 )
		{
			echo nl2br($n2 . " es el menor"."\n");
		}
		if ($n3<$n1 and $n3<$n2 )
		{
			echo nl2br($n3 . " es el menor"."\n");
		}
		if ($n1==$n2 and $n1==$n3 )
		{
			echo nl2br($n1 . ", " . $n2 . " y " .$n3 . " son iguales"."\n");
		}
	}
?>

</body>
</html>