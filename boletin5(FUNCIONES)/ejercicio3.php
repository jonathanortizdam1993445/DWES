<html>
<head>
</head>
<body>
<?php
function sinEspacios($cadena){
	
	$quitar_doble=str_replace("  ", " ", $cadena);
	$quitar_pricipio=trim($quitar_doble," ");
 	echo $quitar_pricipio;
 	
}
sinEspacios(" Múrcíélágó es un  animal ")
?>
</body>
</html>