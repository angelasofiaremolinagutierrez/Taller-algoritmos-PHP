<?php
$key = 345;
$val = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 51</title>
</head>
<body>
<p><h2>Ejercicio 51: </h2></p>
<pre><h3>Construya un algoritmo que le solicite al usuario un número entero positivo, si el usuario
digita un valor no permito, le debe volver a pedir el número. Una vez ingrese un valor
válido deberá imprimir dicho valor.</h3></pre>
<?php
    echo "<h3>Ingrese: $key</br></h3>";
?>
    <?php
    if(!$_POST){
    ?>
    <form action='66.php' method='post'>
        <input type='text' name='numeros' required>
        <input type="submit">
    </form>
    <?php
    }
    else {
        $str = $_POST['numeros'];
        if ($str == $key) {
            echo "<h3>Correcto: $str</h3>";
        }else {
            header("Refresh:0");
        }
    }
    ?>

</body>
</html>