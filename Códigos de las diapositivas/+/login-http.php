<?php 
// Función que comprueba que la identificación introducida 
// es correcta. 
function usuario_existe($identificador,$contrasenia) { 
  return (bool) rand(0,1); 
} 

// Función que muestra la autenticación HTTP. 
function autenticacion($mensaje) { 
  header("WWW-Authenticate: Basic realm=\"$mensaje\""); 
  // Si el usuario hace clic en el botón cancelar,  
  // las líneas siguientes se ejecutan (si no, el script 
  // es invocado de nuevo, pero con $PHP_AUTH_USER completado 
  // y el script ya no pasará por aquí). 
  // Mostrar un mensaje y ofrecer al usuario 
  // un nuevo intento 
  echo 'Debe introducir un nombre y una contrasenia ', 
       'para acceder a este sitio web.<br />'; 
  echo '<a href="login-http.php">Intentar de nuevo</a>'; 
  exit; 
} 

if (! isset($_SERVER["PHP_AUTH_USER"])) { 
  // Sin variable $PHP_AUTH_USER = primera llamada al script. 
  // Solicitud de identificación. 
  autenticacion("PW 2024"); 
} else { 
  // Variable $PHP_AUTH_USER existe = llamada tras entrada. 
  // Recuperar los datos introducidos. 
  $identificador = $_SERVER["PHP_AUTH_USER"]; 
  $contrasenia = $_SERVER["PHP_AUTH_PW"]; 
  // Comprobar que el usuario existe. 
  if (usuario_existe($identificador,$contrasenia)) { 
    // El usuario existe... 
    // Salir a otra página e interrumpir el script 
    //En este ejemplo es la misma.
    header('location: inicio.php'); 
    exit; 
  } else { 
    // El usuario no existe... 
    // Intentar de nuevo. 
    autenticacion('PHP 2024: Identificación incorrecta'); 
  } 
} 
?> 