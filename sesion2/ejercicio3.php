<?php
define ("TAM", 10);
$count = 1;

for ($i = 1; $i <= TAM; $i++) {
    for($j = 1; $j <= TAM; $j++) {
        $tabla[$i][$j] = $count;
        $count++;
    }
}

echo "<table style='border-collapse: collapse;'>"; // collapse para que no se vean las líneas de separación de las celdas de la tabla
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for($j = 1; $j <= 10; $j++) {
        if ($i%2==0) {
            echo "<td style='border: 2px solid black; padding:5px; background-color: grey;'>" . $tabla[$i][$j] . "</td>"; // border para que se vean las líneas de separación de las celdas de la tabla
        } else {
            echo "<td style='border: 2px solid black; padding: 5px;'>" . $tabla[$i][$j] . "</td>"; // border para que se vean las líneas de separación de las celdas de la tabla
        }
    }
    echo "</tr>";
}
?>  