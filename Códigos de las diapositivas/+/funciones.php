<?php 
// Función sin parámetro que muestra "¡Hola!" 
// Sin valor de retorno 
function mostrar_hola() { 
  echo '¡Hola!<br />'; 
} 
// Función con 2 parámetros que devuelve el producto 
// de dos parámetros. 
function producto($valor1,$valor2) { 
  return $valor1 * $valor2; 
} 
// Llamada a la función mostrar_hola 
mostrar_hola(); 
// Utilización de la función producto: 
// - en una asignación 
$resultado = producto(2,4); 
echo "2 x 4 = $resultado<br />"; 
// - en una comparación 
if (producto(10,12) > 100) { 
  echo '10 x 12 es superior a 100.<br />'; 
} 
?> 