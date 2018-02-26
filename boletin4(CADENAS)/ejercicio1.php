<html>
<head>
</head>
<body>

<?php

//CREAMOS 2 VARIABLES CON DIRECCIONES DE CORREO DIFERENTES
$email="jon1993445@gmail.com";
$email2="jon45623";

//COMPROBAMOS SI LOS DOS CORREOS SON VÁLIDOS
if (strpos($email, "@")&&(strpos($email, '.'))==true) {
	echo "El correo ".$email." es válido";
}else{
	echo "El correo es incorrecto";
}
echo "</br>";
if (strpos($email2, "@")&&(strpos($email2, '.'))==true) {
	echo "El correo ".$email2." es válido";
}else{
	echo "El correo ".$email2." es incorrecto";
}

?>

</body>
</html>