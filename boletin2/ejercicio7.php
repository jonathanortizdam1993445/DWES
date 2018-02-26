<html>
<head>
</head>
<body>

<?php
//CREAMOS EL ARRAY 
 $alumnos=array(
 		'Laura' =>array('servidor'=>10,'cliente'=>6,'diseño'=>7),
 		'Carlos' =>array('servidor'=>9,'cliente'=>7,'diseño'=>8),
 		'Luis' =>array('servidor'=>8,'cliente'=>8,'diseño'=>6),
 		'paco' =>array('servidor'=>7,'cliente'=>9,'diseño'=>8),
 		'Ana' =>array('servidor'=>6,'cliente'=>10,'diseño'=>5),
 );
//CREAMOS LA TABLA CON SUS ENCABEZADOS Y UN CONTADOR PARA REALIZAR LA MEDIA DE LAS NOTAS DE LOS ALUMNOS
echo "<table border=1>";
echo "<th>ALUMNOS";
echo "<th colspan=3>ASIGNATURA";
echo "<th> NOTA MEDIA ALUMNO" ;
$cont1=0;
//RECORREMOS EL ARRAY Y VAMOS AÑADIENDO CADA DATO EN SU CORRESPONDIENTE CELDA
foreach($alumnos as $nombre=>$datos){
	echo "<tbody>";
	$cont=0;
	echo "<td>".$nombre;
	foreach($datos as $dato=>$valor) {
		echo "<td>$dato: $valor </td>";
		$cont+=$valor;
	}
	$cont1=$cont;
	echo "<td>".$cont1/3;
	
}
echo "</tbody>";
echo "</table>";

//PARA EXTRAER LAS NOTAS DE CADA MATERIA Y HACER LA MEDIA, RECORREMOS EL ARRAY Y EXTRAEMOS LAS NOTAS DE LA CLAVE DE LA MATERIA
$cont_servidor=0;
foreach($alumnos as $item)
{
    $cont_servidor+=$item['servidor'];    
} 
$cont_servidor1=$cont_servidor;
echo "<p>MEDIA SERVIDOR: ".$cont_servidor1/5;

$cont_servidor=0;
foreach($alumnos as $item)
{

	$cont_servidor+=$item['cliente'];
}
$cont_servidor1=$cont_servidor;
echo "<p>MEDIA CLIENTE: ".$cont_servidor1/5;

$cont_servidor=0;
foreach($alumnos as $item)
{

	$cont_servidor+=$item['diseño'];
}
$cont_servidor1=$cont_servidor;
echo "<p>MEDIA DISEÑO: ".$cont_servidor1/5;

?>
</body>
</html>
