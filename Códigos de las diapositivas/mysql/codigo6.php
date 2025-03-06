<?php 
function mostrar_colecciones($db) { 
  $sql = 'SELECT * FROM practicas'; 
  $consulta = mysqli_query($db,$sql); 
  echo "<b>Lista de resultados:</b><br />"; 
  while ($fila = mysqli_fetch_assoc($consulta)) { 
    echo $fila['nombre'], 
         ' ',$fila['apellidos'],
         ' - ',$fila['calificacion'], '<br />'; 
  } 
} 


// Conexión (con selección de la base de datos). 
$db = mysqli_connect('localhost','pw','pw','programacionweb'); 
if (! $db) { 
  exit('Fallo en la conexión.'); 
} 

// Visualización de control. 
mostrar_colecciones($db); 

// Consulta INSERT. 
$sql = "INSERT INTO practicas(nombre,apellidos,calificacion) " . 
       "VALUES('Alumnado', 'Anonimo' , 10)"; 
$consulta = mysqli_query($db,$sql); 
$identificador = mysqli_insert_id($db); 
echo 'Identificador de la nueva colección = ', 
       $identificador,'<br />'; 
// Consulta UPDATE. 
$sql = "UPDATE practicas SET calificacion = 6 " . 
       "WHERE apellidos = 'Anonimo'"; 
$consulta = mysqli_query($db,$sql); 
$número = mysqli_affected_rows($db); 
echo "$número filas más.<br />"; 
// Visualización de control. 
mostrar_colecciones($db); 
?> 