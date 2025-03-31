<?php
require_once 'Vehiculo.php';

// Array de vehículos disponibles
$vehiculos = [
    new Vehiculo("Rojo", 1000),
    new Dos_ruedas("Azul", 200, 125),
    new Cuatro_ruedas("Negro", 1500, 4),
    new Coche("Blanco", 1200, 4, 2),
    new Camion("Verde", 5000, 2, 10)
];

// Sesión para manejar las reservas
session_start();
if (!isset($_SESSION['reservas'])) {
    $_SESSION['reservas'] = [];
}

// Función para reservar un vehículo
function reservarVehiculo($index) {
    if (!isset($_SESSION['reservas'][$index])) {
        $_SESSION['reservas'][$index] = true;
        return "Vehículo reservado con éxito.";
    }
    return "El vehículo ya está reservado.";
}

// Función para liberar un vehículo
function liberarVehiculo($index) {
    if (isset($_SESSION['reservas'][$index])) {
        unset($_SESSION['reservas'][$index]);
        return "Vehículo liberado con éxito.";
    }
    return "El vehículo no estaba reservado.";
}

// Manejo de acciones del formulario
$mensaje = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'];
    $index = $_POST['vehiculo'];

    if ($accion === 'reservar') {
        $mensaje = reservarVehiculo($index);
    } elseif ($accion === 'liberar') {
        $mensaje = liberarVehiculo($index);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas de Vehículos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
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
        .vehiculo {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .vehiculo p {
            margin: 5px 0;
        }
        .mensaje {
            margin: 10px 0;
            padding: 10px;
            background-color: #e7f3e7;
            border: 1px solid #d4e7d4;
            border-radius: 5px;
            color: #2d662d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reservas de Vehículos</h1>

        <?php if ($mensaje): ?>
            <div class="mensaje"><?php echo $mensaje; ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="vehiculos">
                <?php foreach ($vehiculos as $index => $vehiculo): ?>
                    <div class="vehiculo">
                        <p><strong>Vehículo <?php echo $index + 1; ?>:</strong></p>
                        <p>Color: <?php echo $vehiculo->getColor(); ?></p>
                        <p>Peso: <?php echo $vehiculo->getPeso(); ?> kg</p>
                        <p>
                            Estado: 
                            <?php 
                            // Mostrar el estado en rojo si está reservado, en verde si está disponible
                            echo isset($_SESSION['reservas'][$index]) 
                                ? '<span style="color: red;">Reservado</span>' 
                                : '<span style="color: green;">Disponible</span>'; 
                            ?>
                        </p>
                        <button type="submit" name="accion" value="reservar" <?php echo isset($_SESSION['reservas'][$index]) ? 'disabled' : ''; ?>>Reservar</button>
                        <button type="submit" name="accion" value="liberar" <?php echo !isset($_SESSION['reservas'][$index]) ? 'disabled' : ''; ?>>Liberar</button>
                        <input type="hidden" name="vehiculo" value="<?php echo $index; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </form>
    </div>
</body>
</html>