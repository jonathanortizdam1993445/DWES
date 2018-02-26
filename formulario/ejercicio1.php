<html>
<head meta chrset=utf-8/>
<title>EJERCICIO 1</title>
<body>
<p>
    <?php
        $numero= $_POST['numero'];//obtenemos el valor introducido anteriormente del formulario
    if($numero==""){
        echo "No se ha podido realizar lo que pide";
    }
    else if($numero%2==0){
        echo "El numero ".$numero." es par";
    }else{
        echo "El numero ".$numero." es impar";
    }
    ?>
</p>
</body>
</html>