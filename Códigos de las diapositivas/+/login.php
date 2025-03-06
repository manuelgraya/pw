<?php 
// Función que comprueba que la identificación introducida 
// es correcta. 
function usuario_existe($identificador,$contrasenia) { 
   return (bool) rand(0,1); 
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
   // Salir a otra página e interrumpir 
   header('location: inicio.php'); 
   exit; 
   } else { 
   // El usuario no existe... 
   // Mostrar un mensaje y ofrecer 
   // de nuevo la identificación 
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
    <title>PW 2024</title> 
  </head> 
  <body> 
    <form action="login.php" method="post"> 
    <table> 
    <tr> 
      <td style="text-align:right">Identificador:</td> 
      <td><input type="text" Name="identificador" value= 
           "<?php echo "$identificador"; ?>" /></td> 
    </tr> 
    <tr> 
      <td style="text-align:right">Contraseña:</td> 
      <td><input type="password" Name="contrasenia" value= 
           "<?php echo "$contrasenia"; ?>" /></td> 
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