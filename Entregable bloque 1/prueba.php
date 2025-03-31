<?php
require_once './vehiculo.php'; // Asegúrate de incluir el archivo donde están las clases

if (file_exists('./vehiculo.php')) {
    // Crear objetos
    $vehiculo = new Vehiculo("Rojo", 1000);
    $coche = new Coche("Azul", 1200, 4, 2);
    $camion = new Camion("Verde", 5000, 2, 10);
    $moto = new Dos_ruedas("Negro", 200, 600);

    // Probar métodos
    echo "<strong>Vehículo:</strong><br>";
    $vehiculo->circula();
    $vehiculo->anadir_persona(80);
    echo "Nuevo peso del vehículo: {$vehiculo->getPeso()} kg<br><br>";

    echo "<strong>Coche:</strong><br>";
    $coche->circula();
    $coche->anadir_cadenas_nieve(2);
    $coche->quitar_cadenas_nieve(1);
    echo "Número de cadenas de nieve: {$coche->getNumeroCadenasNieve()}<br><br>";

    echo "<strong>Camión:</strong><br>";
    $camion->circula();
    $camion->anadir_remolque(5);
    echo "Longitud total del camión: {$camion->longitud} metros<br><br>";

    echo "<strong>Moto:</strong><br>";
    $moto->circula();
    $moto->poner_gasolina(10);
    echo "Nuevo peso de la moto: {$moto->getPeso()} kg<br>";


} else {
    echo "El archivo poovehiculos.php no se encuentra en la ruta especificada.";
}

?>
