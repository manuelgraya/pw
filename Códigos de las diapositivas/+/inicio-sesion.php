<?php 
// Abrir/reactivar la sesión. 
session_start(); 
// Probar si la sesión es nueva  
// (abierta por la llamada a session_start() más arriba) 
// o antigua (abierta por una llamada anterior a session_start()). 
// Lo mejor es probar si uno de nuestros datos de sesión 
// ya está guardado. 
if (! isset($_SESSION['identificador'])) { 
  // Dato "identificador" todavía no guardado: 
  // => el usuario no está conectado; 
  // => redirigirlo hacia la página de login. 
  header('location: login-sesion.php'); 
  exit; 
} else { 
  // Dato "identificador" ya guardado: 
  // => el usuario está conectado; 
  // => recuperar los datos de sesión utilizados 
  // en el script. 
  $fecha = $_SESSION ['fecha']; 
  $identificador = $_SESSION['identificador']; 
  // Recuperar el identificador de la sesión (para el ejemplo). 
  $sesión = session_id(); 
  // Preparar un mensaje. 
  $mensaje = "Sesión: $sesión - $identificador - $fecha"; 
} 
// Determinación de la fecha y de la hora actual 
// (no la de la apertura de la sesión). 
$actual = 'Estamos a '.date('d/m/Y'). 
          '; son las '.date('H:i:s'); 
?> 
<!DOCTYPE > 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es"> 
  <head> 
    <meta charset="utf-8" /> 
    <title>Inicio</title> 
  </head> 
  <body> 
    <div> 
      <b>Inicio - <?php echo $actual; ?></b><br /> 
      <?php echo $mensaje; ?><br /> 
    </div> 
  </body> 
</html> 