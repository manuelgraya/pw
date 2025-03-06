<?php 
function mostrar_tabla($tabla,$titulo="",$nivel=0) {

  // Argumentos
  //    - $tabla = tabla cuyo contenido hay que mostrar
  //    - $titulo = titulo a mostrar encima del contenido
  //    - $nivel = nivel de visualización

  // si hay un título, mostrarlo
  if ($titulo != "") {
    echo "<P><B>$titulo</B><BR>\n";
  }

  // probar si hay datos
  if (isset($tabla)) { // hay datos

    // recorrer la tabla pasada como argumento
    reset ($tabla);
    foreach ($tabla as $clave => $valor) {

      // mostrar la clave (con indentación función 
      // de nivel)
      echo
        str_pad("",12*$nivel, "&nbsp;").
            htmlentities($clave)." = ";

      // mostrar el valor
      if (is_array($valor)) { // es una tabla ...

        // poner una baliza <BR>
        echo "<BR>";
        // y llamar de manera recurrente mostrar_tabla para 
        // mostrar la tabla en cuestión (sin título y al
        // nivel superior para la indentación)
        mostrar_tabla($valor,"",$nivel+1);

      } else { // es un valor escalar

        // mostrar el valor
        echo htmlentities($valor)."<BR>";

      }
      
    }

  } else { // sin datos

    // poner una baliza sencilla <BR>
    echo "<BR>\n";

  }

}


// Conexión (con selección de la base de datos). 
$db = mysqli_connect('localhost','pw','pw','programacionweb'); 
if (! $db) { 
  exit('Fallo en la conexión.'); 
} 
// Ejecución de una consulta 
$sql = 'SELECT * FROM practicas LIMIT 4'; 
$consulta = mysqli_query($db,$sql); 
// Primer fetch con mysqli_fetch_row. 
$fila = mysqli_fetch_row($consulta); 
mostrar_tabla($fila,'mysql_fetch_row'); 
// Segundo fetch con mysqli_fetch_assoc. 
$fila = mysqli_fetch_assoc($consulta); 
mostrar_tabla($fila,'mysql_fetch_assoc'); 
// Tercer fetch con mysqli_fetch_array: 
// -> sin segundo parámetro = MYSQLI_BOTH 
$fila = mysqli_fetch_array($consulta); 
mostrar_tabla($fila,'mysql_fetch_array'); 
// Cuarto fetch con mysqli_fetch_object. 
$fila = mysqli_fetch_object($consulta); 
echo "<p /><b>mysql_fetch_object</b><br />"; 
echo "\$fila->id = $fila->id<br />"; 
echo "\$fila->nombre = $fila->nombre<br />"; 
echo "\$fila->apellidos = $fila->apellidos<br /></p>"; 
echo "\$fila->calificacion = $fila->calificacion<br /></p>";
// Quinto fetch de nuevo con mysqli_fetch_row: 
// -> en principio, ya no hay filas. 
$fila = mysqli_fetch_row($consulta); 
if ($fila === NULL) { 
      echo '<p><b>Quinto fetch: nada más</b></p>'; 
} 
// Desconexión. 
$ok = mysqli_close($db); 
?> 