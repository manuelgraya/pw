<?php 
// Utilizar errores de nivel E_WARNING (no excepciones). 
// Estos errores se marcarán por la utilización del operador @. 
mysqli_report(MYSQLI_REPORT_ERROR); 
// Definición de una pequeña función que abre una conexión. 
function conectar($host,$usuario,$contrasenia) { 
  $db = @mysqli_connect($host,$usuario,$contrasenia); 
  if ($db) { 
    echo 'Conexión realizada correctamente.<br />'; 
    echo 'Información sobre el servidor: ', 
          mysqli_get_host_info($db),'<br />'; 
    echo 'Versión del servidor: ', 
          mysqli_get_server_info($db),'<br />'; 
    echo 'Juego de caracteres utilizado por la conexión: ', 
         mysqli_character_set_name($db),'<br />'; 
  } else { 
    printf( 
      'Error %d: %s.<br />', 
      mysqli_connect_errno(),mysqli_connect_error()); 
  } 
  return $db; 
} 
// Definición de una pequeña función que cierra una conexión. 
function desconectar($conexion) { 
  if ($conexion) { 
    $ok = @mysqli_close($conexion); 
    if ($ok) { 
      echo 'Desconexión realizada correctamente.<br />'; 
    } else { 
      echo 'Fallo en la desconexión. <br />'; 
    } 
  } else { 
      echo 'Conexión no abierta.<br />'; 
  } 
} 
// Primera prueba de conexión/desconexión. 
echo '<b>Primera prueba</b><br />'; 
$db = conectar('localhost','pw','pw'); 
desconectar($db); 
// Segunda prueba de conexión/desconexión. 
echo '<b>Segunda prueba</b><br />'; 
$db = conectar('localhost','pw','contraseña errónea'); 
desconectar($db); 
?> 