<html>
<head>
</head>
<body>
<?php
 function fecha2($cadena){
 $array=explode("-", $cadena);
 $fecha_valida=checkdate($array[1], $array[2], $array[0]);
 	if ($fecha_valida=="true"){
 		return true;
 	}else{
 		return false;
 	}
 } 
if(fecha2("2017-10-13")==true){
	echo "Fecha en UNIX: ".time();
}else{
	echo "Fecha no válida";
}
?>
</body>
</html>