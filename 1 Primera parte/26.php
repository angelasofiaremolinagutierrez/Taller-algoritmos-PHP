<html>
<title>
26
</title>
<head>
Ejercicio 26
</head>

<body> 
<h2>Escriba T si la afirmación es verdadera y F si es falsa</h2>
<form action="26.php" method = "post">
A) True OR False: <input type = "text" name="a"><br>
<input type = "submit">
</form>

<form action="26.php" method = "post">
B) False OR False: <input type = "text" name="b"><br>
<input type = "submit">
</form>

<form action="26.php" method = "post">
C) True AND True: <input type = "text" name="c"><br>
<input type = "submit">
</form>

<form action="26.php" method = "post">
D) False AND True: <input type = "text" name="d"><br>
<input type = "submit">
</form>

<form action="26.php" method = "post">
E) (False AND False) OR (True AND True): <input type = "text" name="e"><br>
<input type = "submit">
</form>

<form action="26.php" method = "post">
F) (False OR False) AND (True AND True): <input type = "text" name="f"><br>
<input type = "submit">
</form>

<?php
#try making a form for all of them with only one submit
	if($_POST)
	{	
		$ra = $_POST['a'];
		if ($ra == "t")
		{
			
			echo "Correcto :)";
		}
		else
		{
			echo "Incorrecto :(";
		}
	}
	
	if($_POST)
	{	
		$rb = $_POST['b'];
		if ($rb == "f")
		{
			echo "Correcto :)";
		}
		else
		{
			echo "Incorrecto :(";
		}
	}
	
	if($_POST)
	{	
		$rc = $_POST['c'];
		if ($rc == "t")
		{
			echo "Correcto :)";
		}
		else
		{
			echo "Incorrecto :(";
		}
	}
	
	if($_POST)
	{	
		$rd = $_POST['d'];
		if ($ra == "f")
		{
			echo "Correcto :)";
		}
		else
		{
			echo "Incorrecto :(";
		}
	}
	
	if($_POST)
	{	
		$re = $_POST['e'];
		if ($re == "t")
		{
			echo "Correcto :)";
		}
		else
		{
			echo "Incorrecto :(";
		}
	}
	
	if($_POST)
	{	
		$rf = $_POST['f'];
		if ($rf == "f")
		{
			echo "Correcto :)";
		}
		else
		{
			echo "Incorrecto :(";
		}
	}
	
?>

</body>
</html>