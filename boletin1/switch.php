<html>
<head>
</head>
<body>

<?php
//CREAMOS LA VARIABLE
	$cadena="abajo";
	
	//DEPENDIENDO DEL CONTENIDO DE LA CADENA NOS MOSTRARÁ UN MENSAJE DIFERENTE
	switch ($cadena){
		case("arriba"):
			echo "Estoy arriba";
			break;
		case("abajo"):
			echo "Estoy abajo";
			break;
		case("medio"):
			echo "Estoy en el medio";
			break;
		default:
			echo "otros";
			break;
	}
?>

</body>
</html>
