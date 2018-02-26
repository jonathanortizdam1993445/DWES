<html>
<head>
</head>
<body>

<?php
//CREAMOS UNA VARIABLE CON UNA CADENA
$frase="El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";

$minusculas=mb_strtolower($frase);
//MOSTRAMOS LAS VECES QUE SE REPITE CADA VOCAL EN LA FRASE
echo "La vocal a aparece ".substr_count($minusculas,'a')." veces</br>";
echo "La vocal e aparece ".substr_count($minusculas,'e')." veces</br>";
echo "La vocal i aparece ".substr_count($minusculas,'i')." veces</br>";
echo "La vocal o aparece ".substr_count($minusculas,'o')." veces</br>";
echo "La vocal u aparece ".substr_count($minusculas,'u')." veces</br>";
?>

</body>
</html>
