<?php 
// Definir una constante (cuyo nombre distingue entre mayúsculas y 
// minúsculas de manera predeterminada). 
define('CONSTANTE','valor de CONSTANTE'); 
// Mostrar el valor de CONSTANTE (=> OK). 
echo 'CONSTANTE = ',CONSTANTE,'<br />'; 
// Utilización de la palabra clave const 
const OTRA_CONSTANTE = 'PHP 8.1.4'; 
echo 'OTRA_CONSTANTE = ', OTRA_CONSTANTE ,'<br />'; 
// Uso de una expresión compleja para definir el 
// valor de una constante con la función definida. 
define('TODAVIA_UNA_CONSTANTE',md5(uniqid(rand()))); 
echo ' TODAVIA_UNA_CONSTANTE = ', TODAVIA_UNA_CONSTANTE,'<br />'; 
// Uso de una expresión simple para definir el valor 
// de una constante con la palabra clave const. 
const UNA_ULTIMA_CONSTANTE = OTRA_CONSTANTE . ' (nueva)'; 
echo 'UNA_ULTIMA_CONSTANTE = ', UNA_ULTIMA_CONSTANTE; 
?>  