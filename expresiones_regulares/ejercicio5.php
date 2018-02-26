<html>
<head>
</head>
<body>

<?php
// Comprobar si es un nombre de usuario válido
function email($email){
//^[a-zA-Z]--->EMPIEZA POR MAYUSCULA O MINUSCULA(funciona)
//\w----->CARACTERES ALFANUMERICOS
///[^_]$/--->QUE NO TERMINE EN GUION BAJO


if (preg_match('/^[a-zA-ZñÑ][a-zA-Zñ-Ñ0-9-\.-_]{2,}[\@]\w{5,}[\.]\w{2,3}/',$email)){
	return true;
} else {
	return false;
}
}
if(email("jñ__@sgmail.com")==true){
	echo "La dirección de correo es válido";
}else{
	echo "La dirección de correo NO es válido";
}
?>

</body>
</html>