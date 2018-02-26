<html>
<head>
</head>
<body>
<?php
 function fecha1($cadena){
 $array=explode("-", $cadena);
 
 $fecha_valida=checkdate($array[1], $array[0], $array[2]);
 	if ($fecha_valida=="true"){
 		return true;
 	}else{
 		return false;
 	}
 }
 
if(fecha1("13-10-2017")==true){
	echo "Fecha en UNIX: ".time();
}else{
	echo "Fecha no válida";
}
?>
</body>
</html>