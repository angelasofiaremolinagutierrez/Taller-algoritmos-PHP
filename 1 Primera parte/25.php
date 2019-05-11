<html>
<title>
25
</title>
<head>
Ejercicio 25
</head>

<body> 
<h2>Invertir un número de cuatro digitos</h2>
<form action="25.php" method = "post">
Ingrese un número de cuatro digitos: <input type = "text" name="num"><br>
<input type = "submit">
</form>

<?php

	if($_POST)
	{	
		$abcd = $_POST['num']; #3245
		$a = intval($abcd / 1000); #3
		$bcd = intval($abcd-($a*1000)); #245
		$b = intval($bcd/100); #2
		$cd = intval($bcd-($b*100)); #45
		$c = intval($cd/10); #4
		$d= intval($cd - ($c*10)); #5
		
		echo nl2br($abcd."\n");
		echo $d.$c.$b.$a ;
	}
	
?>

</body>
</html>