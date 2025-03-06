<!-- Crea un programa en PHP que muestre una tabla con nombres y edades de
alumnos almacenados en un array, con una fila por alumno y dos columnas: una
para el nombre y otra para la edad. -->

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
$ok = mysqli_select_db($conn, 'programacionweb');
if ($ok) { 
  echo 'Base de datos seleccionada.<br />'; 
} else { 
  echo 'Fallo en la selección de la base de datos.<br />'; 
}

$consulta = mysqli_query($conn,'SELECT * FROM practicas');
if ($consulta === FALSE) { 
  echo 'Error de ejecución de la consulta'; 
} else { 
 echo 'Ejecución con éxito.<br \>'; 
}
echo "<br>";
echo "<br>";
echo "<table style='border-collapse: collapse;'>";
while ($fila = mysqli_fetch_array($consulta)) {
    echo "<tr>";
    echo "<td style='border: 2px solid black; padding: 5px;'>" . $fila['nombre'] . "</td>";
    echo "<td style='border: 2px solid black; padding: 5px;'>" . $fila['apellidos'] . "</td>";
    echo "<td style='border: 2px solid black; padding: 5px;'>" . $fila['calificacion'] . "</td>";
    echo "</tr>";
}

//cierra la conexion
mysqli_close($conn);

//check
if ($conn->connect_error){
    die("Conexión fallida: " . $conn->connect_error);
}else{
    echo "Conexión cerrada";
}

?>