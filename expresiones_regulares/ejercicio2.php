<html>
<head>
</head>
<body>

<?php
// Comprobar un número de teléfono en España:
function num($telefono){
if (preg_match('/96\d{7}/',$telefono)&& strlen($telefono)==9){
	echo "El teléfono $telefono es válido";
} else {
	echo "El teléfono $telefono NO es válido";
}
}

num("961234587")
	
?>

</body>
</html>