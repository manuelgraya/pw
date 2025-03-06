<!DOCTYPE> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es"> 
  <head> 
    <meta charset="utf-8" /> 
    <title>Página 2</title> 
  </head> 
  <body> 
    <div> 
    <?php 
    if ( isset($_COOKIE["apellido"]) ) { 
          echo "\$_COOKIE[\"nombre\"] = {$_COOKIE['nombre']} <BR>"; 
    } else { 
          echo "\$_COOKIE[\"nombre\"] = <BR>"; 
    } 
    if ( isset($_COOKIE["apellido"]) ) { 
          echo "\$_COOKIE[\"apellido\"] = {$_COOKIE['apellido']} <BR>"; 
    } else { 
          echo "\$_COOKIE[\"apellido\"] = <BR>"; 
} 
?> 
    </div> 
  </body> 
</html> 