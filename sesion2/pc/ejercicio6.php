<!-- Implementa un programa en PHP que almacene la siguiente información anidada:
• Comunidad autónoma (ANDALUCÍA).
• Provincias (De Andalucía).
• De cada provincia, tres ciudades cualesquiera.
• De cada ciudad cualquiera, su población actual. -->

<?php
define("TAM", 10);

//ciudades por provincias
$ciudades_cadiz = ['Sanlúcar de Barrameda', 'Jerez de la Frontera', 'Cádiz'];
$ciudades_cordoba = ['Córdoba', 'Lucena', 'Puente Genil'];   
$ciudades_granada = ['Granada', 'Motril', 'Almuñécar'];
$ciudades_huelva = ['Huelva', 'Lepe', 'Ayamonte'];
$ciudades_jaen = ['Jaén', 'Linares', 'Úbeda'];
$ciudades_malaga = ['Málaga', 'Marbella', 'Torremolinos'];
$ciudades_sevilla = ['Sevilla', 'Dos Hermanas', 'Alcalá de Guadaíra'];

//tabla asociativa de ciudades
$ciudades ['Cadiz'] = $ciudades_cadiz;
$ciudades ['Cordoba'] = $ciudades_cordoba;
$ciudades ['Granada'] = $ciudades_granada;
$ciudades ['Huelva'] = $ciudades_huelva;
$ciudades ['Jaen'] = $ciudades_jaen;
$ciudades ['Malaga'] = $ciudades_malaga;
$ciudades ['Sevilla'] = $ciudades_sevilla;

//cominudad autonoma
$comunidad ['Andalucia'] = $ciudades;

//imprime la tabla, cada ciudad de ciudades una fila y andalucia que englobe todas las ciudades
echo "<table border='1'>";
echo "<tr><th>Comunidad Autónoma</th><th>Provincia</th><th>Ciudad</th></tr>";

$first_row = true;
foreach ($comunidad as $comunidad_nombre => $provincias) {
    $comunidad_rowspan = 0;
    foreach ($provincias as $provincia_nombre => $ciudades) {
        $comunidad_rowspan += count($ciudades);
    }
    foreach ($provincias as $provincia_nombre => $ciudades) {
        $provincia_rowspan = count($ciudades);
        foreach ($ciudades as $index => $ciudad) {
            echo "<tr>";
            if ($first_row) {
                echo "<td rowspan='$comunidad_rowspan'>$comunidad_nombre</td>";
                $first_row = false;
            }
            if ($index == 0) {
                echo "<td rowspan='$provincia_rowspan'>$provincia_nombre</td>";
            }
            echo "<td>$ciudad</td>";
            echo "</tr>";
        }
    }
}

echo "</table>";

// foreach ($comunidad as $comunidad_nombre => $provincias) {
//     foreach ($provincias as $provincia_nombre => $ciudades) {
//         foreach ($ciudades as $index => $ciudad) {
//             echo "<tr>";
//             echo "<td>$comunidad_nombre</td>";
//             echo "<td>$provincia_nombre</td>";
//             echo "<td>$ciudad</td>";
//             echo "</tr>";
//         }
//     }
// }

?>