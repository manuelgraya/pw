<?php
// prueba.php

include 'vehiculo.php';

$coche = new Coche("Toyota", "Corolla", "Rojo", 4, "Gasolina");
$camion = new Camion("Volvo", "FH16", "Azul", 2, 20000);
$moto = new Dos_ruedas("Honda", "CBR", "Negro", 1000);

$coche->acelerar(50);
$camion->acelerar(30);
$moto->acelerar(70);

echo "Velocidad del coche: " . $coche->getVelocidad() . " km/h\n";
echo "<br>";
echo "Velocidad del camión: " . $camion->getVelocidad() . " km/h\n";
echo "<br>";
echo "Velocidad de la moto: " . $moto->getVelocidad() . " km/h\n";

$coche->frenar(20);
$camion->frenar(10);
$moto->frenar(30);

echo "<br>";
echo "Velocidad del coche tras frenar: " . $coche->getVelocidad() . " km/h\n";
echo "<br>";
echo "Velocidad del camión tras frenar: " . $camion->getVelocidad() . " km/h\n";
echo "<br>";
echo "Velocidad de la moto tras frenar: " . $moto->getVelocidad() . " km/h\n";
?>
