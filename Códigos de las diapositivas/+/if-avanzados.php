<?php 
// Un factor aleatorio para definir las variables $nombre y $edad. 
$nombre = rand(0,1)?'Olivier':NULL; 
$edad = rand(0,1)?rand(7,77):NULL; 
?> 
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml” lang=“es”> 
  <head> 
    <meta charset=UTF-8" /> 
    <title>Ejemplo de página PHP</title> 
    <style> 
      .ko {font-weight: bold; color: red;} 
      .ok {font-weight: bold; color: green;} 
    </style> 
  </head> 
  <body> 
    <div> 
    <?php if ($nombre == NULL) : // condición PHP ?> 
       <!-- Código HTML --> 
       ¡Hola desconocido!<br /> 
    <?php elseif ($edad == NULL) : // continuación de la condición ?> 
       <!-- Código HTML --> 
       Conozco su <span class="ok">nombre</span> 
       pero no su <span class="ko">edad</span>.<br /> 
    <?php else : // continuación de la condición PHP ?> 
       <!-- Código HTML --> 
       Conozco su <span class="ok">nombre</span> 
       y su <span class="ok">edad</span>, 
       ¡pero no diré nada!<br /> 
    <?php endif; // fin de la condición PHP ?> 
    </div> 
  </body> 
</html> 