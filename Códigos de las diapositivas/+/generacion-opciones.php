<?php 
// Frutas para mostrar en la lista, con la forma 
// de una tabla asociativa que da el código 
// de la fruta (clave de la tabla) y el nombre de la fruta. 
$frutas_del_mercado = array( 
  'A' => 'Albaricoques', 
  'C' => 'Cerezas', 
  'F' => 'Fresas', 
  'P' => 'Melocotones', 
  '?' => 'No sabe'); 
// Frutas preferidas del usuario, con la forma 
// de una tabla que da el código de las frutas correspondientes. 
$frutas_preferidas = array('A','F'); 
// Advertencia: veremos más adelante cómo recuperar 
//              esta información en una base de datos. 
?> 
<!-- creación del formulario --> 
<form action="entrada.php" method="POST"> 
Frutas preferidas:<br /> 
<select name="frutas[]" multiple size="8"> 
<?php 
// Código PHP que genera la parte dinámica del formulario. 
// Recorrer la lista para mostrar y recuperar el código 
// y el nombre. 
foreach($frutas_del_mercado as $código => $nombre) { 
  // Determinar si la línea debe estar seleccionada 
  //  - sí, si el código figura en la lista de las frutas 
  //    preferidas del usuario => búsqueda de $código 
  //    en $frutas_preferidas con la función in_array 
  //  - si es el caso, poner el atributo "selected" en 
  //    la etiqueta "option"; si no, no poner nada. 
  $selección = 
    in_array($código,$frutas_preferidas)?'selected="selected"':''; 
  // Generar la etiqueta "option" con la variable $código 
  // para el atributo "value", la variable $selección 
  // para la indicación de selección y la variable $nombre 
  // para el texto mostrado en la lista. 
  echo "<option value=\"$código\" $selección>$nombre</option>"; 
} 
?> 
</select> 
</form> 