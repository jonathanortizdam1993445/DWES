<html>
<head>
</head>
<body>


<?php
//CREAMOS EL ARRAY
 $dias=array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
 
 
 //RECORREMOS EL ARRAY CON EL FOR Y FOREACH
 for($i=0 ;$i<count($dias); $i++){
 	echo "Indice ".$i." Valor ".$dias[$i]."</br>";
 }
 
 echo "----------------------------------------------</br> ";
 
 foreach ($dias as $key=>$val){
 	echo "indice ".$key." valor ".$val."</br>";
 }

?>
</body>
</html>
