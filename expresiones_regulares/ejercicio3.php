<html>
<head>
</head>
<body>

<?php
// Comprobar compruebe si contiene las palabras calle, avenida o paseo antes de la dirección.
function direccion($cadena){
if (preg_match('/^(calle|c.|cl|avenida|av|paseo|p.º)/i',$cadena)){
	return true;
} else {
	return false;
}
}
if(direccion("CalLe falsa 123")==true){
	echo "La direccion es válida";
}else{
	echo "La dirección NO es válida";
}
?>

</body>
</html>