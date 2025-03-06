<?php

$count = 1;

for ($i = 0; $i < 10; $i++) {
    for($j = 0; $j < 10; $j++) {
        $tabla[$i][$j] = $count;
        $count++;
    }
}

echo "<table style='border-collapse: collapse;'>"; // collapse para que no se vean las líneas de separación de las celdas de la tabla
for ($i = 0; $i < 10; $i++) {
    echo "<tr>";
    for($j = 0; $j < 10; $j++) {
        echo "<td style='border: 2px solid black; padding: 5px;'>" . $tabla[$i][$j] . "</td>"; // border para que se vean las líneas de separación de las celdas de la tabla
    }
    echo "</tr>";
}
echo "</table>";
?>  