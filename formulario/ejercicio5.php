<html>
<head meta charset="utf-8">
<title>EJERCICIO 5</title>
</head>
<body>
<p>
<?php
    $numero1= $_POST['numero1'];//obtenemos el valor introducido anteriormente del formulario
    $numero2= $_POST['numero2'];
    $operacion=$_POST['operacion'];
    
    if($numero1=="" && $numero2=="" || $numero1=="" || $numero2==""){
        echo "No se ha podido realizar lo que pide";  
    }else{
    	$cont=count($operacion);
    	for ($i=0; $i<$cont; $i++){
    		if($operacion[$i]=="suma"){
    			echo "El resultado de realizar la suma es ".($numero1+$numero2)."</br>";
    		}elseif($operacion[$i]=="resta"){
    			echo "El resultado de realizar la resta es ".($numero1-$numero2)."</br>";
    		}elseif($operacion[$i]=="producto"){
    			echo "El resultado de realizar el producto es ".($numero1*$numero2)."</br>";
    		}elseif($operacion[$i]=="cociente"){
    			echo "El resultado de realizar el cociente es ".($numero1/$numero2)."</br>";
    		}else{
    			echo "No has seleccionado nada";
    		}
    	}
    }
    ?>
</p>
</body>
</html>