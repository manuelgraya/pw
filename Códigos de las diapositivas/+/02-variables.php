<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Inicializacion y asignacion de una variable</title>
  </head>
  <body>
    <div>
    
    <?php
    // Inicializar una variable $nombre.
    $nombre = 'Olivier';
    // Mostrar la variable $nombre.
    echo '$nombre = ',$nombre,'<br />';
    // Mostrar la variable $Nombre.
    echo '$<b>N</b>ombre = ',$Nombre;
    echo ' => vacia (es otra variable)<br />';
    // Modificar el valor (y el tipo) de la variable $nombre.
    $nombre = 123;
    // Mostrar la variable $nombre.
    echo '$nombre = ',$nombre,'<br />';
    ?>

    </div>
  </body>
</html>