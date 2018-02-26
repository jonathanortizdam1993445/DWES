<html>
<head>
</head>
<body>

<?php
//CREAMOS UNA VARIABLE CON UNA FRASE
$frase="El oso osó asir a la osa";
//CONTAMOS LAS VOCALES A QUE CONTIENE DICHA FRASE

//OJO!!! MULTIBYTE
echo mb_substr_count($frase,'o');

?>

</body>
</html>
