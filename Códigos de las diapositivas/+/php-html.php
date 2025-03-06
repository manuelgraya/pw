<?php
// Declaración de variables que se utilizarán más adelante.
// Esta sección de codigo PHP no genera salida a la página
// HTML (sin llamada a echo).
$nombre = 'Olivier'; // nombre del usuario
$titulo_pagina = 'Las ediciones ENI presentan...'; // título de la página
$hoy = date("d/m/Y"); // fecha del dia
$hora = date("H:i:s"); // hora 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
  <head>
    <meta http-equiv="content-tipo" content="text/html; charset="utf-8" />
    <title>
    <?php /* visualización del título */ echo $titulo_pagina; ?>
    </title>
  </head>
  <body>
    <p>
    <?php
    /* Ver el nombre del usuario.
    ** Los tags para poner en negrita el nombre (<B>) y retorno de línea 
    ** (<br />) se incluyen en la cadena enviada por el echo.
    */
    echo "Hola <b>$nombre</b> .<br />";
    // Ver la fecha y la hora
    echo "Estamos a $hoy; es la hora $hora.";
    ?>
    </p>
  </body>
</html>
