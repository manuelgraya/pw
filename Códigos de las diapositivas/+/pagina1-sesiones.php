<?php 
// Abrir/reactivar la sesión. 
session_start(); 
// Recuperar el identificador de sesión. 
$sesión = session_id();; 
// Guardar una información en la sesión. 
$_SESSION['nombre'] = 'PW'; 
?> 
<!DOCTYPE> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es"> 
  <head> 
    <meta charset="utf-8" /> 
    <title>Página 1</title> 
  </head> 
  <body> 
    <div> 
    <b>Página 1</b><br /> 
    <?php 
    // Mostrar el ID de la sesión. 
    echo 'session_id() = ',session_id(),'<br />'; 
    // Mostrar el dato de sesión. 
    echo 'nombre = ', 
         isset($_SESSION['nombre'])?$_SESSION['nombre']:'','<br />'; 
    ?> 
    <a href="pagina2-sesiones.php">Página 2</a><br /> 
    </div> 
  </body> 
</html> 