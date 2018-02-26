<html>
<head>
</head>
<body>

<?php
// Comprobar si es un nombre de usuario válido
function usuario($nombre){
//^[a-zA-Z]--->EMPIEZA POR MAYUSCULA O MINUSCULA(funciona)
//\w----->CARACTERES ALFANUMERICOS
///[^_]$/--->QUE NO TERMINE EN GUION BAJO

//&& strlen($nombre)>=8 && strlen($nombre)<=24

if (preg_match('/^[a-zA-Z]+\w+[^_]$/',$nombre) && strlen($nombre)>=8 && strlen($nombre)<=24){
	return true;
} else {
	return false;
}
}
if(usuario("pkllkkkopppppp_9999ppp")==true){
	echo "El usuario es válido";
}else{
	echo "El usuario NO es válido";
}
?>

</body>
</html>