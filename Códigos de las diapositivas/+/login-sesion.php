<?php 
// Inclusión del archivo que contiene las funciones generales. 
// Función que comprueba que la identificación introducida 
// es correcta. 
function usuario_existe($identificador,$contrasenia) { 
  // Conexión y selección de la base de datos. 
  $conexión = mysqli_connect('localhost','pw','pw','programacionweb'); 

  // Definición y ejecución de una consulta preparada 
  $sql = 'SELECT 1 FROM usuarios '; 
  $sql .= 'WHERE identificador = ? AND contraseña = ?'; 
  $consulta = mysqli_stmt_init($conexión); 
  $ok = mysqli_stmt_prepare($consulta,$sql); 
  $ok = mysqli_stmt_bind_param 
          ($consulta,'ss',$identificador,$contrasenia); 
  $ok = mysqli_stmt_execute($consulta); 
  mysqli_stmt_bind_result($consulta,$existe); 
  $ok = mysqli_stmt_fetch($consulta); 
  mysqli_stmt_free_result($consulta); 
  // La identificación es correcta si la consulta ha devuelto 
  // una línea (el usuario existe y la contraseña 
  // es correcta). 
  // Si es el caso $existe contiene 1; si no, 
  // está vacía. Es suficiente con devolverla como booleano. 
  return (bool) $existe; 
} 

// Definición de las variables. 
$identificador = ''; 
$contrasenia = ''; 
$mensaje = ''; 
//Procesamiento del formulario. 
if (isset($_POST['conexión'])) { 
   // Recuperar los datos introducidos. 
   $identificador = $_POST['identificador']; 
   $contrasenia = $_POST['contrasenia']; 
   // Comprobar que el usuario existe. 
   if (usuario_existe($identificador,$contrasenia)) { 
      // El usuario existe... 
      // Abrir una sesión y guardar los datos 
      // de sesión. 
      session_start(); 
      $_SESSION['fecha'] = date('\l\e d/m/Y - H:i:s'); 
      $_SESSION['identificador'] = $identificador; 

      header('location: inicio-sesion.php'); 
      exit; 
   } else { 
      // El usuario no existe... 
      // Mostrar un mensaje y ofrecer  
      // de nuevo la identificación. 
      $mensaje = 'Identificación incorrecta. '; 
      $mensaje .= 'Inténtelo de nuevo.'; 
      // Dejar que se muestre el formulario de nuevo... 
   } 
} 
?> 
<!DOCTYPE> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es"> 
  <head> 
    <meta charset="utf-8" /> 
    <title>Login</title> 
  </head> 
  <body> 
    <form action="login-sesion.php" method="post"> 
    <table> 
    <tr> 
      <td style="text-align:right">Identificador:</td> 
      <td><input type="text" Name="identificador" value= 
        "<?php echo $identificador; ?>" /></td> 
    </tr> 
    <tr> 
      <td style="text-align:right">Contrasenia:</td> 
      <td><input type="password" Name="contrasenia" value= 
        "<?php echo $contrasenia; ?>" /></td> 
    </tr> 
    <tr> 
      <td></td> 
      <td style="text-align:right"><input type="submit" name="conexión" 
                         value="Conexión" /></td> 
    </tr> 
    </table> 
    <?php echo $mensaje; ?> 
    </form> 
  </body> 
</html> 