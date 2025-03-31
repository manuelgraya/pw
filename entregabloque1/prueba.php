<?php
require_once 'Vehiculo.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas de Vehículos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color:rgb(249, 244, 244);
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #444;
        }
        .section {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color:rgb(249, 249, 249);
        }
        .section h2 {
            margin-top: 0;
            color: #555;
        }
        .section p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pruebas de Vehículos</h1>

        <div class="section">
            <h2>Vehículo</h2>
            <?php
            $vehiculo = new Vehiculo("Rojo", 1000);
            echo "<p><strong>Vehículo creado con color: Rojo y peso: 1000 kg.</strong></p>";
            $vehiculo->circula();
            echo "<p>Peso del vehículo: " . $vehiculo->getPeso() . " kg.</p>";
            echo "<p>Color del vehículo: " . $vehiculo->getColor() . ".</p>";
            $vehiculo->añadir_persona(70);
            echo "<p>Peso del vehículo después de añadir una persona de 70 kg: " . $vehiculo->getPeso() . " kg.</p>";
            $vehiculo->para();
            ?>
        </div>

        <div class="section">
            <h2>Dos Ruedas</h2>
            <?php
            $dosRuedas = new Dos_ruedas("Azul", 200, 125);
            echo "<p><strong>Dos ruedas creado con color: Azul, peso: 200 kg y cilindrada: 125 cc.</strong></p>";
            $dosRuedas->circula();
            echo "<p>Peso del vehículo: " . $dosRuedas->getPeso() . " kg.</p>";
            echo "<p>Color del vehículo: " . $dosRuedas->getColor() . ".</p>";
            echo "<p>Cilindrada: " . $dosRuedas->getCilindrada() . " cc.</p>";
            ?>
        </div>

        <div class="section">
            <h2>Cuatro Ruedas</h2>
            <?php
            $cuatroRuedas = new Cuatro_ruedas("Negro", 1500, 4);
            echo "<p><strong>Cuatro ruedas creado con color: Negro, peso: 1500 kg y número de puertas: 4.</strong></p>";
            $cuatroRuedas->circula();
            echo "<p>Peso del vehículo: " . $cuatroRuedas->getPeso() . " kg.</p>";
            echo "<p>Color del vehículo: " . $cuatroRuedas->getColor() . ".</p>";
            echo "<p>Número de puertas: " . $cuatroRuedas->getnumPuertas() . ".</p>";
            ?>
        </div>

        <div class="section">
            <h2>Coche</h2>
            <?php
            $coche = new Coche("Blanco", 1200, 4, 2);
            echo "<p><strong>Coche creado con color: Blanco, peso: 1200 kg, número de puertas: 4 y cadenas de nieve: 2.</strong></p>";
            $coche->circula();
            echo "<p>Peso del vehículo: " . $coche->getPeso() . " kg.</p>";
            echo "<p>Color del vehículo: " . $coche->getColor() . ".</p>";
            echo "<p>Número de puertas: " . $coche->getnumPuertas() . ".</p>";
            echo "<p>Número de cadenas de nieve: " . $coche->getnumCadenasNieve() . ".</p>";
            ?>
        </div>

        <div class="section">
            <h2>Camión</h2>
            <?php
            $camion = new Camion("Verde", 5000, 2, 10);
            echo "<p><strong>Camión creado con color: Verde, peso: 5000 kg, número de puertas: 2 y longitud: 10 metros.</strong></p>";            $camion->circula();
            echo "<p>Peso del vehículo: " . $camion->getPeso() . " kg.</p>";
            echo "<p>Color del vehículo: " . $camion->getColor() . ".</p>";
            echo "<p>Número de puertas: " . $camion->getnumPuertas() . ".</p>";
            echo "<p>Longitud del camión: " . $camion->getLongitud() . " metros.</p>";
            ?>
        </div>
    </div>
</body>
</html>