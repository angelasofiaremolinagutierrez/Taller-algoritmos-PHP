<html>
<title>
23
</title>
<head>
Ejercicio 23
</head>

<body> 
<h2>Segundos en horas, minutos y segundos</h2>
<form action="23.php" method = "post">
Ingrese la cantidad de segundos: <input type = "text" name="seg"><br>
<input type = "submit" value = "Calcular">
</form>

<?php

	if($_POST){	
		$s = $_POST['seg'];
		$s_int = intval($s);
		
		$parte_h = $s_int/3600; #23.99972
		$parte_h_int = intval($parte_h); #23
		
		$s_en_m = $s_int - ($parte_h_int *3600); #86399-(23*3600)=3599
		$parte_m = $s_en_m/60; #59.9833
		$parte_m_int = intval($parte_m); #3599/60 = 59
		
		$s_restantes = $s_en_m - ($parte_m_int * 60);  #3599-(59*60)=59
		
		$h = $parte_h_int;
		$m = $parte_m_int;
		$sec = $s_restantes;
		echo $h.":".$m.":".$sec; 
		
	}
	
?>

</body>
</html>
