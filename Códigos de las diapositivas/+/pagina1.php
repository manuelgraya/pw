<?php 
// Inicialización de una variable. 
$nombre='Olivier'; 
?> 
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es"> 
  <head><meta charset="utf-8" /><title>Pagina 1</title></head> 
  <body> 
    <div> 
    <!-- vínculo hacia la página 2 pasando el valor de $nombre 
         a través de la dirección --> 
    <a href="pagina2.php?nombre=<?php echo $nombre; ?> ">Pagina 2</a> 
    </div> 
  </body> 
</html> 