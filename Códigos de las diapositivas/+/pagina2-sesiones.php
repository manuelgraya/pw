<?php 
// Abrir/reactivar la sesión. 
session_start();?> 
<!DOCTYPE> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es"> 
  <head> 
    <meta charset="utf-8" /> 
    <title>Página 2</title> 
  </head> 
  <body> 
    <div> 
    <b>Página 2</b><br /> 
    <?php 
    // Mostrar el ID de la sesión. 
    echo 'session_id() = ',session_id(),'<br />'; 
    // Mostrar el dato de sesión. 
    echo 'nombre = ', 
         isset($_SESSION['nombre'])?$_SESSION['nombre']:'','<br />'; 
    ?> 
    </div> 
  </body> 
</html> 