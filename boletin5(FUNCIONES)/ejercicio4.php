<html>
<head>
</head>
<body>
<?php
function compCaseEsp($cadena1,$cadena2){
	
	$var1=$cadena1;
	$var2=$cadena2;
	
	if (strcasecmp($var1, $var2)){
		echo "Las cadenas son iguales";
	}else{
		echo "Las cadenas no son iguales";
	}
}
compCaseEsp(" Hola", "ho")
?>
</body>
</html>
