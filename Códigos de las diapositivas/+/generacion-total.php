<?php 
// Tabla que contiene la descripción del formulario. 
$formulario = array( 
  array('Nombre: ','text','nombre','HEURTEL'), 
  array('','submit','aceptar','Aceptar') ); 
// Generación del formulario mediante un bucle 
// en la tabla. 
echo '<form action="entrada.php" method="POST">'; 
foreach($formulario as $zona) { 
  echo "$zona[0]<input type=\"$zona[1]\" ",  
       "name=\"$zona[2]\" value=\"$zona[3]\"><br />"; 
} 
echo '</form>'; 
?> 