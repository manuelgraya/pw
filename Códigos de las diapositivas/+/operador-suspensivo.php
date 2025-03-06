<?php 
// Función con tres argumentos que devuelve la suma 
// de los tres argumentos. 
function suma($valor1,$valor2,$valor3) { 
  return $valor1 + $valor2 + $valor3; 
} 
// Transformación del contenido de un tabla en 
// lista de argumentos. 
$valores = [1,2,3]; 
echo '1 + 2 + 3 = ',suma(...$valores),'<br />'; 
// Lo mismo solo para una parte de los argumentos 
// con una tabla definida directamente en la llamada. 
echo '1 + 2 + 4 = ',suma(1,...[2,4]),'<br />'; 
?> 