<html>
<head>
</head>
<body>
<?php
function circumferencia($radio){
	$area=pow($radio,2)*pi();
	$perimetro=2*pi()*$radio;
	
	echo "area: ".$area."</br>";
	echo "perimetro: ".$perimetro."</br>";
}
circumferencia(20)
?>
</body>
</html>
