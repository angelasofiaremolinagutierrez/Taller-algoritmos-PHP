<?php
$usu = 'Estudiante';
$con = '12345';
$cont = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 52</title>
</head>
<body>
<p><h2>Ejercicio 52: </h2></p>
<pre><h3>Escribe un algoritmo que, dado un usuario y una contraseña predefinida, le permita al
usuario digital su usuario y contraseña y comparar si corresponde al usuario y
contraseña predefinida. Aunque sólo le permita 3 intentos.</h3></pre>
<?php
    echo "<h4>Usuario: $usu</br></h4>";
    echo "<h4>Contraseña: $con</br></h4>";
?>
    <?php
    if(!$_POST){
    ?>
    <form action='Ejercicio52-Form.php' method='post'>
        <p>Usuario: <input type='text' name='val1' required/><br/></p>
        <p>Contraseña: <input type='text' name='val2' required/><br/></p>
        <input type="submit">
    </form>
    <?php
    }
    else {
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
        if ($val1 == $usu and $val2 == $con and $cont<3) {
            echo "<h3>Datos correctos</h3>";
        }else {
            $cont = $cont+1;
            header("Refresh:0");
        }
    }
    ?>

</body>
</html>