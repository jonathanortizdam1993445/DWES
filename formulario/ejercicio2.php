<html>
<head meta chrset=utf-8/>
<title>EJERCICIO 2</title>
<body>
<p>
<?php
    $numero= $_POST['numero'];//obtenemos el valor introducido anteriormente del formulario
    if($numero==""){
        echo "No se ha podido realizar lo que pide";
        
    }else{
      
//DEPENDIENDO DEL NUMERO INTRODUCIDO, INDICARÁ QUE TABLA MUESTRA
	for($i=$numero; $i<=$numero; $i++){
		echo "<p>TABLA DEL ".$i."</p>";
	}
	//MOSTRAMOS LOS NÚMEROS DEL 0 AL 10	
	for($i=0; $i<=10; $i++){
 		for($j=$numero; $j<=$numero; $j++){
		//MOSTRAMOS LAS OPERACIONES	
 			echo "<p>".$j." X ".$i." = ".$i*$j."</p>";
 		}
	}
    }
    ?>
</p>
</body>
</html>