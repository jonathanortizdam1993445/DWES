<?php
include 'sesiones/ejer1/sesionclass.php';
/*session_start();
session_destroy();
$parametros=session_get_cookie_params();
print_r($parametros);
setcookie(session_name(),0,1,$parametros['path']);
*/
$sesion = new sesionclass();
$sesion->cerrarsesion();
echo "<a href='index.php'>ir a Index</a>";
?>