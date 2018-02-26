<html>
<head>
</head>
<body>
<?php
function sinTildes($cadena){
	
	$cambiar_a=str_replace("á", "a", $cadena);
 	$cambiar_e=str_replace("é", "e", $cambiar_a);
 	$cambiar_i=str_replace("í", "i", $cambiar_e);
 	$cambiar_o=str_replace("ó", "o", $cambiar_i);
 	$cambiar_u=str_replace("ú", "u", $cambiar_o);
 	
 	echo $cambiar_u."<br>";
 	
}
sinTildes("Múrcíélágó")
?>
</body>
</html>