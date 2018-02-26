<html>
<head meta chrset=utf-8/>
<title>EJERCICIO 1</title>
<body>
<?php
include 'funciones.php';
$po=devuelveDirSubdirSimpleBis("fotos/");
echo "<table border=1px>";
echo  "<tbody>";
echo "<tr>";
$td=0;
for ($i=0; $i<count($po); $i++){
		echo "<td><img src='".$po[$i]."' width=100px height=100px></td>";
		$td++;
		if ($td==2){
			echo "</tr>";
			$td=0;
		}
}
echo "</table";

?>
</body>
</html>
