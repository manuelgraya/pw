<?php 
// Inicializar las variables utilizadas en el script. 
$nombre = null; 
$mensaje = null; 
// Comprobar cómo el script es invocado. 
if (isset($_POST['aceptar'])) { 
  // Procesamiento del formulario. 
  // Recuperación de los valores introducidos en el formulario. 
  $nombre = trim($_POST['nombre']); 
  // Control de los valores introducidos. 
  if ($nombre == '') 
    { $mensaje .= "El nombre es obligatorio.\n"; } 
  if (strlen($nombre) > 10) 
    { $mensaje .= "El nombre debe tener, como mucho, 10 caracteres.\n"; } 
  // Comprobar si hay errores. 
  if ($mensaje == '') { 
    // No hay errores. 
    // Redirigir al usuario hacia otra página e interrumpir 
    // la ejecución del script. 
    header('location: inicio.php'); 
    exit; 
  }
} 
?> 

<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es"> 
  <head> 
    <meta charset="utf-8" /> 
    <title>Error</title> 
  </head> 
  <body> 
    <!-- Pequeño formulario que contiene un botón que permite 
    ---- volver atrás (con JavaScript) para corregir. 
    --> 
    <form> 
    <div> 
      <?php echo $mensaje; ?><br /> 
      <input type="button" value="Corregir" 
                      onClick="self.history.back()"> 
    </div> 
    </form> 
  </body> 
</html> 

