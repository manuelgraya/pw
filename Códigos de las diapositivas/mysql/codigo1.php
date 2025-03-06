<?php
$servername = "localhost";
$username = "pw";
$password = "pw";
$dbname = "programacionweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
} else {
    echo "Conexion realizada con exito.\n";
}
?>