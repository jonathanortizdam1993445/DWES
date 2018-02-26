<html>
<head>
</head>
<body>

<?php
function capitales($pais,$capital,$habitantes){
	$nombre_pais=$pais;
	$nombre_capital=$capital;
	$numero_habitantes=$habitantes;
	
	if($nombre_capital==""){
		$nombre_capital="Madrid";
	}else{
		$nombre_capital;
	}
	
	if ($numero_habitantes==""){
		$numero_habitantes="muchos";
	}else{
		$numero_habitantes;
	}
	
	echo "La capital de ".$nombre_pais." es ".$nombre_capital." y tiene ".$numero_habitantes." habitantes";
}

capitales("Portugal", "","")
?>
</body>
</html>