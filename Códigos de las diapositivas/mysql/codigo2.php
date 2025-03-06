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

?>