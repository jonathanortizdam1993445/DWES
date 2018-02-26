<html>
<head meta charset="utf-8">
<title>EJERCICIO 4</title>
</head>
<body>
<p>
<?php
    $numero1= $_POST['numero1'];//obtenemos el valor introducido anteriormente del formulario
    $numero2= $_POST['numero2'];
    
    if($numero1=="" && $numero2=="" || $numero1=="" || $numero2==""){
        echo "No se ha podido realizar lo que pide";  
    }else{
    	if ($_REQUEST['operacion']=="suma"){
    		echo "El resultado de realizar la suma es ".($numero1+$numero2);
    	}elseif ($_REQUEST['operacion']=="resta"){
    		echo "El resultado de realizar la resta es ".($numero1-$numero2);
    		
    	}elseif ($_REQUEST['operacion']=="producto"){
    		echo "El resultado de realizar el producto es ".($numero1*$numero2);
    		
    	}elseif($_REQUEST['operacion']=="cociente"){
    		echo "El resultado de realizar el cociente es ".($numero1/$numero2);
    		
    	}else{
    		echo "No has seleccionado nada";
    	}
    }
    ?>
</p>
</body>
</html>