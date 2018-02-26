<html>
<head>
</head>
<body>
<?php
 function calc_dias($fecha1,$fecha2){
 $array1=explode("-", $fecha1);
 $array2=explode("-", $fecha2);
 
 $fecha_valida1=checkdate($array1[1], $array1[0], $array1[2]);
 $fecha_valida2=checkdate($array2[1], $array2[0], $array2[2]);
 
 if ($fecha_valida1=="true" && $fecha_valida2=="true"){
 	//STRTOTIME PASA LA FECHA A SEGUNDOS, 86400 SON LOS SEGUNDOS QUE TIENE 1 DÍA
 	$dias=(strtotime($fecha1)-strtotime($fecha2))/86400;
 	//CONVIERTO EL RESULTADO A VALOR ABSOLUTO
 	$dias=abs($dias);
 	//REDONDEO EL VALOR ABSOLUTO
 	$dias=floor($dias);
 	echo $dias;
 }else{
 	echo "fechas no validas";
 }
 }
calc_dias("24-05-1994","20-06-1995")

?>
</body>
</html>