<?php

$servername = "localhost";
$username = "pw";
$password = "pw";
$dbname="programacionweb";

//create connection
$conn = new mysqli($servername,$username,$password);

// check

if ($conn->connect_error){
    die("Conexión fallida: " . $conn->connect_error);
}else{
    echo "Conexión exitosa";
}
echo "<br>";
$ok = $conn->select_db($dbname);
if ($ok){
    echo "DB seleccionada correctamente";
}else{
    echo "Error al seleccionar la DB";
}

?>