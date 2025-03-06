<?php
$servername = "localhost";
$username = "pw";
$password = "pw";
$dbname = "programacionweb";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
} else {
    echo "Conexion realizada con exito.\n";
}

$ok = mysqli_select_db($conn, 'programacionweb');
if ($ok) { 
  echo 'Base de datos seleccionada.<br />'; 
} else { 
  echo 'Fallo en la selección de la base de datos.<br />'; 
}

// Ejecución de una consulta SELECT. 
$consulta = mysqli_query($conn,'SELECT * FROM practicas'); 
if ($consulta === FALSE) { 
  echo 'Error de ejecución de la consulta'; 
} else { 
 echo 'Ejecución con éxito.<br \>'; 
} 

echo 'Número de resultados: ',mysqli_num_rows($consulta); 


?>