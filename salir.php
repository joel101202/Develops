<?php

/*Estas 4 lineas de comando son para:
Iniciar la sesion, luego quitar la sesion, y luego 
destruirla. Lo que hace la ultima linea antes de cerrar el bloque
de codigo es redireccionarme a la ubicacion principal del 
proyecto*/
session_start();

session_unset();

session_destroy();

header('location: /proyecto final.php');

?>