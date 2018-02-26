<html>
<head meta charset="utf-8">
<title>EJERCICIO 3</title>
    </head>
<body>
<p>
<?php
    $menor= $_POST['menor'];//obtenemos el valor introducido anteriormente del formulario
    $mayor= $_POST['mayor'];
    if($menor=="" && $mayor=="" || $menor=="" || $mayor==""){
        echo "No se ha podido realizar lo que pide";  
    }else{
      
    $cont=$mayor;	
	for($i=$menor; $i<=$mayor; $i++){
        echo "(".$i.",".$cont--.")";
    } 
    }
    ?>
</p>
</body>
</html>