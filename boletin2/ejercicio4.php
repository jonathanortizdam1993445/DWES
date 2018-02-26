<html>
<head>
</head>
<body>

<?php
//CREAMOS EL ARRAY ASOCIATIVO
 $persona=array("Nombre" =>"Juan Pérez", "Dirección" => " C/Paz,27", "Teléfono" => 635233445);

 //MOSTRAMOS LOS DATOS INDICANDO CADA RESULTADO LO QUE ES
 foreach($persona as $key=>$val){
 	echo "$key: $val </br>";
 }

?>
</body>
</html>
