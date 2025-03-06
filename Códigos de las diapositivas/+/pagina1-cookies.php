<?php 
// Primera cookie que expira al final de la sesión. 
$ok1 = setcookie('nombre','PW'); 
// Segunda cookie que expira en 30 días. 
$ok2 = setcookie('apellido','Aprobado',time()+(30*24*3600)); 
// Resultado. 
if ($ok1 and $ok2) { 
   $mensaje = 'Cookies almacenadas (al menos, en principio)'; 
} else { 
   $mensaje = 'Una de las cookies no ha posido ser guardada'; 
} 
?> 
<!DOCTYPE> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es"> 
  <head> 
    <meta charset="utf-8" /> 
    <title>Página 1</title> 
  </head> 
  <body> 
    <div> 
    <?php echo $mensaje; ?><br /> 
    <!-- vínculo hacia la página 2 --> 
    <a href="pagina2-cookies.php">Página 2</a> 
    </div> 
  </body> 
</html> 