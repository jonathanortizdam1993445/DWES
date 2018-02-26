<html>
<head>
</head>
<body>

<?php

//CREAMOS UNA VARIABLE CON UN TEXTO DENTRO
$frase="El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";

//SUSTITUIMOS LAS A POR *
$reemplazo=str_replace('a', '*', $frase);
echo  $reemplazo;

?>

</body>
</html>
