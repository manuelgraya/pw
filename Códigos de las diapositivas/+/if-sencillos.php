<?php 
// Estructura if / elseif / else 
$nombre = 'Olivier'; 
$edad = NULL; 
if ($nombre == NULL) { 
  echo "¡Hola desconocido!<br />"; 
} elseif ($edad == NULL) { 
  echo "¡Hola $nombre! No conozco su edad.<br />"; 
} else { 
  echo "¡Hola $nombre! Tiene $edad años.<br />"; 
} 
?> 